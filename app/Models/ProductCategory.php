<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductParentCategories;
use App\Models\Product;

class ProductCategory extends Model
{
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    use HasFactory;
    protected $table = 'product_categories';

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id')->where('deleted_at', NULL);
    }

    public function parent_categories()
    {
        return $this->hasMany(ProductParentCategories::class)->where('status', 'active')->where('deleted_at', NULL);
    }
}
