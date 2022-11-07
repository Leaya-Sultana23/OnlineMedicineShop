<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Backend\Subcategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Backend\Category;


class SubCategoryController extends Controller
{
    public function subcategoryview(){
        $category = Category::all();
        return view('backend.pages.subcategory.subcategory',compact('category'));
    }

    public function addsubcategory(Request $request){

        $validator=Validator::make($request->all(),[

            'name'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=> 'required',
    
    
           ]);
    
           if ($validator->fails())
           {
               return response()->json([
                'status'=>'failed',
                'errors'=>$validator->messages()
    
               ]);    
           }

           else{

           
       

            if($request->image){
                $image=$request->File('image');
                $customname=rand().".".$image->getClientOriginalExtension();
                $location= public_path('backend/subcategory/'.$customname);
                Image::make($image)->save($location);
          
            }
          
            $subcategory=new Subcategory();
            $subcategory->cat_id=$request->categoryitem;
            $subcategory->name=$request->name;
            $subcategory->slug=Str::slug($request->name);
            $subcategory->image=$customname;
            $subcategory->status=$request->status;
           

            $subcategory->save();

            return response()->json([

               'status'=>'success'
            ]);
        
           
        }
    }

    public function showtable(){

        $subcategory=Subcategory::all();

        return response()->json([

           'alldata'=>$subcategory
        ]);

        
    }

    public function delete($id){
        $subcategory=Subcategory::find($id);
        if(File::exists('backend/subcategory/'.$subcategory->image)){
            File::delete('backend/subcategory/'.$subcategory->image);
        }
        $subcategory->delete();

        return response()->json([
          
            'delete'=>'success'



        ]);

    }

    function updateview($id){

        $subcategory=Subcategory::find($id);
        return response()->json([
          
            'status'=>$subcategory



        ]);

    }

    function update(Request $request, $id){

        if($request->image){
            $image=$request->File('image');
            $customname=rand().".".$image->getClientOriginalExtension();
            $location= public_path('backend/subcategory/'.$customname);
            Image::make($image)->save($location);
      
        }
      
        $subcategory=Subcategory::find($id);
        $subcategory->cat_id=2;
        $subcategory->name=$request->name;
        $subcategory->image=$customname;
        $subcategory->status=$request->status;
       

        $subcategory->update();

        return response()->json([

           'status'=>'success'
        ]);
    



    }


    
}
