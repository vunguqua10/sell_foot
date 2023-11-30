@extends('admin.layout.master')
@section('title','Trang danh edit user')
@section('main-content')
<?php $page = 'users';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{route('edituser') }}" method="POST" roles="form" enctype="multipart/form-data">      
        @csrf
      <div class="row p-1">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="id" value="{{$getDataUserById[0]->id}}">
                </div>
                <label for="inputName">User Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên loại"  value= "{{$getDataUserById[0]->name}}" readonly>
                @if($errors->has('name'))
                    {{$errors->first('name') }}
                @endif
              
             
                <label for="inputEmail">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email"  value= "{{$getDataUserById[0]->email}}" >
              
              
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập tên loại"  value= "{{$getDataUserById[0]->password}}" >
                @if($errors->has('password'))
                    {{$errors->first('password') }}
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
          <a href="{{ route('user.listUser') }}" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit User" class="btn btn-success float-right" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop