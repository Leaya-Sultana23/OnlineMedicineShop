@extends('backend/template/template')
@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Dashboard</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>

<div class="container">
    <div class="col-md-4">
        <div class="AddSlider">
            <a href="{{route('slider.show')}}" class="btn btn-primary">Add New Slider</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <form action="{{route('multi.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <select name="s_id"  id="" class="form-control status mt-3">
                        <option value="">--Select Here--</option>
                        @foreach ($slider as $slider)
                            <option value="{{$slider->id}}">{{$slider->title}}</option>
                        @endforeach
                    </select>
                    <input type="file" name="pics[]" class="form-control mt-3" multiple>
                    <button type="" class="btn btn-success mt-3 form-control">Add Image</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection