@extends('admin.layout.master')
@section('title','Trang danh sach san pham')
@section('main-content')
@php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
@endphp
<?php $page = 'protypes';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
        </form><br>
      <div class="container-fluid">
        <div class="row">
          <br><div class="col-sm-6">
            <h1>Category</h1><br>
            <h6><a href="{{route('category.addCategory')}}" class="btn btn-primary">ADD CATEGORY</a></h6>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session()->has('error'))
    <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
      <div>
        <strong>X</strong>  {{ session()->get('error') }}
      </div>
    </div>
    @elseif(session()->has('success'))
    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
      <div>
        <strong><i class="fa-solid fa-check"></i></strong>  {{ session()->get('success') }}
      </div>
    </div>
    @endif
    <!-- Main content -->
    <section class="content p-1">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">ID</th>
                      <th style="width: 5%">Name</th>
                      <th style="width: 5%">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($categories as $category)
                  <tr>
                      <td>{{ $category -> id }}</td>
                      <td>
                          <a>{{ $category -> cate_name }}</a>
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="{{route('getdataedtcategory',$category->id)}}">
                             
                            <i class="fas fa-pencil-alt">
                                
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('category.delCategory',['id' => $category->id ]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <div class=""><br>    
            {{$categories ->appends(request()->all())->links()}}
        {{-- {{$categories ->links()}} --}}
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop