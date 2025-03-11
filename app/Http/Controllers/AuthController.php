<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;
use Hash;

class AuthController extends Controller
{

    public function customer_register(Request $request)
    {
        $request->validate([
            'customer_name'    => 'required',
            'phone_number' => 'required',
            'password' => 'required'
        ]);

        if(!empty($request->email))
        {
            // check for unique email
            $check_for_email = User::where('email', $request->email)->whereNull('deleted_at')->first();

            if(!empty($check_for_email))
            {
                return redirect()->route('homepage')->with('error', 'This email already exists.');
            }
        }

        if(!empty($request->phone_number))
        {
            // check for unique phone number
            $check_for_phone_number = User::where('phone_number', $request->phone_number)->whereNull('deleted_at')->first();

            if(!empty($check_for_phone_number))
            {
                return redirect()->route('homepage')->with('error', 'This phone number already exists.');
            }
        }
        $customerName = $request->customer_name;

        $nameParts = explode(' ', $customerName);

        $firstName = $nameParts[0];

        $lastName = count($nameParts) > 1 ? implode(' ', array_slice($nameParts, 1)) : '';

        User::create([
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'email'              => $request->email,
            'phone_number'       => $request->phone_number,
            'password'           => Hash::make($request->password),
        ])->assignRole('Customer');

        return redirect()->back()->with('success', 'Customer created successfully.');
    }

    public function customer_login(Request $request)
    {
        $request->validate([
            'login_phone_email' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $request->login_phone_email)
                ->orWhere('phone_number', $request->login_phone_email)
                ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            if(Auth::attempt(['email' => $request->login_phone_email, 'password' => $request->password]) || Auth::attempt(['phone_number' => $request->login_phone_email, 'password' => $request->password])) {                
                return response()->json(['success'=> true, 'message' => 'Logged in successfully.']);
            }else{         
                return response()->json(['success'=> false, 'message' => 'Something went wrong.']);       
            }
        }
        return response()->json(['success'=> false,'message' => 'Invalid Credentials.']);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('success', 'Logged out successfully.');
    }
}
