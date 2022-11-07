@extends('backend.template.template')
@section("content")


<div class="br-pagetitle">
  <i class="icon fas fa-truck" style="color: #06b2aa;"></i>
  <div>
    <h4></h4>
    <h5></h5>
    <h1>Add Medicines</h1>
  </div>
</div>

      <div class="container">
        <div class="row row-sm">
        <div class="col-md-1o offset-md-1 mt-2">
            <div class="alert alert-success msg" style="display:none"></div>
        </div>
        <div class="col-md-12">
            <form action="{{ route('medicine.update',$medicine->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-4">
                   <input type="text" name="name" value="{{$medicine->name}}" placeholder="Enter Medicine Name" class="form-control mt-3 mb-4">

                   <textarea name="description"  cols="10" rows="5" placeholder="Enter Medicine Description" class="form-control mt-3 mb-4" >{{$medicine->description}}</textarea>

                 <select name="supplier_id" class="form-control mt-3 mb-4">
                    <option value="{{$medicine->supplier_id}}">{{$medicine->suppliers->name}}</option>
                 </select>

                 <select name="cat_id" id="cat_id" class="form-control mt-3 mb-4">
                    <option value="{{$medicine->cat_id}}">{{$medicine->categories->name}}</option>
                 </select>
                    
                 <select name="subcat_id" class=" form-control">
                    <option value="{{$medicine->subcat_id}}">{{$medicine->subcategories->name}}</option>
                </select>

                </div>
                <div class="col-md-4">
                    <img height="100px" width="100px" src="{{asset('backend/medicine/'.$medicine->image)}}" alt="" class="mt-3">
                    <input type="file" name="image" class="form-control mt-3">
                    <input type="datetime-local" name="import_date" value="{{$medicine->import_date}}" class="form-control mt-3 mb-4" >
                    <input type="date" name="expire_date" value="{{$medicine->expire_date}}" class="form-control mt-3 mb-4">
                    <input type="number" placeholder="Medicine Quantity" name="quantity" value="{{$medicine->quantity}}" class="form-control mt-3 mb-4">
                </div>
                <div class="col-md-4">
                    <input type="number" name="price" value="{{$medicine->price}}" placeholder="Medicine price" class="form-control mt-3 mb-4">
                    <input type="number" name="discount" value="{{$medicine->discount}}" placeholder="Medicine discount" class="form-control mt-3 mb-4">
                    <input type="number" name="dis_amount" placeholder="Discount price" value="{{$medicine->dis_amount}}" class="form-control mt-3 mb-4">
                    <select name="status" class="form-control mt-3 mb-4">
                        <option value="">-----Select-----</option>
                        <option value="1" @if ($medicine->status ==1) selected @endif>Active</option>
                        <option value="2" @if ($medicine->status ==2) selected @endif>Inactive</option>
                    </select>
                    <button class="btn btn-success form-control mt-3 mb-4">Save</button>
                </div>
            </div>
            </form>
        </div>

    

  </div>

@endsection
