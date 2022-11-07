<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Backend\Category;
use App\Models\Backend\Supplier;
use App\Models\Backend\Subcategory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
    public function categories(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function subcategories(){
        return $this->belongsTo(Subcategory::class, 'subcat_id');
    }
    use HasFactory;

    protected $fillable = [
            'name',
            'description',
            'supplier_id',
            'cat_id',
            'subcat_id',
            'image',
            'import_date',
            'expire_date',
            'price',
            'quantity',
            'status'

    ];
}
