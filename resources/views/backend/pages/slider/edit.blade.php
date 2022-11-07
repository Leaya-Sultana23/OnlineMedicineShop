@extends('backend/template/template')
@section('content')

<div class="br-pagetitle">
    <i class="icon fas fa-sliders-h" style="color: #03b703"></i>
    <div>
      <h4>Slider||Manage Slider</h4>
      <p class="mg-b-0 ">All slider information are here</p>
    </div>
  </div>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" value="{{$slider->title}}" name="title" class="title form-control" placeholder="Enter Slider Title">
                    <input type="text"  value="{{$slider->description}}"  name="description" class="description form-control mt-3" placeholder="Enter Slidet description">
                    <img height="200px" width="200px" src="{{asset('backend/slider/'.$slider->image)}}" alt="" class="mt-3">
                    <input type="file" name="image" class="image form-control mt-3">
                    <select name="status"  value="{{$slider->status}}"  id="" class="form-control status mt-3">
                        <option value="">--Select Here--</option>
                        <option value="1" @if($slider->status==1)selected @endif>Active</option>
                        <option value="2" @if($slider->status==2)selected @endif>Inactive</option>
                    </select>
                    <button  class="btn btn-success mt-3 form-control">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>






@endsection