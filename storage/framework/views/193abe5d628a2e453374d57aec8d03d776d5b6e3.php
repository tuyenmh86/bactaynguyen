<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="<?php echo e(config('app.name')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         
            <div class="row">
                <?php if(count($posts)): ?>
               <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-6 col-lg-4 ftco-animate">
                  <div class="blog-entry">
                  <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo e(asset($item->featured_img)); ?>);">
                      <div class="meta-date text-center p-2">
                          
                          <span class="mos"><?php echo e($item->created_at->format('d.m.Y')); ?></span>
                      </div>
                  </a>
                  <div class="text bg-white p-4">
                      <h3 class="heading"><a href="#"><?php echo e($item->name); ?></a></h3>
                      <p><?php echo e($item->description); ?></p>
                      
                  </div>
                  </div>
              </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="row no-gutters my-5">
               <div class="col text-center">
                  <div class="d-flex justify-content-center">
                        <?php echo e($posts->links()); ?>

                  </div>
               </div>
            </div>
            
         
          
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/seachResult.blade.php ENDPATH**/ ?>