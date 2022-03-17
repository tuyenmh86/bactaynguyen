<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="<?php echo e(config('app.name')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section class="ftco-section">

    <div class="container">
       <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
             <h2 class="mb-4"><span>Thư viện Ảnh</span></h2>
             <p></p>
          </div>
       </div>
       <div class="row">
        <main class="main-content">
            <div class="container-fluid photos">
              <div class="row align-items-stretch">
                  <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="" data-aos="fade-up" style="padding:5px;">
                    <a href="<?php echo e(route('thuvienanh-chitiet',$item->id)); ?>" class="d-block photo-item">
                      <img src="<?php echo e(asset($item->photos[0]->photo)); ?>" alt="Image" class="img-fluid" />
                      <div class="photo-text-more">
                        <div class="photo-text-more">
                        <h3 class="heading"><?php echo e($item->name); ?></h3>
                        <span class="meta"><?php echo e(count($item->photos)); ?> ảnh</span>
                      </div>
                      </div>
                    </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
        </main>
       </div>
    </div>
 </section>

 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/thuvien.blade.php ENDPATH**/ ?>