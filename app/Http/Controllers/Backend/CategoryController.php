<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Category;
use Intervention\Image\Facades\Image;
use File;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{
    public function addCategory(){
        return view('backend/pages/category/addCategory');
    }
  
    public function store(Request $request){

        $valid = Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'status'=>'required'
        ]);
        if($valid->fails()){
            return response()->json([
                'status'=>'faild',
                'errors'=>$valid->getMessageBag()
            ]);
        }
     
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/category/'.$customName);
            Image::make($images)->save($location);
           
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug =Str::slug($request->name);
        $category->description = $request->description;
        $category->image =  $customName;
        $category->status = $request->status;
        $category->save();
        return response()->json([
            'sucess'=>'ok'
        ]);
    }

    public function show(){
        $show = Category::all();
        return response()->json([
            'show'=>$show
        ]);
    }

    public function destroy($id){
        $deletes = Category::find($id);
        if (File::exists('backend/category/'.$deletes->image)) {
                File::delete('backend/category/'.$deletes->image);
            }
            $deletes->delete();
            return response()->json([
            'status'=>'success'
        ]);
    }


    public function status($id){
        $status = Category::find($id);
        if ($status->status==1) {
           $status->status=2;
        }
        else{
            $status->status=1;
        }
        $status->update();
        return response()->json([
            'status'=>'success'
        ]);
    }

    public function edit($id){
        $edit = Category::find($id);
        return response()->json([
            'data'=>$edit
        ]);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if ($request->image) {
            if (File::exists('backend/category/'.$category->image)) {
                File::delete('backend/category/'.$category->image); 
                $images = $request->file('image');
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/category/'.$customName);
                Image::make($images)->save($location);
                $category->image =$customName ;
            }
           
           
        }

            $category->name = $request->name;
            $category->description = $request->description;
            //$category->image = $customName;
            $category->status = $request->status;
            $category->update();
            return response()->json([
            'status'=>'success'
        ]);
    }
}

