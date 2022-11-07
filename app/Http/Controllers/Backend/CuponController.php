<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Cupon;


class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.cupon.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cupon = new Cupon;
        $cupon->cupon_code = $request->cupon_code;
        $cupon->discount = $request->discount;
        $cupon->discount_amount = $request->discount_amount;
        $cupon->start_at = $request->start_at;
        $cupon->end_at = $request->end_at;
        $cupon->status = $request->status;
        $cupon->product_id = $request->product_id;
        $cupon->save();
        if($cupon){
             return response()->json([
                 "msg" => 'success'
             ]);
        }
        else{
         return response()->json([
             "msg" => '104'
         ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $allData = Cupon::all();
        if($allData){
         return response()->json([
             "status" => 'success',
             "alldata" => $allData
         ]);
        }
        else{
         return response()->json([
             "status" => '404',
         ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allData = Cupon::find($id);
        if($allData){
         return response()->json([
             "status" => 'success',
             "alldata" => $allData
         ]);
        }
        else{
         return response()->json([
             "status" => '404',
         ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cupon = Cupon::find($id);
        $cupon->cupon_code = $request->cupon_code;
        $cupon->discount = $request->discount;
        $cupon->discount_amount = $request->discount_amount;
        $cupon->start_at = $request->start_at;
        $cupon->end_at = $request->end_at;
        $cupon->status = $request->status;
        $cupon->product_id = $request->product_id;
        $cupon->update();

        if($cupon){
             return response()->json([
                 "msg" => 'success'
             ]);
        }
        else{
         return response()->json([
             "msg" => '104'
         ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allData = Cupon::find($id);
        $allData->delete();
       if($allData){
        return response()->json([
            "status" => 'success'
        ]);
       }
       else{
        return response()->json([
            "status" => '404',
        ]);
       }
    }
}
