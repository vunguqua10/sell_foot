
<?php $__env->startSection('title','Trang them san pham'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="content-wrapper">

<!-- DataTales Example -->
<div CLASS="card shadow mb-12">
  <div CLASS="card-header py-3">
    <h6 CLASS="m-0 font-weight-bold text-primary">PRODUCT </h6>
    <h6><a href="<?php echo e(route('product.addProduct')); ?>" class="btn btn-primary">ADD PRODUCT</a></h6>
  </div>
  <div CLASS="card-body">
    <div CLASS="table-responsive">
      <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sold</th>
            <th>ID Category</th>
          </tr>
        </thead>

        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($product->name); ?></td>
            <td><img src="<?php echo e(URL::asset('uploads')); ?>/<?php echo e($product->photo); ?>" alt="" width="50px" height="50px"></td>
            <td><?php echo e($product->description); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->sold); ?></td>
            <td><?php echo e($product->id_category); ?></td>
            <td>
              <a href="<?php echo e(route('product.editProduct',$product->id)); ?>" class="btn btn-primary">Edit</a>
              <a href="<?php echo e(route('product.delProduct',$product->id)); ?>" class="btn btn-primary">Delete</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sell_foot\resources\views/admin/product/listProduct.blade.php ENDPATH**/ ?>