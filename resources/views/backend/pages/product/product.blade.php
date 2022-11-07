@extends('backend/template/template')
@section('content')
      
 
    <div class="col-md-6 offset-1">
      <span class="msg text-success"></span>
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
     @endif

     <form id="" method="POST" action="{{Route('addproduct')}}" enctype="multipart/form-data"
     >

         @csrf

         @error('product_name')

         <div class="alert alert-danger">

             {{$message}}
         </div>
             
         @enderror

   <input type="text" name="product_name" class="mt-3 form-control name" placeholder="Enter Product name">
   <span class="product_name text-danger"></span>

   @error('product_code')

         <div class="alert alert-danger">

             {{$message}}
         </div>
             
         @enderror

   <input type="number" name="product_code" class="mt-3 form-control name" placeholder="Enter Product Code">
   <span class="Product_code text-danger"></span>

   @error('product_price')

   <div class="alert alert-danger">

       {{$message}}
   </div>
       
   @enderror
  

   
   <input type="number" name="product_price" class="mt-3 form-control name" placeholder="Enter Product price">
   <span class="product_price text-danger"></span>

   
   
   <input type="number" name="discount" class="mt-3 form-control name" placeholder="Enter Product Discount">
   <span class="discount text-danger"></span>

   <input type="number" name="discount_price" class="mt-3 form-control name" placeholder="Discount  price">
   <span class="discount_price text-danger"></span>

   @error('short_description')

   <div class="alert alert-danger">

       {{$message}}
   </div>
       
   @enderror

 

   <input type="text" name="short_description" class="mt-3 form-control name" placeholder="Enter Product Short Description">
   <span class="short_description text-danger"></span>

   
   <input type="text" name="long_description" class="mt-3 form-control name" placeholder="Enter Product Long Description">
   <span class="long_description text-danger"></span>

   @error('image')

   <div class="alert alert-danger">

       {{$message}}
   </div>
       
   @enderror
 
   
     <input type="file" name="image" class="mt-3 form-control image">
     <span class="error_image text-danger"></span>

     @error('quantity')

   <div class="alert alert-danger">

       {{$message}}
   </div>
       
   @enderror
 

     <input type="number" name="quantity" class="mt-3 form-control name" placeholder="Enter Quantity">
     <span class="quantity text-danger"></span>

     @error('status')

     <div class="alert alert-danger">

         {{$message}}
     </div>
         
     @enderror
      
     <select class="mt-3 form-control " name="status">
         <option value="">-----Select Status-----</option>
       
        <option value="1"> Active</option>
        <option value="2"> Inactive</option> 
     </select>

     <span class="error_status text-danger"></span>

       <button  class="form-control mt-3 btn-purchaseAdd btn btn-success"> Save </button>

     </form>
   </div>

      @endsection

      {{-- <div class="col-md-7">
        <table class="table">
           <thead>
                <tr>
                   <th>Category Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>status</th>
                    <th >Action</th>
                </tr>
           </thead>
           <tbody class="data">
                
           </tbody>
        </table>
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
     --}}