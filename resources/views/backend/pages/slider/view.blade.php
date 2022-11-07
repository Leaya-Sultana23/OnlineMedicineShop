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
    <div class="row my-5">
        <div class="col-md-12">
            <a href="{{route('slider.show')}}" class="btn btn-primary">Manage Slider</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table text-center" border="2">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Link</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{$slider->title}}</th>
                        <th>{{$slider->description}}</th>
                        <th>{{$slider->cat}}</th>
                        <th>{{$slider->link}}</th>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img height="400px" width="500px" src="{{ asset('backend/slider/'.$slider->image) }}" alt="SliderImage">
            <h4 class="mt-3">{{$slider->title}}</h4>
            <p>{{$slider->description}}</p>
            <h3>$<span style="color: red;">50 </span></h3>
        </div>
        <div class="col-md-8">
            @foreach ($multi as $multi)
                <div class="row">
                    <div class="image col-md-12">
                        <img height="200px" width="200px" src="{{asset('backend/slider/images/'.$multi->image)}}" alt="Multi Images" style="margin-left:300px; margin-top:15px;">
                    </div>
                    <div class="action">
                        <a href="{{route('multiImage.delete',$multi->id)}}" class="btn btn-danger btn-sm" style="margin-left:400px; margin-top:15px;"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection