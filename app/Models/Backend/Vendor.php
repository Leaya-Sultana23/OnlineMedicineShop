<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'office_addres',
        'email',
        'phone',
        'operator_name',
        'operator_phone',
        'tin',
        'trade_number',
        'status'
    ];
}
