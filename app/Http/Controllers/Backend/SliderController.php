<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use App\Models\Backend\Multi;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function add(){
        return view('backend/pages/slider/addslider');
    }
    public function store(Request $request){
     
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/slider/'.$customName);
            Image::make($images)->save($location);
           
        }
            $slider = new Slider;
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->status = $request->status;
            $slider->image = $customName;
            $slider->save();
            return redirect()->route('slider.show');
    }


    public function show(){
        $slider = Slider::all();
        return view('backend/pages/slider/show',compact("slider"));
    }
    public function status($id){
        $slider = Slider::find($id);
        if ($slider->status==2) {
            $slider->status = "1";
        }
        else{
            $slider->status = "2";
        }
        $slider->update();
        return redirect()->route('slider.show');

    }
    public function delete($id){
        $slider = Slider::find($id);
        if (File::exists('backend/slider/'.$slider->image)) {
            File::delete('backend/slider/'.$slider->image);
        }
        $slider->delete();
        return redirect()->route('slider.show');
    }
    public function edit($id){
        $slider = Slider::find($id);
        return view('backend/pages/slider/edit',compact("slider"));
    }
    public function update(Request $request,$id){
        $slider = Slider::find($id);
        if ($request->image) {
            if (File::exists('backend/slider/'.$slider->image)) {
                File::delete('backend/slider/'.$slider->image); 
                $images = $request->file('image');
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/slider/'.$customName);
                Image::make($images)->save($location);
                $slider->image =$customName ;
            }
           
           
        }
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->status = $request->status;
            $slider->update();
          
            
             
            return redirect()->route('slider.show');
    }

    public function multiAdd(){
        $slider = Slider::all();
        return view('backend/pages/slider/multi',compact('slider'));
    }

    public function multiStore(Request $request){
        if ($request->pics) {
            foreach ($request->file('pics') as $images) {
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/slider/images/'.$customName);
                Image::make($images)->save($location);

                $multi = new Multi();
                $multi->s_id = $request->s_id;
                $multi->image = $customName;
                $multi->save();

            }
        }
        return redirect()->route('slider.multi');
    }

    public function view($id){
        $slider = Slider::find($id);
        $multi = Multi::where('s_id',$id)->get();
        return view('backend/pages/slider/view',compact('slider'),compact('multi'));
    }
    public function deleteMultiimage($id){
        $multi = Multi::find($id);
        if (File::exists('backend/slider/images/'.$multi->image)) {
            File::delete('backend/slider/images/'.$multi->image);
        }
        $multi->delete();
        return back();
    }
}

