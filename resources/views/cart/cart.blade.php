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
                        @csrf
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
                                        @php $total = 0; @endphp
                                        @foreach($productsCart as $index => $productCart)
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
                                                <td class="price-pr" data-price="{{$productCart->price}}">
                                                    <p>{{$productCart->price}}đ</p>
                                                </td>
                                                <td class="quantity-box" data-product-id="{{$productCart->id}}">
                                                    <input type="number" size="4" value="{{$productCart->quantity}}" min="1" step="1" class="c-input-text qty text quantity-input" name="quantity_{{$productCart->id}}">
                                                </td>
                                                <td class="total-pr">
                                                    <p>{{$productCart->totalPrice}}đ</p>
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
                        </div>
                    </form>
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
                            <div class="ml-auto h5" id="total-amount" data-total="{{$total}}">{{$total}} đ</div>
                        </div>
                        <hr>
                    </div>
                </div>
                {{-- @php dd($id_user); @endphp --}}
                <div class="col-12 d-flex shopping-box"><a href="{{ route('check_out') }}" class="ml-auto btn hvr-hover">{{ __('label.checkout') }}</a> </div>

            </div>

        </div>
    </div>
</section>
    <!-- End Cart -->


@include('footer.footer')
<script>
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const priceElements = document.querySelectorAll('.price-pr p');
    const totalElements = document.querySelectorAll('.total-pr p');
    const totalAmountElement = document.getElementById('total-amount');
    const totalDivElement = document.querySelector('.ml-auto.h5');
    let total = parseFloat(totalAmountElement.innerText.replace('đ', ''));

    function calculateTotal() {
        let newTotal = 0;
        totalElements.forEach((element, index) => {
            const price = parseFloat(priceElements[index].innerText.replace('đ', ''));
            const quantity = parseInt(quantityInputs[index].value);
            const totalPrice = quantity * price;
            element.innerText = totalPrice + 'đ';

            newTotal += totalPrice;
        });

        totalAmountElement.innerText = newTotal + 'đ';
        totalDivElement.innerText = newTotal + 'đ';

        total = newTotal;
    }

    function isProductInCart(productId) {
        const storedQuantities = JSON.parse(localStorage.getItem('quantities'));

        if (storedQuantities) {
            const foundProduct = storedQuantities.find((quantity) => quantity.productId === productId);
            return foundProduct !== undefined;
        }

        return false;
    }

    quantityInputs.forEach((input) => {
        input.addEventListener('change', () => {
            const productId = input.name.split('_')[1];
            const quantity = input.value;

            if (!isProductInCart(productId)) {
                alert('Sản phẩm không tồn tại trong giỏ hàng.');
                history.back();
                return;
            }

            calculateTotal();
            storeQuantity();
        });
    });

    function storeQuantity() {
    const quantities = Array.from(quantityInputs).map((input, index) => {
        const productId = input.name.split('_')[1];
        const quantity = input.value;

        // Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng mới lưu trữ số lượng
        if (isProductInCart(productId)) {
            return { productId, quantity };
        }
    }).filter(Boolean); // Loại bỏ các giá trị undefined/null

    localStorage.setItem('quantities', JSON.stringify(quantities));
}

    function restoreQuantity() {
        const storedQuantities = JSON.parse(localStorage.getItem('quantities'));
        const storedTotal = JSON.parse(localStorage.getItem('total'));

        if (storedQuantities) {
            quantityInputs.forEach((input) => {
                const productId = input.name.split('_')[1];
                const storedQuantity = storedQuantities.find((quantity) => quantity.productId === productId);
                if (storedQuantity) {
                    input.value = storedQuantity.quantity;
                }
            });
        }

        if (storedTotal) {
            total = storedTotal;

            let totalPrice = 0;

            totalElements.forEach((element, index) => {
                const price = parseFloat(priceElements[index].innerText.replace('đ', ''));
                const quantity = parseInt(quantityInputs[index].value);
                const productTotalPrice = quantity * price;
                element.innerText = productTotalPrice + 'đ';

                totalPrice += productTotalPrice;
            });

            total = totalPrice;

            totalAmountElement.innerText = total + 'đ';
            totalDivElement.innerText = total + 'đ';
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        calculateTotal();
        restoreQuantity();
    });
</script>
