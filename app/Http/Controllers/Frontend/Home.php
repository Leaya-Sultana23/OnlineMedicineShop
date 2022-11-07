<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Medicine;
use App\Models\Backend\Slider;
use App\Models\Backend\Vendor;
use App\Models\Backend\Subcategory;
use App\Models\Backend\Product;
use App\Models\Frontend\AddtoCart;

class Home extends Controller
{
    public function index(){
        $categories = Category::Where("status",1)->get();
        $sliders = Slider::Where("status",1)->get();
        $medicines = Medicine::Where("status",1)->get();
        $items = Category::with('items')->get(); 
        return view("frontend.home", compact("categories","sliders","medicines","items"));
    }

    public function profile(){
        return view('frontend.pages.profile');
    }
    public function order(){
        $items = AddtoCart::all();
        return view('frontend.pages.profile',compact('items'));
    }
    public function view($id){
        $data = Medicine::find($id);
        return view('frontend.includes.productquickview');
    }
}
