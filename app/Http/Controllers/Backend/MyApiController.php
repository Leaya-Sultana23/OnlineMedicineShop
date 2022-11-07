<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\MyApi;
use App\Models\Backend\Slider;

class MyApiController extends Controller
{
    public function index(){
        return view('backend/pages/api/addapi');
    }
    public function store(Request $request){
        $api = new MyApi();
        $api->name = $request->name;
        $api->address = $request->address;
        $api->phone = $request->phone;
        $api->email = $request->email;
        $api->nid = $request->nid;
        $api->save();
        
    }
    public function profile($id){
        $api = MyApi::find($id);
        return view('backend/pages/api/profile',compact('api'));
    }
    public function update(Request $request, $id){
        $api = MyApi::find($id);
        $clientid = md5( $api->email);
        $token = md5($api->phone);
        $api->appname = $request->appname;
        $api->description = $request->description;
        $api->url = $request->url;
        $api->clientid =  $clientid;
        $api->token = $token;
        $api->update();
        return back();
    }
    public function getcode($id){
        $api = MyApi::find($id);

        return response()->json([
            'status'=>$api
        ]);
    }




    public function alldata(Request $request){
       $api = MyApi::where('clientid',$request->clientid)->where('token',$request->token)->first();
        if ($api) {
            $slider = Slider::where('title',$request->title)->first();
            return response()->json([
               'status'=>"success",
               "slider"=>$slider
            ]);
        }
        else{
            return response()->json([
                'status'=>"404",
                "message"=>"Invalid token"
             ]);
        }

    }
}
