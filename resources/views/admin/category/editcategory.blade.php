@extends('admin.layout.master')
@section('title','Trang danh edit san pham')
@section('main-content')
<?php $page = 'protypes';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Loại Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Protypes Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{route('editcategory') }}" method="POST" roles="form" enctype="multipart/form-data">      
        @csrf
      <div class="row p-1">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="id" value="{{$getDataCategoryById[0]->id}}">
                </div>
                <label for="inputName">Tên Loại</label>
                <input type="text" name="cate_name" id="inputName" class="form-control" placeholder="Nhập tên loại"  value= "{{$getDataCategoryById[0]->cate_name}}" >
                @if($errors->has('cate_name'))
                    {{$errors->first('cate_name') }}
                @endif
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row p-1">
        <div class="col-12">
          <a href="{{ route('category.listCategory') }}" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Protype" class="btn btn-success float-right" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop