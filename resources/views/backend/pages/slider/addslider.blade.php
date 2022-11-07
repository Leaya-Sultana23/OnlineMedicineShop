@extends('backend/template/template')
@section('content')

<div class="br-pagetitle">
    <i class="icon fas fa-sliders-h" style="color: #03b703"></i>
    <div>
      <h4>Slider||Add Slider</h4>
      <p class="mg-b-0 " style="color: red;">You must fill all field ,remember if you don't fill any one field slider are not added.</p>
    </div>
  </div>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" class="title form-control" placeholder="Enter Slider Title">
                    <input type="text" name="description" class="description form-control mt-3" placeholder="Enter Slidet description">
                    <input type="file" name="image" class="image form-control mt-3">
                    <select name="status" id="" class="form-control status mt-3">
                        <option value="">--Select Here--</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    <button type="" class="btn btn-success mt-3 form-control">Save</button>
                </form>
            </div>
            {{-- <a href="{{route('slider.show')}}" class="btn btn-primary form-control">Show Slider</a> --}}
        </div>
    </div>
</div>






@endsection