@extends('backend.template.template')
@section("content")


<div class="br-pagetitle">
    <i class="icon fas fa-truck" style="color: #05968f;"></i>
    <div>
      <h4>This is Suppliers Table</h4>
      <h5></h5>
      <h1>Manage Suppliers</h1>
    </div>
  </div>


<div class="container">
        <div class="row">
          
        <div class="col-md-12 mt-5">
            <table class="table">
                <thead class="thead bg-info">
                        <tr>
                            <th>Suppliers Name</th>
                            <th>Office Address</th>
                            <th>Description</th>
                            <th>Email</th>
                            <th>Conatact No</th>
                            <th>mfg-Licence</th>
                            <th>Created Date</th>
                            <th>Operator Name</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody class="alldata">
                        
                </tbody>
            </table>
        </div>
       
  <!-- Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            Are you sure to Delete this Supplier?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="delete btn btn-danger">Confrim</button>
      </div>
    </div>            
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Supplier</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">  
                  <input  type="text" placeholder="Name" id="name" class="form-control mt-3 mb-4">

                  <input placeholder="Company Office Address" type="text" id="address" class="form-control mt-3">

                  <textarea placeholder="Enter Company Description" cols="10" rows="5" id="description" type="text" class="form-control mt-3"></textarea>

                  <input placeholder="Company Email" type="email" id="email" class="form-control mt-3">

                  <input placeholder="Company Conatact No" type="text" id="phone" class=" form-control mt-3">

                  <input placeholder="Company mfg-Licence" type="text" id="mfg" class="form-control mt-3">

                  <input placeholder="Created Date" type="datetime-local" id="created_date" class=" form-control mt-3">

                  <input placeholder="Created By" type="text" id="operator_name" class=" form-control mt-3">

                <div class="form-group mt-3">
                <select id="status" class="form-control">
                    <option value="">-----Select Status-----</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
            </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn-update btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!--Status Modal -->
<div class="modal fade" id="changemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           Do you want to change status?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="cstatus btn btn-danger">Change</button>
        </div>
      </div>
    </div>
  </div>
  <!--Status Modal END-->

        </div>
  

@endsection