<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductGallery;
use App\Models\Backend\Slider;

class ProductGalleryController extends Controller
{
    public function add(){
        $slider = slider::all();
        return view('backend/pages/productGallery/productGallery',compact("slider"));
    }
}
