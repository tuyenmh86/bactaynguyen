<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="<?php echo e(config('app.name')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset($category->banner)); ?>');">
    <div class="overlay"></div>
    <div class="container">
       <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
             <h1 class="mb-2 bread"><?php echo e($category->name); ?></h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo e($category->name); ?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
       </div>
    </div>
 </section>
<section class="ftco-section">

    <div class="container">
       
       <div class="row">
           <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-md-6 course d-lg-flex ftco-animate">
            
            <div class="text bg-light p-4">
               <h3><a href="<?php echo e($course->link()); ?>"><?php echo e($course->name); ?></a></h3>
               
               <p><?php echo e($course->description); ?></p>
            </div>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          
          
       </div>
    </div>
 </section>

 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/edu/category_news.blade.php ENDPATH**/ ?>