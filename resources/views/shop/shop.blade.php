@include('header.header')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Search by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Categories</option>
									<option value="1"></option>
									<option value="2"></option>
									<option value="3"></option>
									<option value="4"></option>
								</select>
                                </div>
                                <p></p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @foreach($productsPaginated as $product)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 products-singles" data-category="{{ $product->name }}">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Giảm giá</p>
                                                        </div>
                                                        <img src="{{asset('images')}}/{{$product->photo}}" class="img-fluid" alt="Hình ảnh">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="{{route('show_detail',$product->id)}}" data-toggle="tooltip" data-placement="right" title="{{ __('label.view') }}"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="{{ __('label.compare') }}"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="{{ __('label.wishslist') }}"><i class="far fa-heart"></i></a></li>
                                                            </ul>
                                                            <a class="cart" href="#">{{ __('label.addtocart') }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4>{{$product->name}}</h4>
                                                        <h5>{{$product->price}}đ</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{ $productsPaginated->links('custompagination') }}
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                        @foreach($productsPaginated as $product)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 products-singles" data-category="{{ $product->name }}">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="{{asset('images')}}/{{$product->photo}}" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="{{route('show_detail',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>{{$product->name}}</h4>
                                                    <h5> <del>{{$product->price}}đ</del> $5000đ</h5>
                                                    <p>{{$product->description}}</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{ $productsPaginated->links('custompagination') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form form action="{{ route('searchproduct') }}" method="GET">
                                <input class="form-control" placeholder="Search here..." type="text" name='keyword'>
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                @foreach($categories as $categoryId => $categoryName)
                                    @php
                                        $instock = 0;
                                        $hasProducts = false;
                                    @endphp

                                    <div class="list-group-collapse sub-men">
                                        <a class="list-group-item list-group-item-action" href="#sub-men{{ $categoryId }}" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men{{ $categoryId }}">
                                            {{ $categoryName }}
                                            @foreach($products as $product)
                                                @if($product->id_category == $categoryId)
                                                    @php
                                                        $remainingStock = $product->instock - $product->sold;
                                                        $instock += max($remainingStock, 0);
                                                        if ($instock > 0) {
                                                            $hasProducts = true;
                                                        }
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if($hasProducts)
                                                <small class="text-muted">({{ $instock }})</small>
                                            @else
                                                <small class="text-muted">(Hết hàng)</small>
                                            @endif
                                        </a>

                                        <div class="collapse show" id="sub-men{{ $categoryId }}" data-parent="#list-group-men">
                                            <div class="list-group">
                                                @foreach($products as $product)
                                                @if($product->id_category == $categoryId)
                                                    @php
                                                        $remainingStock = $product->instock - $product->sold;

                                                    @endphp
                                                        <a href="#" class="list-group-item list-group-item-action category-link" data-category="{{ $product->name }}">
                                                            {{ $product->name }}
                                                            @if($product->outOfStock || $remainingStock <= 0)
                                                                <small class="text-muted">(Hết hàng)</small>
                                                            @else
                                                                <small class="text-muted">({{ $remainingStock }})</small>
                                                            @endif
                                                        </a>
                                                @endif
                                            @endforeach

                                                @if(!$hasProducts)
                                                    <p>Không có sản phẩm tồn tại</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
    <!-- <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Instagram Feed  -->


@include('footer.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.category-link').click(function(e) {
            e.preventDefault();
            var categoryId = $(this).data('category');
            $('.products-singles').hide();
            $('.products-singles[data-category="' + categoryId + '"]').show();
        });
    });
</script>
