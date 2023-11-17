@include('header.header')
@php
session(['productsCart' => $productsCart]);
@endphp
@Section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <section class="shopping-cart spad">
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <form action="{{ route('update-cart') }}" method="get">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('label.images') }}</th>
                                    <th>{{ __('label.product') }}</th>
                                    <th>{{ __('label.price') }}</th>
                                    <th>{{ __('label.quanlity') }}</th>
                                    <th>{{ __('label.total') }}</th>
                                    <th>{{ __('label.remove') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $total = 0; ?>
                            @foreach($productsCart as $productCart)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									    <img class="img-fluid" src="{{asset('images')}}/{{$productCart->photo}}" alt="" />
								        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$productCart -> name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{$productCart -> price}}đ</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="{{$productCart -> quantity}}" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>{{$productCart -> totalPrice}}đ</p>
                                    </td>
                                    <?php
                                     $total += $productCart->totalPrice;
                                ?>
                                    <td class="remove-pr">
                                        <a href="{{ route('remove-from-cart', $productCart->id) }}">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                <form action="{{ route('useVoucher') }}" method="get">
                    <input name="voucher" class="form-control" placeholder="Enter your coupon code" type="text">
                    <input type="hidden" name="total" value="{{ $total }}" placeholder="Coupon code" >
                            <button class="btn btn-theme" type="submit">{{ __('label.apply') }}</button>
                </form>
            </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <a href="{{ route('update-cart') }}"><input value="{{ __('label.updatecart') }}" type="submit"></a>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>{{ __('label.totalcart') }}</h5>
                            <div class="ml-auto h5">{{$total}} đ</div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout" class="ml-auto btn hvr-hover">{{ __('label.checkout') }}</a> </div>
            </div>

        </div>
    </div>
</section>
    <!-- End Cart -->


@include('footer.footer')
