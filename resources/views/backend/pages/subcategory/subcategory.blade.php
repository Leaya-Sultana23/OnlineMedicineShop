@extends('backend/template/template')
@section('content')
      

<div class="br-pagetitle">
  <i class="icon ion-ios-photos-outline tx-20" style="color: #b5a70e"></i>
  <div>
    <h4>Medicine||SubCategory</h4>
    <p>Manage All SubCategory Here!</p>
  </div>
</div>

<div class="container">
<div class="row"> 
  
    <div class="col-md-4">
      <span class="msg text-success"></span>

        <form id="subcategoryform" method="POST" enctype="multipart/form-data"
        >

            @csrf
    
      <select name="categoryitem" class="mt-3 form-control categoryitem">
          <option value="">-----Select Category-----</option>
          @foreach ($category as $category)
          <option value="{{$category->id}}"> {{$category->name}}</option>
          <span class="error_category"></span>
          @endforeach
      </select>
      
      <input type="text" name="name" class="mt-3 form-control name" placeholder="Enter SubCategory name">
      <span class="error_name text-danger"></span>
        <input type="file" name="image" class="mt-3 form-control image">
        <span class="error_image text-danger"></span>
        <select class="mt-3 form-control " name="status">
            <option value="">-----Select Status-----</option>
           <option value="1"> Active</option>
           <option value="2"> Inactive</option> 
        </select>
        <span class="error_status text-danger"></span>
          <button class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>
        </form>
      </div>
      <div class="col-md-8">
        <table class="table">
           <thead>
                <tr>
                   <th>Category Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
           </thead>
           <tbody class="data">
                
           </tbody>
        </table>
   </div>

  </div>
</div>

    @endsection



<!-- Modal for subcategory delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure want to delete this Subcategory?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary deletemodal">Confirm</button>
      </div>
    </div>
  </div>
</div>




<!--for upadate Subcategory Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="updatecategoryform" method="POST" enctype="multipart/form-data"
        >
        @csrf
        <select name="categoryitem" class="mt-3 form-control   ">
          <option  value="1"> Asraf</option>
  
      </select>
      
      <input type="text" name="name" class="mt-3 form-control ucategory" placeholder="Enter SubCategory name">

      
      <div class="img">

      </div>
        <input type="file" name="image" class="mt-3 form-control  ">
      
         
        <select name="status" class="mt-3 form-control ustatus" >
           <option value="1"> Active</option>
           <option value="2"> Inactive</option> 
        </select>

       <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary updateemodal">Update</button>

      </form>

    </div>
      </div>
    </div>
  </div>
</div>
    