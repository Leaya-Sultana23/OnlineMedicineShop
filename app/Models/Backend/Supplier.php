<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
            "name",
            'address',
            'description',
            'email',
            'phone',
            'mfg',
            'created_date',
            'operator_name',
            'status',  
    ];
}
