<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Medicine;

class Category extends Model
{
    public function items(){
        return $this->hasMany(Medicine::class, 'cat_id');
    }
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status'
    ];
}

?>