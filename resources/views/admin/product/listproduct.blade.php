@extends('admin.layout.master')
@section('title','Trang them san pham')
@section('main-content')
<div class="content-wrapper">
{{-- <form action="{{ route('searchproduct') }}" method="GET">
  <div CLASS="input-group">
    @csrf
    <input type="text" name="keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div CLASS="input-group-append">
      <button CLASS="btn btn-primary" type="submit">
        <i CLASS="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form> --}}
<!-- DataTales Example -->
<div CLASS="card shadow mb-12">
  <div CLASS="card-header py-3">
    <h6 CLASS="m-0 font-weight-bold text-primary">PRODUCT </h6>
    <h6><a href="{{route('addproduct')}}" class="btn btn-primary">ADD PRODUCT</a></h6>
  </div>
  <div CLASS="card-body">
    <div CLASS="table-responsive">
      <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sold</th>
            <th>ID Category</th>
          </tr>
        </thead>

        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td><img src="{{URL::asset('images')}}/{{$product->photo}}" alt="" width="50px" height="50px"></td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->sold}}</td>
            <td>{{$product->id_category}}</td>
            <td>
              <a href="{{route('getdataedt',$product->id)}}" class="btn btn-primary">Edit</a>
              <a href="{{route('deleteproduct',$product->id)}}" class="btn btn-primary">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $products->links('custompagination') }}
    </div>
  </div>
</div>
</div>
@endsection