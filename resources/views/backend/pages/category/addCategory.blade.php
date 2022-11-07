@extends('backend/template/template')
@section('content')
<div class="br-pagetitle">
  <i class="icon fas fa-tasks" style="color: #6b0d8b"></i>
  <div>
    <h4>Medicine||Category</h4>
    <p>Manage All Category Here!</p>
  </div>
</div>

  <div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="msg">
                
            </div>
            <form id="form" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Enter Category Name" class="form-control">
                <span class="error_name" style="color: red;"></span>
                <input type="text" name="description" placeholder="Enter Description" class="form-control mt-3">
                <span class="error_description" style="color: red;" ></span>
                <input type="file" name="image" class="form-control mt-3">
                <span class="error_image" style="color: red;" ></span>
                <select name="status" id="status" class="form-control mt-3">
                    <option value="">--Choose Status--</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
                <span class="error_status" style="color: red;" ></span>
                <button  class="btn btn-primary form-control mt-3">Save</button>
            </form>
        </div>
        
        <div class="col-md-8">
          <div class="card">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Image</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="allData">
                    
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>



  
  <!-- Modal for Updtae-->
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Confirmation?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="Modalform" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text"  name="name" placeholder="Enter Product Name" class="name form-control">
                
                <input type="text" name="description" placeholder="Enter Description" class="description form-control mt-3">
              <p id="img">
               
              </p>
                {{-- <img src="{{asset('backend/category')}}" alt=""> --}}
                <input type="file" name="image" class="image form-control mt-3">
             
                <select name="status" id="status" class="status form-control mt-3">
                    <option value="">--Choose Status--</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
                
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="update" class="update btn btn-primary">update</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endsection


