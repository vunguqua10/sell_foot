<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/40a08ce033.js" crossorigin="anonymous"></script>
<html lang="en">
<head>
<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('../images/favicon.ico" type="image/x-icon')}}">
    <link rel="apple-touch-icon" href="{{asset('../images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('../css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('../css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://gist.github.com/ejlocop/2e81cd3134fbc6b7858f28eb6fd4a60f.js" defer></script>
    <script src="https://kit.fontawesome.com/40a08ce033.js" crossorigin="anonymous"></script>
</head>
<body>
     <!-- Start Main Top -->
<!-- End Main Top -->

<!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="home"><img src="/template/admin/dist/img/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="" id="navbar-menu">
                <form action="{{ route('searchproduct') }}" method="GET">


                    <input type="text" name= "keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div CLASS="input-group-append">
                        </div>
                     </div>
                     <button CLASS="btn btn-primary" type="submit">
                    <i CLASS="fas fa-search fa-sm"></i>
                    </button>
                     </form>
                     
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">{{ __('label.home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about_us')}}">{{ __('label.aboutus') }}</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">{{ __('label.shop') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('shop')}}">{{ __('label.sidebarshop') }}</a></li>
                                <li><a href="{{route('shop_detail')}}">{{ __('label.shopdetail') }}</a></li>
                                <li><a href="{{route('cart')}}">{{ __('label.cart') }}</a></li>
                                <li><a href="{{route('check_out')}}">{{ __('label.checkout') }}</a></li>
                                <li><a href="{{route('my_account')}}">{{ __('label.myaccount') }}</a></li>
                                <li><a href="{{route('wishlist')}}">{{ __('label.wishlist') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">{{ __('label.gallery') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact_us')}}">{{ __('label.contactus') }}</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>

                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                                <p>{{ __('label.cart') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas__top__hover">
            <span>{{ __('label.language') }}<i class="arrow_carrot-down"></i></span>
            <ul>
                <li><a class="active" href="{{ route('change-language', 'en') }}">EngLish</a></li>
                <li><a href="{{ route('change-language', 'vi') }}">Tiếng Việt</a></li>
            </ul>
        </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link-logout" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
    @yield('content')
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
<!-- End Main Top -->

  <!-- Start Top Search -->
  <div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
    </div>
</div>
</div>
<!-- End Top Search -->

</body>
</html>
