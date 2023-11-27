@extends('admin.layout.master')
@section('title','Trang danh sach dat hang')
@section('main-content')
<?php $page = 'orders';?>
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <section class="content-header">
    <!-- Content Header (Page header) -->
    <form action="{{ route('searchcategory') }}" method="GET">
      <div CLASS="input-group">
        @csrf
        <input type="text" name="keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div CLASS="input-group-append">
          <button CLASS="btn btn-primary" type="submit">
            <i CLASS="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
      </form>
   
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Orders</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session()->has('success'))
    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
      <div>
        <strong><i class="fa-solid fa-check"></i></strong>  {{ session()->get('success') }}
      </div>
    </div>
    @endif
    <!-- Main content -->
    <section class="content p-1">

      <!-- Default box -->
      <div class="card ">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">ID</th>
                      <th style="width: 15%">Name</th>
                      <th style="width: 10%">Email</th>
                      {{-- <th style="width: 10%">Phone</th> --}}
                      {{-- <th style="width: 15%">Address</th> --}}
                      {{-- <th style="width: 10%">Notes</th> --}}
                      <th style="width: 10%">Detail</th>
                      <th style="width: 10%">Status</th>
                      <th style="width: 9%">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($order as $orders)
                  <tr>
                      <td>{{ $orders->id }}</td>
                      <td>
                          <a>{{ $orders->cus->name }}</a>
                      </td>
                      <td>
                          <a>{{ $orders->email }}</a>
                      </td>        
                      <td><span class="badge bg-info"><a class="text-white" href="">Hiển thị</a></span></td>	
                      
                     
                        @if($orders->status == 0)
										    <td><span class="badge bg-warning text-white">Chờ xác nhận</span></td>
                      @elseif($orders->status == 1)
										    <td><span class="badge bg-success text-white">Đang giao hàng</span></td>
                      @elseif($orders->status == 2)
										    <td><span class="badge bg-primary text-white">Đã Nhận Hàng</span></td>
										  @endif
                      <td class="project-actions ">
                          <a class="btn btn-info btn-sm" href="{{ route('editOrder', ['id' => $orders->id]) }}">
                              <i class="fas fa-pencil-alt pr-2 pl-1"></i>Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('del_order',['id'=> $orders->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                            <i class="fas fa-trash"></i>Delete
                        </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>             
          </table>
                     
        {{$order ->links('custompagination')}}          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop