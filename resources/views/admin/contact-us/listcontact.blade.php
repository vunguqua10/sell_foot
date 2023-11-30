@extends('admin.layout.master')
@section('title','Contact')
@section('main-content')

<div class="content-wrapper">
<section class="content-header">
  {{-- <form action="{{ route('product.searchProductAdmin') }}" method="GET">
    <div CLASS="input-group">
      @csrf
      <input type="text" name="keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div CLASS="input-group-append">
        <button CLASS="btn btn-primary" type="submit">
          <i CLASS="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </div>
</form> --}}
<!-- DataTales Example -->
<div CLASS="card shadow mb-12">
  
  <div CLASS="card-body">
    <div CLASS="table-responsive">
      <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Gmail</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach($contactus as $contact)
            <tr>
              <td>{{$contact->name}}</td>
              <td>{{$contact->email}}</td>
              <td>{{$contact->subject}}</td>
              <td>{{$contact->message}}</td>
              <td>
               
                <a href="{{ route('deletecontact', ['id' => $contact->id]) }}" class="btn btn-primary">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection