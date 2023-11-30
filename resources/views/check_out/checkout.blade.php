@include('header.header')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>{{Auth::check() ? 'Fat food': 'Account Login'}}</h3>
                    </div>
                    @if(Auth::check())
                    <h5>Welcome, {{ Auth::user()->name }}</h5>
                     @else
                    <h5><a href="{{ route('login') }}">Click here to Login</a></h5>
                     @endif


                </div>
                @if(!Auth::check())
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="{{ route('register-user') }}" role="button" aria-expanded="false">Click here to Register</a></h5>
                </div>
                 @endif

            </div>
            <div class="row">
                <div class="col-12">
                    <div id="errorContainer" class="alert alert-danger" style="display: none;"></div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                            <form class="needs-validation" id="paymentForm" action="{{ route('store',$user->id)}}" method="post" novalidate >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name *</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="{{$user->firt_name}}" pattern="[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ]+( [aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ]+)*"  required>
                                        <div class="invalid-feedback"> Valid first name is required. </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name *</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="{{$user->last_name}}" pattern="[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ]+( [aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ]+)*" required>
                                        <div class="invalid-feedback"> Valid last name is required. </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username">Username *</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="" value="{{$user->username}}" pattern="[a-zA-Z0-9]+(\s[a-zA-Z0-9]+)*$" required>
                                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{$user->email}}">
                                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address">Address *</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address2">Address 2 *</label>
                                    <input type="text" class="form-control" id="address2" name="address2" placeholder=""> </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country *</label>
                                        <select class="wide w-100" id="country" name="country" required>
                                            <option  value="" selected disabled data-display="Select">Choose...</option>
                                            <option value="United States">United States</option>
                                        </select>
                                        <div class="invalid-feedback"> Please select a valid country. </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State *</label>
                                        <select class="wide w-100" id="state" name="state" required>
                                            <option value="" selected disabled data-display="Select">Choose...</option>
                                            <option >California</option>
                                        </select>
                                        <div class="invalid-feedback"> Please provide a valid state. </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip *</label>
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder=""  pattern="\d{4}" required>
                                        <div class="invalid-feedback"> Zip code required. </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="title"> <span>Payment</span> </div>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                        <label class="custom-control-label" for="credit">COD</label>
                                    </div>
                                </div>
                                <hr class="mb-1">
                                {{-- <button id="placeOrderBtn" type="submit" class="btn btn-primary" >Place Order</button> --}}
                                <button id="placeOrderBtn" type="submit" class="btn btn-primary"{{ count($cartCheckout) === 0 ? ' disabled' : '' }}>Place Order</button>
                            </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    @if (isset($cartCheckout) && count($cartCheckout) > 0)
                                        @foreach($cartCheckout as $item)
                                            <div class="media mb-2 border-bottom ">
                                                <div class="media-body">
                                                    <a href="{{ route('show_detail', $item->id) }}">{{ $item->name }}</a>
                                                    <div class="small text-muted">
                                                        Price: {{ $item->price }}đ
                                                        <span class="mx-2">|</span> Qty: {{ $item->quantity }}
                                                        <span class="mx-2">|</span> Subtotal: {{ $item->totalPrice }}đ
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Không có sản phẩm</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>

                                @if ($subtotal > 0)
                                    <div class="d-flex">
                                        <div class="font-weight-bold">Product</div>
                                        <div class="ml-auto font-weight-bold">Total</div>
                                    </div>
                                    <hr class="my-1">
                                    <div class="d-flex">
                                        <h4>Sub Total</h4>
                                        <div class="ml-auto font-weight-bold">{{$subtotal}}đ</div>
                                    </div>
                                    <div class="d-flex">
                                        <h4>Discount</h4>
                                        <div class="ml-auto font-weight-bold">40đ</div>
                                    </div>
                                    <hr class="my-1">
                                    <div class="d-flex">
                                        <h4>Coupon Discount</h4>
                                        <div class="ml-auto font-weight-bold">10đ</div>
                                    </div>
                                    <hr>
                                    <div class="d-flex gr-total">
                                        <h5>Grand Total</h5>
                                        <div class="ml-auto h5">{{$grandTotal}}đ</div>
                                    </div>
                                    <hr>
                                @else
                                    <p>Không có sản phẩm</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="message" style="display: none; color: red;">Vui lòng mua hàng trước khi đặt hàng.</div> --}}
            </div>
        </div>
    </div>
@include('footer.footer')

<script>
    var form = document.getElementById("paymentForm");
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // var cartItemCount = parseInt(document.getElementById('cartItemCount').innerHTML);
        // if (cartItemCount === 0) {
        //     event.preventDefault();
        //     var errorContainer = document.querySelector('.errorContainer');
        //     errorContainer.innerHTML = 'Please select at least one product.';
        //     errorContainer.style.display = 'block';
        // } else
        if (form.checkValidity() === false) {
            var errorContainer = document.getElementById('errorContainer');
            errorContainer.innerHTML = 'Please fill in all required fields.';
            errorContainer.style.display = 'block';
        } else {
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert("Order placed successfully!");
                    window.location.href = window.location.href;
                } else {
                    alert("Order placement failed!");
                }
            };
            xhr.send(formData);
        }

        form.classList.add('was-validated');
    });
    var cartItemCount = document.getElementsByClassName('media').length;

        if (cartItemCount === 0) {
            event.preventDefault();
            var errorContainer = document.querySelector('.errorContainer');
            errorContainer.innerHTML = 'Please select at least one product.';
            errorContainer.style.display = 'block';
        }
</script>
