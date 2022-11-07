<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MyApiController;
use App\Http\Controllers\Backend\ApiFirstController;

/*  
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::POST('/allData',[MyApiController::class,'alldata']);

// Route for API
// Route::group(['prefix'=>'/myApi'],function() {
//     route::get('/add',[MyApiController::class,'index' ])->name('addApi');
//     route::post('/store',[MyApiController::class,'store' ])->name('apistore');
//     Route::get('/profile/{id}',[MyApiController::class,'profile'])->name('profileapi');
//     Route::post('/update/{id}',[MyApiController::class,'update'])->name('updateApi');
//     Route::get('/getcode/{id}',[MyApiController::class,'getcode']);

// });