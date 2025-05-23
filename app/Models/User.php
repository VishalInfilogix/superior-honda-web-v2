<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CustomerInquiry;

class User extends Authenticatable
{
    use HasRoles, HasFactory, Notifiable, SoftDeletes;
    protected $guarded=[];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class, 'id', 'user_id');
    }

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class, 'id', 'user_id');
    }

    public function customerInquiries()
    {
        return $this->hasMany(customerInquiry::class);
    }
}
