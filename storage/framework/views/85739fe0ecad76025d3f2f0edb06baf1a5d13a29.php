
<?php $__env->startSection('title','Trang them san pham'); ?>
<?php $__env->startSection('main-content'); ?>
<?php $page = 'productadd';?>
<div class="content-wrapper">
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">ADD PRODUCT</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('product.addProduct')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Description" id="description" class="form-control" name="description" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Price" id="price" class="form-control" name="price" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Sold" id="sold" class="form-control" name="sold" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <select placeholder="ID Category" name="id_category" id="id_category" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="photo">Attach a photograph</label>
                                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file" required>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">ADD PRODUCT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\sell_foot\resources\views/admin/product/addproduct.blade.php ENDPATH**/ ?>