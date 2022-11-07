@extends('backend.template.template')
@section("content")


<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Dashboard||This is Vendor </h4>
    <h5>Make By: Ruhul Amin</h5>
    <p class="mg-b-0">Do bigger things with uTEAM, the responsive bootstrap 4 admin template.</p>
  </div>
</div>

      <div class="container">
        <div class="row row-sm">

        <div class="col-md-10 offset-md-1">
            <div class="alert alert-success msg" style="display:none"></div>
        </div>
        <div class="col-md-12">
            <input placeholder="Enter Vendor Name" type="text" class="name form-control mt-3 mb-4">
            <span class="text-danger error_name"></span>

            <textarea placeholder="Enter Vendor Description" cols="10" rows="10" type="text" class="description form-control mt-3"></textarea>
            <span class="text-danger error_description"></span>

            <input placeholder="Vendor Office Address" type="text" class="office_addres form-control mt-3">
            <span class="text-danger error_office_addres"></span>

            <input placeholder="Vendor Email" type="email" class="email form-control mt-3">
            <span class="text-danger error_email"></span>

            <input placeholder="Vendor Conatact No" type="text" class="phone form-control mt-3">
            <span class="text-danger error_phone"></span>
        </div>
        <div class="col-md-12">
            <input placeholder="Vendor Operator Name" type="text" class="operator_name form-control mt-3">
            <span class="text-danger error_operator_name"></span>

            <input placeholder="Vendor Operator Phone" type="text" class="operator_phone form-control mt-3">
            <span class="text-danger error_operator_phone"></span>

            <input placeholder="Enter TIN Number" type="text" class="tin form-control mt-3">
            <span class="text-danger error_tin"></span>

            <input placeholder="Enter Trade Number" type="text" class="trade_number form-control mt-3">
            <span class="text-danger error_trade_number"></span>

            <div class="form-group mt-3">
                <select class="status form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
                <span class="text-danger error_status"></span>
            </div>
            
        </div>

    <button class="save btn btn-success form-control mt-3 col-md-3 ">Add Vendor</button>

  </div>

@endsection
