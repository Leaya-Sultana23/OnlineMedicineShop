<?php

use Illuminate\Support\Facades\Route;
//Supplier Controller;
use App\Http\Controllers\Backend\SupplierController;

//Medicine Controller
use App\Http\Controllers\Backend\MedicineController;
// 
use App\Http\Controllers\Backend\VendorController;


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductGalleryController;

use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;

use App\Http\Controllers\Backend\CuponController;
use App\Http\Controllers\Frontend\Home;
use App\Http\Controllers\Frontend\AddtoCartController;
use App\Http\Controllers\SslCommerzPaymentController;
/*
|--------------------------------------------------------------------------
| Frontend Route
|--------------------------------------------------------------------------
|*/

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name("exampleHostedCheckout");

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END








Route::get('/',[Home::class,'index'])->name("home");
Route::get('/profile',[Home::class,'profile'])->name('profile');
// Route::get('/view/{id}',[Home::class,'view'])->name('view');

Route::get('/addtocart/{id}',[AddtoCartController::class,'addtocart']);
Route::get('/showcartitems',[AddtoCartController::class,'showcartitems']);
Route::get('/showitem',[AddtoCartController::class,'showitem']);
Route::get('/removeitem/{id}',[AddtoCartController::class,'removeitem']);
Route::get('/viewcart',[AddtoCartController::class,'viewcart'])->name("viewcart");
Route::get('/coupon/{coupon}',[AddtoCartController::class,'coupon']);


Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('backend/dashboard');
// })->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
//Routes for supplier
Route::group(['prefix'=>'/supplier'],function(){
    Route::get('/add',[SupplierController::class,'add'])->name('supplier.add');
    Route::get('/manage',[SupplierController::class,'view'])->name('supplier.manage');
    Route::post('/store',[SupplierController::class,'store']);
    Route::get('/show',[SupplierController::class,'show']);
    Route::get('/destroy/{id}',[SupplierController::class,'destroy']);
    Route::get('/edit/{id}',[SupplierController::class,'edit']);
    Route::get('/change/{id}',[SupplierController::class,'change']);
    Route::post('/update/{id}',[SupplierController::class,'update']);
});

//Routes for vendor
Route::group(['prefix'=>'/vendor'],function(){
    Route::get('/add',[VendorController::class,'add'])->name('vendor.add');
    Route::get('/manage',[VendorController::class,'view'])->name('vendor.manage');
    Route::post('/store',[VendorController::class,'store']);
    Route::get('/show',[VendorController::class,'show']);
    Route::get('/destroy/{id}',[VendorController::class,'destroy']);
    Route::get('/edit/{id}',[VendorController::class,'edit']);
    Route::get('/change/{id}',[VendorController::class,'change']);
    Route::post('/update/{id}',[VendorController::class,'update']);
});

// Route for Slider
Route::group(['prefix' => '/slider'],function(){
    Route::get('/addSlider',[SliderController::class,'add'])->name('slider.add');
    Route::POST('/storeSlider',[SliderController::class,'store'])->name('slider.store');
    Route::get('/showSlider',[SliderController::class,'show'])->name('slider.show');
    Route::get('/view/{id}',[SliderController::class,'view'])->name('slider.view');
    Route::get('/status/{id}',[SliderController::class,'status'])->name('slider.status');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::POST('/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/deleteMultiimage/{id}',[SliderController::class,'deleteMultiimage'])->name('multiImage.delete');

    Route::get('/multi}',[SliderController::class,'multiAdd'])->name('slider.multi');
    Route::POST('/multiStore}',[SliderController::class,'multiStore'])->name('multi.store');
    
});
// Route for Category

Route::group(['prefix' => '/category'],function(){
    Route::get('/addCategory',[CategoryController::class,'addCategory'])->name('category.add');
    Route::POST('/storeCategory',[CategoryController::class,'store'])->name('category.store');
    Route::get('/showCategory',[CategoryController::class,'show']);
    Route::get('/deleteCategory/{id}',[CategoryController::class,'destroy']);
    Route::get('/status/{id}',[CategoryController::class,'status']);
    Route::get('/edit/{id}',[CategoryController::class,'edit']);
    Route::POST('/update/{id}',[CategoryController::class,'update'])->name('category.update');
});

// Route group for subcategory 
Route::group(['prefix'=>'/subcategoey'],function(){

    Route::get('subcategoryview',[SubCategoryController::class,'subcategoryview'])->name('subcategoryview');
    
    Route::post('/addsubcategory',[SubCategoryController::class,'addsubcategory']);
    Route::get('/datatable',[SubCategoryController::class,'showtable']);
    Route::get('/deletesubcategory/{id}',[SubCategoryController::class,'delete']);
    Route::get('/updatesubcategoryview/{id}',[SubCategoryController::class,'updateview']);
    Route::post('/updatesubcategory/{id}',[SubCategoryController::class,'update']);
    
    
    });
// Route group for Medicine
Route::group(['prefix'=>'/medicine'],function(){
    Route::get('/add',[MedicineController::class,'add'])->name('medicine.add');
    Route::get('/manage',[MedicineController::class,'view'])->name('medicine.manage');
    Route::post('/store',[MedicineController::class,'store'])->name('medicine.store');
    Route::get('/show',[MedicineController::class,'show'])->name('medicine.show');
    Route::get('/destroy/{id}',[MedicineController::class,'destroy'])->name('medicine.destroy');
    Route::get('/edit/{id}',[MedicineController::class,'edit'])->name('medicine.edit');
    Route::get('/change/{id}',[MedicineController::class,'change'])->name('medicine.change');
    Route::post('/update/{id}',[MedicineController::class,'update'])->name('medicine.update');
    Route::get('subcategory/{id}',[MedicineController::class,'subcategory']);
});


// Route group for Product
    Route::group(['prefix'=>'/product'],function(){
    Route::get('productview',[ProductController::class,'productview'])->name('productview');
    Route::post('addproduct',[ProductController::class,'addproduct'])->name('addproduct');
    Route::get('manageproductview',[ProductController::class,'manageproductview'])->name('manageproductview');
    Route::get('/manageproduct',[ProductController::class,'manageproduct']);
    Route::get('statuschange/{id}',[ProductController::class,'statuschange'])->name('statuschange');
    Route::get('/deletesubproduct/{id}',[ProductController::class,'delete']);
    Route::get('/updateproductview/{id}',[ProductController::class,'updateproductview']); 
    Route::post('/updateproduct/{id}',[ProductController::class,'updateproduct']);
    });



// Route for Product Gallery
Route::group(['prefix' => '/productGaleery'],function(){
    Route::get('/addProductGaleery',[ProductGalleryController::class,'add'])->name('productGallery.add');
});


// Route for Coupon
    Route::group(['prefix'=>'/cupon'],function() {
    route::get('/add',[CuponController::class,'index' ])->name('add');
    route::post('/store',[CuponController::class,'store' ]);
    Route::get('/show',[CuponController::class,'show'])->name('show');
    Route::get('/delete/{id}',[CuponController::class,'destroy']);
    Route::get('/edit/{id}',[CuponController::class,'edit']);
    Route::post('/update/{id}',[CuponController::class,'update'])->name('update');

});