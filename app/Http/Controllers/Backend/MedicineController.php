<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Medicine;
use App\Models\Backend\Supplier;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class MedicineController extends Controller
{
    public function add(){
        $supplier = Supplier::all();
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('backend.pages.medicine.add',compact('supplier','category','subcategory'));
    }
    public function store(Request $request){
        $data = new Medicine;
        if($request->image){
            $image = $request->file('image') ;
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("backend/medicine/".$customName);
            Image::make($image)->save($location);
        }
        $data->name = $request->name;
        $data->description = $request->description;
        $data->supplier_id = $request->supplier_id;
        $data->cat_id = $request->cat_id;
        $data->subcat_id = $request->subcat_id;
        $data->image = $customName;
        $data->price = $request->price;
        $data->import_date = $request->import_date;
        $data->expire_date = $request->expire_date ;
        $data->quantity = $request->quantity;
        $data->discount = $request->discount;
        $data->dis_amount = $request->dis_amount;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('medicine.show');
        

    }
    // public function subcategory($id){
    //     $find = Subcategory::where('cat_id',$id)->get();
    //     return response()->json([
    //         'status'=>'success',
    //         'data'=>$find
    //     ]);
    // }

    public function show(){
        $datashow = Medicine::all();
        return view('backend.pages.medicine.show',compact('datashow','items'));
    }

    public function edit($id){
        $supplier = Supplier::where('id',$id)->get();
        $category = Category::where('id',$id)->get();
        $scategory = Subcategory::where('id',$id)->get();
        $medicine = Medicine::find($id);
        return view('backend.pages.medicine.edit',compact('medicine','supplier','category','scategory'));
    }

    public function update(Request $request,$id){
        $medicine = Medicine::find($id);
        if($request->image){
            if(File::exists('backend/medicine/'.$medicine->image)){
                File::delete('backend/medicine/'.$medicine->image);
            }
            $image = $request->file('image') ;
            $customName = rand().".".$image->getClientOriginalExtension();
            $location = public_path("backend/medicine/".$customName);
            Image::make($image)->save($location);
            $medicine->image = $customName;
        }
        $medicine->name = $request->name;
        $medicine->description = $request->description;
        $medicine->supplier_id = $request->supplier_id;
        $medicine->cat_id = $request->cat_id;
        $medicine->subcat_id = $request->subcat_id;
        $medicine->price = $request->price;
        $medicine->import_date = $request->import_date;
        $medicine->expire_date = $request->expire_date ;
        $medicine->quantity = $request->quantity;
        $medicine->discount = $request->discount;
        $medicine->dis_amount = $request->dis_amount;
        $medicine->status = $request->status;
        $medicine->update();
        return redirect()->route('medicine.show');

    }
    

    public function destroy($id){
        $data = Medicine::find($id);
        if (File::exists('backend/medicine/'.$data->image)) {
            File::delete('backend/medicine/'.$data->image);
        }
        $data->delete();
        return redirect()->route('medicine.show');
    }

    public function change($id){
        $status = Medicine::find($id);
        if($status->status==1){
            $status->status = "2";
        }else{
            $status->status ="1";
        }

        $status->update();
        return redirect()->route('medicine.show');
    }
}
