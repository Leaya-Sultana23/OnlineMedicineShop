<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $fillable=[
        'cupon_code',
        'discount',
        'discount_amount',
        'start_at',
        'end_at',
        'status',
        'product_id'
    ];
}
