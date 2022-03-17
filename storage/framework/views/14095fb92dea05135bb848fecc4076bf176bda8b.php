<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="<?php echo e(config('app.name')); ?>">

<meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
<meta property="og:url"             content="<?php echo e($post->link()); ?>"/> 
<meta property="og:title"           content="<?php echo e($post->name); ?>" /> 
<meta property="og:image"           content="<?php echo e(asset($post->featured_img)); ?>" /> 
<meta property="og:image:alt"           content="<?php echo e($post->name); ?>" /> 
<meta property="og:description"    content="<?php echo e($post->description); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>




<section class="ftco-section">
   <div class="container">
      <div class="row">
         <div class="col-12 ftco-animate">
            <h2 class="mb-3"><?php echo e($post->name); ?></h2>
            <p>Nội dung tin: <?php echo e($post->description); ?></p>
            <div class="post-content">
               <p class="p-content"><?php echo $post->content; ?></p>
            </div>
            <p>Lượt xem: <?php echo e($post->view); ?></p>
         </div>
         
         <div class="fb-share-button" 
         data-href="<?php echo e($post->link()); ?>" 
         data-layout="button_count">
         </div>
         <div class="zalo-share-button" data-href="<?php echo e($post->link()); ?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
      </div>
      <div class="row">
         <div class="col-12 ftco-animate">
            <h3>Tin tức khác</h3>
            <ul>
               <?php $__currentLoopData = \App\Post::where('category_id',$post->category_id)->where('published',1)->orderBy('created_at','desc')->take(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li class="">
                  <div class="row">
                     <div class="col-md-8 col-sm-12 col-xs-12 col-lg-8"><a href="<?php echo e($oitem->link()); ?>"><?php echo e($oitem->name); ?></a></div>
                     <div class="col-md-4 col-lg-4"><?php echo e($oitem->created_at->format('d.m.Y')); ?></div>
                  </div>
                </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
      </div>
   </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/post_detail.blade.php ENDPATH**/ ?>