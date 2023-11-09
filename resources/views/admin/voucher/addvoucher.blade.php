@extends('admin.layout.master')
@section('title','Trang danh sach san pham')
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
                    <h3 class="card-header text-center">ADD VOUCHER</h3>
                    <div class="card-body">
                        <form action="{{route('customvoucher.custom') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="code_voucher" id="code_voucher" class="form-control" name="code_voucher" required autofocus>
                                @if ($errors->has('mavoucher'))
                                <span class="text-danger">{{ $errors->first('mavoucher') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Created Date" id="createddate" name="createddate"  required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Expired Date" id="expireddate" name="expireddate" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Gia tri giam" id="reduce" class="form-control" name="reduce" required autofocus>
                               
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">ADD VOUCHER</button>
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