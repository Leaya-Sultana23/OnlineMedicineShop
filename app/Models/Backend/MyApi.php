<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyApi extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'address',
        'phone',
        'email',
        'nid',
        'appname',
        'description',
        'url',
        'status',
        'clientid',
        'token'
    ];
}
