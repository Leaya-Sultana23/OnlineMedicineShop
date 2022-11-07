<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\Vendor;

class VendorController extends Controller
{
    public function add(){
        return view('backend.pages.vendor.add');
    }

    public function view(){
        return view('backend.pages.vendor.manage');
    }


    public function store(Request $request){
        $valid = Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'office_addres'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'operator_name'=>'required',
            'operator_phone'=>'required',
            'tin'=>'required',
            'trade_number'=>'required',
            'status'=>'required'
        ]);
        if($valid->fails()){
            return response()->json([
                'status'=>'faild',
                'errors'=>$valid->messages()
            ]);
        }
        else{
            $vendor =new Vendor;
            $vendor->name = $request->name;
            $vendor->description = $request->description;
            $vendor->office_addres = $request->office_addres;
            $vendor->email = $request->email;
            $vendor->phone = $request->phone;
            $vendor->operator_name = $request->operator_name;
            $vendor->operator_phone = $request->operator_phone;
            $vendor->tin = $request->tin;
            $vendor->trade_number = $request->trade_number;
            $vendor->status = $request->status;
            $vendor->save();
            return response()->json([
                'status'=>'success'
            ]);
        }
    }

    public function show(){
        $vendor = Vendor::all();
        return response()->json([
            'data'=>$vendor
        ]);
    }

    public function destroy($id){
        $vendor = Vendor::find($id);
        $vendor->delete();
        return response()->json([
            'status'=>"success"
        ]);
    }

    public function edit($id){
        $vendor = Vendor::find($id);
        return response()->json([
            'data'=>$vendor
        ]); 
    }


    public function update(Request $request, $id){
        $vendor =Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->description = $request->description;
        $vendor->office_addres = $request->office_addres;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->operator_name = $request->operator_name;
        $vendor->operator_phone = $request->operator_phone;
        $vendor->tin = $request->tin;
        $vendor->trade_number = $request->trade_number;
        $vendor->status = $request->status;
        $vendor->update();
        return response()->json([
            'status'=>'success'
        ]);
    }


    public function change($id)
    {
        $vendor = Vendor::find($id);
        if($vendor->status==1){
            $vendor->status=2;
        }
        elseif($vendor->status==2){
            $vendor->status=1;
        }
        $vendor->update();
        if($vendor){
            return response()->json([
                "status"=>'success'
            ]);
        }
        
    }

}
