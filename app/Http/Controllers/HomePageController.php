<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Product;
use App\Models\Faq;
use App\Models\ProductCategory;
use App\Models\Promotions;
use App\Models\Testimonial;
use App\Models\CustomerInquiry;
use Str;
use Illuminate\Validation\Rule;
use Auth;

class HomePageController extends Controller
{
    public function homepage(Request $request)
    {
        $locations = Location::where('disable_location', '0')->get();

        $product_categories = ProductCategory::with('parent_categories', 'products')
                                            ->whereNull('deleted_at')
                                            ->whereHas('products', function($query) {
                                                $query->whereNotNull('id');
                                            })
                                            ->get();

        $promotions = Promotions::with('promotion_products.product_details.images', 'promotion_services.service_details.images', 'promotion_images')
                                ->where('status', 'active')
                                ->get();

        $testimonials  = Testimonial::all();
        $faqs  = Faq::all();
                                               
        return view('index', compact('locations', 'product_categories', 'promotions','testimonials','faqs'));
    }

    public function products_page($categoryName)
    {
        $locations = Location::where('disable_location', '0')->get();
        
        $product_category = ProductCategory::where('product_category_slug', $categoryName)->select('id', 'product_category_slug')->first();

        $product_category_id = $product_category->id;

        $product_category_slug = $product_category->product_category_slug;

        $products = Product::with('images', 'productCategory', 'category', 'brand', 'model', 'variant', 'type')
                            ->where('products.category_id', $product_category_id)
                            ->where('status', 1)
                            ->whereNull('products.deleted_at')
                            ->select('products.id', 'product_name', 'product_code', 'hsn_no', 
                                    'manufacture_name', 'supplier', 'quantity', 'is_oem', 'out_of_stock', 
                                    'is_service', 'cost_price', 'description', 'short_description', 'service_icon', 
                                    'item_number', 'used_part', 'access_series', 'year', 'popular', 'category_id', 
                                    'vehicle_category_id', 'brand_id', 'model_id', 'type_id', 'varient_model_id')
                            ->distinct()
                            ->paginate(1);
        $testimonials  = Testimonial::all();
        $faqs  = Faq::all();
        $product_categories = ProductCategory::whereNull('deleted_at')->get();

        return view('products', compact('locations', 'product_category_slug', 'products', 'testimonials','faqs','product_categories'));
    }

    public function fetchProductData($categoryName, Request $request)
    {
        $page = $request->input('page', 1);

        $product_category = ProductCategory::where('product_category_slug', $categoryName)->select('id', 'product_category_slug')->first();

        $product_category_id = $product_category->id;

        $products = Product::with('images', 'productCategory', 'category', 'brand', 'model', 'variant', 'type')
                            ->where('products.category_id', $product_category_id)
                            ->where('status', 1)
                            ->whereNull('products.deleted_at')
                            ->select('products.id', 'product_name', 'product_code', 'hsn_no', 
                                    'manufacture_name', 'supplier', 'quantity', 'is_oem', 'out_of_stock', 
                                    'is_service', 'cost_price', 'description', 'short_description', 'service_icon', 
                                    'item_number', 'used_part', 'access_series', 'year', 'popular', 'category_id', 
                                    'vehicle_category_id', 'brand_id', 'model_id', 'type_id', 'varient_model_id')
                            ->distinct()
                            ->paginate(1, ['*'], 'page', $page);

        return response()->json($products);
    }

    public function create_enquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $enquiry_data = [];

        $enquiry_data['customer_name'] = $request->name;
        $enquiry_data['customer_phone'] = $request->phone;
        $enquiry_data['customer_email'] = !empty($request->email) ? $request->email : '';
        $enquiry_data['customer_inquiry_category'] = !empty($request->customer_inquiry_category) ? $request->customer_inquiry_category : 'product';
        $enquiry_data['inquiry_description'] = $request->description;
        $enquiry_data['inquiry_product_id'] = $request->product_id;
        $enquiry_data['inquiry_location_id'] = $request->location_id;
        $enquiry_data['inquiry_details'] = !empty($request->product_selected_details) ? $request->product_selected_details : NULL;
        $enquiry_data['inquiry_created_at'] = date('Y-m-d H:i:s');

        $creat_enquiry = CustomerInquiry::create($enquiry_data);
        

        if(!empty($creat_enquiry))
        {
            return response()->json([
                'status' => 'success',
                'message' => 'Enquiry created successfully.'
            ]);
        }else{
            return response()->json([
                'status' => 'fail',
                'message' => 'Something went wrong. Enquiry not created.'
            ]);
        }
    }
    public function searchProducts(Request $request)
    {
        $query = $request->input('query');
    
        $products = Product::where('product_name', 'like', '%' . $query . '%')
            ->orWhere('product_code', 'like', '%' . $query . '%')
            ->pluck('product_name'); 
    
        return response()->json($products);
    }
    public function contactUs(){
        $locations = Location::where('disable_location', '0')->get();
        return view('contact-us',compact('locations'));
    }

    public function product_details(Request $request)
    {
        $locations = Location::where('disable_location', '0')->get();
        
        $product_category = ProductCategory::select('id', 'product_category_slug')->first();

        $product_category_id = !empty($product_category->id) ? $product_category->id : NULL;

        $product_category_slug = !empty($product_category->product_category_slug) ? $product_category->product_category_slug : NULL;

        if(!empty($product_category_id))
        {
            $products = Product::with('images', 'productCategory', 'category', 'brand', 'model', 'variant', 'type')
                                ->where('products.category_id', $product_category_id)
                                ->where('status', 1)
                                ->whereNull('products.deleted_at')
                                ->select('products.id', 'product_name', 'product_code', 'hsn_no', 
                                        'manufacture_name', 'supplier', 'quantity', 'is_oem', 'out_of_stock', 
                                        'is_service', 'cost_price', 'description', 'short_description', 'service_icon', 
                                        'item_number', 'used_part', 'access_series', 'year', 'popular', 'category_id', 
                                        'vehicle_category_id', 'brand_id', 'model_id', 'type_id', 'varient_model_id')
                                ->distinct()
                                ->paginate(1);
        }else{
            $products = [];
        }
        $testimonials  = Testimonial::all();
        $faqs  = Faq::all();
        $product_categories = ProductCategory::whereNull('deleted_at')->get();

        return view('product-details', compact('locations', 'product_category_slug', 'products', 'testimonials','faqs','product_categories'));
    }
}
