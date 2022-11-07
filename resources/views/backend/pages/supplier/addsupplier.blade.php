@extends('backend.template.template')
@section("content")


<div class="br-pagetitle">
  <i class="icon fas fa-truck tx-60 op-7" style="color: #54b518;"></i>
  <div>
    <h4>This is Suppliers </h4>
    <h5></h5>
    <h1>Add Suppliers</h1>
  </div>
</div>

      <div class="container">
        <div class="row row-sm">

        <div class="col-md-1o offset-md-1 mt-2">
            <div class="alert alert-success msg" style="display:none"></div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <input placeholder="Enter Company Name" type="text" class="name form-control mt-3 mb-4">
                    <span class="text-danger error_name"></span>

                    <input placeholder="Company Office Address" type="text" class="address form-control mt-3">
                    <span class="text-danger error_address"></span>
                    
                    <textarea placeholder="Enter Company Description" cols="10" rows="10" type="text" class="description form-control mt-3"></textarea>
                    <span class="text-danger error_description"></span>


                </div>
        <div class="col-md-6">
          
            <input placeholder="Company Email" type="email" class="email form-control mt-3">
            <span class="text-danger error_email"></span>
            <input placeholder="Company Conatact No" type="text" class="phone form-control mt-3">
            <span class="text-danger error_phone"></span>
            <input placeholder="Company mfg-Licence" type="text" class="mfg form-control mt-3">
            <span class="text-danger error_mfg"></span>

            <input placeholder="Created Date" type="datetime-local" class="created_date form-control mt-3">
            <span class="text-danger error_date"></span>

            <input placeholder="Created By" type="text" class="operator_name form-control mt-3">
            <span class="text-danger error_operator"></span>

            <div class="form-group mt-3">
                <select class="status form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
                <span class="text-danger error_status"></span>
                <button class="save btn btn-success form-control mt-3 col-md-3 ">Add Supplier</button>
            </div>
        </div>
            
        </div>

    

  </div>

@endsection
