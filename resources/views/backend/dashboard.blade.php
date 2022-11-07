@extends('backend/template/template')
@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Dashboard</h4>
    <p class="mg-b-0">Online Mediine Shop dashboard</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <h4>Quick Access</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      <a href="{{route('supplier.add')}} " class="btn btn-primary btn-sm">Add Supplier</a>
     </div>
    <div class="col-md-1 ml-3">
     <a href="{{route('slider.add')}} " class="btn btn-primary btn-sm ">Add Slider</a>
    </div>
    
    <div class="col-md-1 ml-3">
      <a href="{{route('category.add')}} " class="btn btn-primary btn-sm ">Category</a>
    </div>
    <div class="col-md-1 ml-3 ">
      <a href="{{route('subcategoryview')}} " class="btn btn-primary btn-sm ">Sub-Category</a>
    </div>
    <div class="col-md-1 ml-3">
      <a href="{{route('medicine.add')}} " class="btn btn-primary btn-sm">Add Medicine</a>
    </div>
 
  </div>
  <div class="row mt-3">
     <div class="col-md-1">
      <a href="{{route('supplier.manage')}} " class="btn btn-warning btn-sm ">Manage Supplier</a>
     </div>
     <div class="col-md-1 ml-5">
    <a href="{{route('slider.show')}} " class="btn btn-warning btn-sm ">Manage Slider</a>
    </div>
       <div class="col-md-1 mx-5">
      <a href="{{route('medicine.manage')}} " class="btn btn-warning btn-sm ">Manage Medicine</a>
    </div>
  </div>
</div>


    <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fas fa-regular fa-capsules tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Medicine</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$medicine}}</p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fas fa-tasks tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Category</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$category}}</p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fas fa-truck tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Suppliers</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$supplier}}</p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fas fa-shopping-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Order</p>
                  <span class="tx-11 tx-roboto tx-white-8">{{$order}}</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->

      @endsection