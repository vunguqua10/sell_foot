@extends('admin.layout.master')
@section('title','Trang chủ')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
   
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$category_count}}</h3>

                <p>All Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('category.listCategory')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$product_count}}<sup style="font-size: 20px"></sup></h3>

                <p>All Product</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('product.listProduct')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->    
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$user_count}}<sup style="font-size: 20px"></sup></h3>

                <p>All User</p>
              </div>
              <div class="icon">
                <i class="ion ion-arrow-graph-up-right"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>...<sup style="font-size: 20px"></sup></h3>

                <p>List Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
        </div>
        <h2>Sản phẩm xem nhiều</h2>
                <div class="product-table">
                  <div class="table-row header">
                    <div class="table-cell">Tên sản phẩm</div>
                    <div class="table-cell">Lượt xem</div>
                  </div>
                  @foreach($product_views as $product)
                    <div class="table-row">
                      <div class="table-cell">
                        <a target="_blank" href="{{ url('/view-detail/'.$product->id) }}">
                          {{ $product->name }}
                        </a>
                      </div>
                      <div class="table-cell">{{ $product->product_views }}</div>
                    </div>
                  @endforeach
               </div>
         </section>
  </div>
    <!-- /.content -->
   @endsection

 