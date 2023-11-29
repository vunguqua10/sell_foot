@extends('admin.layout.master')
@section('title','Trang danh sach user')
@section('main-content')
@php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
@endphp
<div class="content-wrapper">
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">ADD USER</h3>
                    <div class="card-body">
                        <form action="{{route('customUser.custom') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>                          
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="content-wrapper">
@endsection