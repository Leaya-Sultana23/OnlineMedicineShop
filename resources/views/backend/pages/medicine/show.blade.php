@extends('backend.template.template')
@section("content")

<div class="br-pagetitle">
  <i class="icon fas fa-regular fa-capsules" style="color: #06b2aa;"></i>
  <div>
    <h1>Medicines Table</h1>
  </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
              <thead class="thead">
                <tr>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Import Date</th>
                    <th>Expire_date</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datashow as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->suppliers->name}}</td>
                    <td>{{$data->categories->name}}</td>
                    <td>
                        <img src="{{ asset('backend/medicine/'.$data->image)}}" height="100" width="100" alt="">
                    </td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->import_date}}</td>
                    <td>{{$data->expire_date}}</td>
                    <td>
                        @if($data->status==1)
                          <a href="{{ route('medicine.change',$data->id)}}" class="btn btn-success btn-sm">Active</a> 
                        @else
                        <a  href="{{ route('medicine.change',$data->id)}}" class="btn btn-warning btn-sm">Inactive</a> 
                        @endif
                      </td>
                      <td>
                        <a href="{{route('medicine.edit',$data->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                      </td>
                      <td>
                        <a href="{{ route('medicine.destroy',$data->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                      </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection