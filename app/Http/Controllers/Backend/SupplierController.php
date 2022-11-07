<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function add(){
        return view('backend.pages.supplier.addsupplier');
    }

    public function view(){
        return view('backend.pages.supplier.manage');
    }


    public function store(Request $request){
        $valid = Validator::make($request->all(),[
            'name'=>'required',
            'address'=>'required',
            'description'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'mfg'=>'required',
            'created_date'=>'required',
            'operator_name'=>'required',
            'status'=>'required'
        ]);
        if($valid->fails()){
            return response()->json([
                'status'=>'faield',
                'errors'=>$valid->messages()
            ]);
        }
        else{
            $supplier =new Supplier;
            $supplier->name = $request->name;
            $supplier->address = $request->address;
            $supplier->description = $request->description;
            $supplier->email = $request->email;
            $supplier->phone = $request->phone;
            $supplier->mfg = $request->mfg;
            $supplier->created_date = $request->created_date;
            $supplier->operator_name = $request->operator_name;
            $supplier->status = $request->status;
            $supplier->save();
            return response()->json([
                'status'=>'success'
            ]);
        }
    }

    public function show(){
        $supplier = Supplier::all();
        return response()->json([
            'data'=>$supplier
        ]);
    }

    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return response()->json([
            'status'=>"success"
        ]);
    }

    public function edit($id){
        $supplier = Supplier::find($id);
        return response()->json([
            'data'=>$supplier
        ]); 
    }


    public function update(Request $request, $id){
        $supplier =Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->description = $request->description;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->mfg = $request->mfg;
        $supplier->created_date = $request->created_date;
        $supplier->operator_name = $request->operator_name;
        $supplier->status = $request->status;
        $supplier->update();
        return response()->json([
            'status'=>'success'
        ]);
    }


    public function change($id)
    {
        $supplier = Supplier::find($id);
        if($supplier->status==1){
            $supplier->status=2;
        }
        elseif($supplier->status==2){
            $supplier->status=1;
        }
        $supplier->update();
        if($supplier){
            return response()->json([
                "status"=>'success'
            ]);
        }
        
    }

}
