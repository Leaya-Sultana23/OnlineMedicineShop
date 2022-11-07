<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
         function productview(){
            $categories = Category::with('products')->get();
            return view('backend.pages.product.product',compact('categories'));
         }

         function addproduct(Request $request){

            // $request->validate([

            //    // 'product_name'=>'required',
            //    // 'product_price'=>'required',
            //    // 'product_code'=>'required',
            //    // 'short_description'=>'required',
            //    // 'quantity'=>'required',
            //    // 'short_description'=>'required',
            //    // 'thumbnails'=>'required',
            //    // 'status'=>'required',
         
         
            //    //  ]);
   

            if($request->image){
               $image=$request->file('image');
               $customname=rand().".".$image->getClientOriginalExtension();
               $location= public_path('backend/product/'.$customname);
               Image::make($image)->save($location);
           }

            $product =new Product;
            $product->vendor_id=1;
            $product->cat_id=1;
            $product->subcat_id=1;
            $product->product_name=$request->product_name;
            $product->product_price=$request->product_price;
            $product->discount=$request->discount;
            $product->discount_price=$request->discount_price;
            $product->product_code=$request->product_code;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->quantity=$request->quantity;
            $product->status=$request->status;
            $product->slug=Str::slug($request->product_name);
            $product->thumbnails= $customname;

            $product->save();

            return redirect()->back()->with('message',"Product Added Successfully");


         }

         function manageproductview(){
            return view('backend.pages.product.manageproduct');

         }

          function manageproduct(){

            $productall= Product::all();
         // return view('backend.pages.product.manageproduct',compact('productall'));

         return response()->json([

            'productdata'=>$productall


         ]);



          }

          function statuschange($id){

            $status=Product::find($id);
            if($status->status==1){
               $status->status=2;
            }
            else{
               $status->status=1;
            }
            $status->update();

            if($status->status==1){
               return redirect()->route("manageproduct")->with("message","active Successfully");

            }
            else{
               return redirect()->route("manageproduct")->with("message","Inactive Successfully");

            }
          }

          function delete($id){
            $product=Product::find($id);
            $product->delete();
            return response()->json([

                'status'=>'success'
            ]);


          }

          function updateproductview($id){

            $productview=Product::find($id);

            return response()->json([
          
               'status'=>$productview
   
   
   
           ]);
          }

          function updateproduct(Request $request, $id){

           

             if($request->uimage){
               $uimage=$request->file('uimage');
               $customname=rand().".".$uimage->getClientOriginalExtension();
               $location= public_path('backend/product/'.$customname);
               Image::make($uimage)->save($location);
           }

            $product =Product::find($id);
            $product->vendor_id=1;
            $product->cat_id=1;
            $product->subcat_id=1;
            $product->product_name=$request->uproductname;
            $product->product_price=$request->uproduct_price;
            $product->discount=$request->uproduct_discount;
            $product->discount_price=$request->uproduct_discount_price;
            $product->product_code=$request->uproduct_code;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->quantity=$request->uquantity;
            $product->status=$request->ustatus;
            // $product->slug=Str::slug($request->uproductname);
            $product->thumbnails= $customname;

            $product->update();

            return response()->json([

              'status'=>'success'
            ]);




          }
}
