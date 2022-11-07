<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Medicine;
use App\Models\Backend\Category;
use App\Models\Backend\Supplier;
use Illuminate\Http\Request;
use App\Models\Frontend\AddtoCart;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->role==3){
            return redirect()->route("home");
        }
        else{
            $medicine = Medicine::count();
            $category = Category::count();
            $supplier = Supplier::count();
            $order = AddtoCart::count();
            return view('backend/dashboard',compact('medicine','category','order','supplier'));
        }
    }
}
