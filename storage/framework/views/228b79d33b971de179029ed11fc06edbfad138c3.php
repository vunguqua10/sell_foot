<?php $__env->startSection('title','Trang danh edit san pham'); ?>
<?php $__env->startSection('main-content'); ?>
<?php $page = 'protypes';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Loại Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Protypes Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="" method="POST" roles="form" enctype="multipart/form-data">      
        <?php echo csrf_field(); ?>
      <div class="row p-1">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo e($typebyid-> id); ?>">
                </div>
                <label for="inputName">Tên Loại</label>
                <input type="text" name="type_name" id="inputName" class="form-control" placeholder="Nhập tên loại"  value= "<?php echo e($typebyid->type_name); ?>" >
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
          <a href="<?php echo e(route('category.editCategory')); ?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Protype" class="btn btn-success float-right" >
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sell_foot\resources\views/admin/category/editcategory.blade.php ENDPATH**/ ?>