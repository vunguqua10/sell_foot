<?php $__env->startSection('title','Trang them san pham'); ?>
<?php $__env->startSection('main-content'); ?>
<?php $page = 'protypeadd';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm danh mục Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Category Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content p-1">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nhập tên danh mục</label>
                  <input type="text" name="type_name" id="inputName" class="form-control" placeholder="Nhập tên loại">
                  <?php if($errors->has('type_name')): ?>
                    <?php echo e($errors->first('type_name')); ?>

                  <?php endif; ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row p-1">
          <div class="col-12">
            <input type="submit" value="Create new Protype" class="btn btn-success float-right" >
          </div>
        </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sell_foot\resources\views/admin/category/addCategory.blade.php ENDPATH**/ ?>