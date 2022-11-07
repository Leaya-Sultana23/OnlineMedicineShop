<?php

namespace App\Models\Frontend;

use App\Models\Backend\Medicine;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddtoCart extends Model
{
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function medicines(){
        return $this->belongsTo(Medicine::class, 'product_id');
    }
    use HasFactory;
    protected $fillable = [
            'user_id',
            'product_id',
            'name',
            'image',
           'price',
            'quantity'
    ];
}
