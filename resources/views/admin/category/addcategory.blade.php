@extends('admin.layout.master')
@section('title','Trang them san pham')
@section('main-content')
<?php $page = 'protypeadd';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD CATEGORY</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content p-1">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Category name</label>
                  <input type="text" name="cate_name" id="inputName" class="form-control" placeholder="Input category name">
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
            <input type="submit" value="Add Category" class="btn btn-success float-right" >
          </div>
        </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop