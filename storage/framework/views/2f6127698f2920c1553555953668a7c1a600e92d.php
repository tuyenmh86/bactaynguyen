<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="<?php echo e(config('app.name')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="main-content">

        <div class="container-fluid photos">

        <div class="row pt-4 mb-5 text-center">
            <div class="col-12">
            <h2 class="mb-4">Album <?php echo e($photos[0]->album->name); ?></h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="" data-aos="fade-up" style="padding:5px;">
                    <a href="<?php echo e(asset($item->photo)); ?>" class="d-block photo-item" data-fancybox="gallery">
                        <img src="<?php echo e(asset($item->photo)); ?>" alt="Image" class="img-fluid">
                        <div class="photo-text-more">
                        <span class="icon icon-search"></span>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        </div>
    </div>
    </div>
</div>
   
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/thuvien-detail.blade.php ENDPATH**/ ?>