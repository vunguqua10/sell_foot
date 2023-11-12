@extends('dashboard')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center conten-form">
            <div class="col-md-4 card-login">
                <div class="card card-form">
                    <h3 class="card-header text-center title-text">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required value='htrong2003'
                                    autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 form-input">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required value='123456'
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                    <p>or login with:</p>
                                    <button type="button" class="btn btn-floating mx-1 login-logo">
                                        <i class="fab fa-facebook-f"></i>
                                      </button>
                          
                                      <button type="button" class="btn  btn-floating mx-1 login-logo">
                                        <i class="fab fa-google"></i>
                                      </button>
                                </div>
                                <div class=" mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block btn-singnin">Signin</button>
                                    <button type="submit" class="btn btn-dark btn-block btn-register"> 
                                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection