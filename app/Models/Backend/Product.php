<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

      protected $fillable = [

            'vendor_id',
            'cat_id',
            'subcat_id',
            'product_name',
            'slug',
            'product_code',
            'product_price',
            'discount',
            'discount_price',
            'short_description',
            'long_description',
            'thumbnails',
            'quantity',
            'status'








      ];
  
}
