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

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-8">
            <div class="row">
               <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-6 col-lg-4 ftco-animate">
                  <div class="blog-entry">
                  <a href="<?php echo e($item->link()); ?>" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo e(asset($item->featured_img)); ?>);">
                      <div class="meta-date text-center p-2">
                          
                          <span class="mos"><?php echo e($item->created_at->format('d.m.Y')); ?></span>
                      </div>
                  </a>
                  <div class="text bg-white p-4">
                      <h3 class="heading"><a href="<?php echo e($item->link()); ?>"><?php echo e($item->name); ?></a></h3>
                      <p><?php echo e($item->description); ?></p>
                      
                      <p>Lượt xem: <?php echo e($item->view); ?></p>
                  </div>
                  </div>
              </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row no-gutters my-5">
               <div class="col text-center">
                  <div class="d-flex justify-content-center">
                     
                        
                        <?php echo e($posts->links()); ?>

                        
                        
                     
                  </div>
               </div>
            </div>
            
         </div>
         <div class="col-12 col-md-4">
               
            <div class="box-right">
               <h3 class="title-news">
                  Bài viết khác
               </h3>
               <ul class="list-group">
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item"><a href="<?php echo e($oitem->link()); ?>"><?php echo e($oitem->name); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
            </div>
           
          
         </div>
          
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/edu/news-list.blade.php ENDPATH**/ ?>