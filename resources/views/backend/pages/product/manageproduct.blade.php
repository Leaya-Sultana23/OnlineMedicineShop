@extends('backend/template/template')
@section('content')


 <div class="contaier">
       <div class="col-md-12">

        <div class="msg">
            
        </div>
        <table class="table">
           <thead>
                <tr>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Price</th>
                <th>Discount</th>
                <th>Discount Price</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Thumbnails</th>
                <th>Quantity</th>
                <th>status</th>
                <th>Action</th>
                </tr>
           </thead>
           <tbody class="product">
                
           </tbody>
        </table>
   </div>

  {{-- </div> --}}


{{-- <div class="col-md-7">

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
     @endif
    <table class="table">
    
            <tr>
               <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Price</th>
                <th>Discount</th>
                <th>Discount Price</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Thumbnails</th>
                <th>Quantity</th>
                <th>status</th>
                <th>Action</th>
            </tr>
    @foreach ($productall as $item)
        
    
        <tr>
            <td>{{$item->product_name}}</td>
            <td>{{$item->product_code}}</td>
            <td>{{$item->product_price}}</td>
            <td>{{$item->discount}}</td>
            <td>{{$item->discount_price}}</td>
            <td>{{$item->short_description}}</td>
            <td>{{$item->long_description}}</td>
            <td><img src="{{asset('backend/product/'.$item->thumbnails)}}" alt="imagenai"></td>
            <td>{{$item->quantity}}</td>
            <td>

           @if($item->status==1)
                <a href="{{route('statuschange',$item->id)}}" class="btn btn-success">Active</a>         
               @else
               <a href="{{route('statuschange',$item->id)}}" class="btn btn-warning">Inactive</a>
                    
                @endif
            </td>
 
             <td> 

                <button  class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
            </td>
            <td>
                <button value="{{$item->id}}" data-toggle="modal" data-target="#deleteModalproduct" class="btn btn-sm btn-danger deleteproduct"><i class="fa fa-trash"></i></button>
            </td>
         </tr>

         @endforeach
    </table>
</div> --}}

  <!-- Modal for Product delete -->
  <div class="modal fade" id="deleteModalproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
          <button type="button" class="btn btn-primary deletemodalproduct">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  



  <!-- Modal for Product Update -->
  <div class="modal fade" id="updateproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            
     <form id="updateproductform" method="POST" enctype="multipart/form-data"
     >

         @csrf

   <input type="text"  class="mt-3 form-control uname" name="uproductname" placeholder="Enter Product name">
  
   <input type="number" class="mt-3 form-control uproduct_code" name="uproduct_code" placeholder="Enter Product Code">
 
   <input type="number"  class="mt-3 form-control uproduct_price" name="uproduct_price" placeholder="Enter Product price">

   
   <input type="number"  class="mt-3 form-control  uproduct_discount" placeholder="Enter Product Discount" name="uproduct_discount">

   <input type="number"  name="uproduct_discount_price" class="mt-3 form-control  uproduct_discount_price" placeholder="Discount  price">

   <input type="text" name="short_description"  class="mt-3 form-control ushort_description " placeholder="Enter Product Short Description">
 
   <input type="text" name="long_description"  class="mt-3 form-control ulong_description" placeholder="Enter Product Long Description">

   <div class="uimage">

   </div>
  
     <input type="file"  class="mt-3 form-control " name="uimage">
      

     <input type="number" name="uquantity" class="mt-3 form-control uquantity" placeholder="Enter Quantity">
  
     <select class="mt-3 form-control ustatus" name="ustatus">
         <option value="">-----Select Status-----</option>
       
        <option value="1"> Active</option>
        <option value="2"> Inactive</option> 
     </select>



     
        
        <div class="modal-footer">
          <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
          <button type="submit" class="btn btn-primary productupdateid">Confirm</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  

</div>


@endsection

