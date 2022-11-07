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
        <div class="row">
          
        <div class="col-md-12 mt-5">
            <table class="table">
                <thead class="thead">
                        <tr>
                            <th>Vendor Name</th>
                            <th>Description</th>
                            <th>Office Addres</th>
                            <th>Email</th>
                            <th>Conatact No</th>
                            <th>Operator Name</th>
                            <th>Operator Phone</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody class="ALLdata">
                        
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
            Are you sure to Delete this Product?
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
            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                
                <input type="text" id="name" class="form-control mt-3" placeholder="Enter Name">
                
                <textarea type="text" id="description" class=" form-control mt-3" placeholder="Enter Description "></textarea>
                
                <input  type="text" id="office_addres" class=" form-control mt-3" placeholder="Enter Office Address">
                
                <input type="email" id="email" class=" form-control mt-3" placeholder="Enter Email">
                
                <input  type="text" id="phone" class=" form-control mt-3" placeholder="Enter phone">
            
                <input  type="text" id="operator_name" class=" form-control mt-3" placeholder="Enter Opreator Name">
                
                <input  type="text" id="operator_phone" class=" form-control mt-3" placeholder="Enter Opreator Phone">
                
                <input  type="text" id="tin" class=" form-control mt-3" placeholder="Enter Opreator TIN">

                <input  type="text" id="trade_number" class=" form-control mt-3" placeholder="Enter Trade Number">

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
                <button type="button" class="edit btn btn-primary">Save changes</button>
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