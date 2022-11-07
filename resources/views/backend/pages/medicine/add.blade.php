@extends('backend.template.template')
@section("content")


<div class="br-pagetitle">
  <i class="icon fas fa-regular fa-capsules" style="color: #10c53a;"></i>
  <div>
    <h1>Add Medicines</h1>
    <p class="mg-b-0 " style="color: red;">You must fill all field ,remember if you don't fill any one field Medicine are not added.</p>

  </div>
</div>

      <div class="container">
        <div class="row row-sm">
        <div class="col-md-1o offset-md-1 mt-2">
            <div class="alert alert-success msg" style="display:none"></div>
        </div>
        <div class="col-md-12">
            <form action="{{ route('medicine.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-4">
                 <select name="supplier_id" class="form-control mt-3 mb-4">
                  <option value="0">-----Select Supplier----</option>
                   @foreach($supplier as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @endforeach
                 </select>

                 <select name="cat_id" class="cat_id form-control mt-3 mb-4">
                  <option value="0">-----Select category----- </option>
                    @foreach($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                 </select>
                    

                 <select name="subcat_id" class="form-control mt-3 mb-4">
                  <option value="0">-----Select Subcategory-----</option>
                  @foreach($subcategory as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                  @endforeach
               </select>

               <input type="text" name="name" placeholder="Enter Medicine Name" class="form-control mt-3 mb-4">

               <textarea name="description" cols="10" rows="10" placeholder="Enter Medicine Description" class="form-control mt-3 mb-4" ></textarea>


                </div>
                <div class="col-md-4">
                    <input type="file" name="image" class="form-control mt-3 mb-4">
                    <input type="datetime-local" name="import_date" class="form-control mt-3 mb-4" placeholder="Import_Date" >
                    <input type="date" name="expire_date" class="form-control mt-3 mb-4">
                    <input type="number" placeholder="Medicine Quantity" name="quantity" class="form-control mt-3 mb-4" placeholder="Expire_date">
                </div>
                <div class="col-md-4">
                    <input type="text" name="price" placeholder="Medicine price" class="form-control mt-3 mb-4">
                    <input type="number" name="discount" placeholder="Medicine discount" class="form-control mt-3 mb-4">
                    <input type="number" name="dis_amount" placeholder="Discount price" class="form-control mt-3 mb-4">
                    <select name="status" class="form-control mt-3 mb-4">
                        <option value="">-----Select Status-----</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    <button class="btn btn-success form-control mt-3 mb-4">Save</button>
                </div>
            </div>
            </form>
        </div>

    

  </div>

@endsection
