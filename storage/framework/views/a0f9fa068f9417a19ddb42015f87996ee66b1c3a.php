
<?php $__env->startSection('title','Trang danh sach loai san pham'); ?>
<?php $__env->startSection('main-content'); ?>
<?php $page = 'protypes';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
            <h6><a href="<?php echo e(route('category.addCategory')); ?>" class="btn btn-primary">ADD CATEGORY</a></h6>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Protypes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php if(session()->has('error')): ?>
    <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
      <div>
        <strong>X</strong>  <?php echo e(session()->get('error')); ?>

      </div>
    </div>
    <?php elseif(session()->has('success')): ?>
    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
      <div>
        <strong><i class="fa-solid fa-check"></i></strong>  <?php echo e(session()->get('success')); ?>

      </div>
    </div>
    <?php endif; ?>
    <!-- Main content -->
    <section class="content p-1">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">ID</th>
                      <th style="width: 5%">Name</th>
                      <th style="width: 5%">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($category -> id); ?></td>
                      <td>
                          <a><?php echo e($category -> type_name); ?></a>
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="<?php echo e(route('category.editCategory',['id' => $category->id ])); ?>">
                             
                            <i class="fas fa-pencil-alt">
                                
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo e(route('category.delCategory',['id' => $category->id ])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sell_foot\resources\views/admin/category/listcategory.blade.php ENDPATH**/ ?>