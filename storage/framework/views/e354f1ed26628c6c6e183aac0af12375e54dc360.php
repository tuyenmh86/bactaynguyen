<?php $__env->startSection('content'); ?>
<?php
    $info= \App\GeneralSetting::first();
?>
<section class="" >
   <div class="home-index">
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               <?php $__currentLoopData = $categoryFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = \App\Post::where('category_id',$category->id)->where('featured',1)->take(1)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="item">
                        <a href="<?php echo e($post->link()); ?>">
                           <img class="img-responsive w-100" style="max-width:100%" src="<?php echo e(asset($post->featured_img)); ?>" alt="<?php echo e($post->name); ?>">
                        </a> 
                        <h5> <a href="<?php echo e($post->link()); ?>"><?php echo e($post->name); ?></a></h5>
                        
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               <?php $__currentLoopData = $categoryFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = \App\Post::where('category_id',$category->id)->where('featured',1)->take(1)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class=""><a href="<?php echo e($post->link()); ?>"><?php echo e($post->name); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ul>
         </div>
   </div>
   </div>
</section>



<section class="">
   <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
      <?php $__currentLoopData = \App\Slider::where('published', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="">
              <img class="img-responsive w-100" src="<?php echo e(asset($slider->photo)); ?>" alt="Slider Image">
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</section>

<?php $__currentLoopData = $categoryFeature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="" >
   <div class="home-index">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news"><?php echo e($category->name); ?></h3>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               <?php $__currentLoopData = \App\Post::where('category_id',$category->id)->where('featured',1)->take(8)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="item">
                     <a href="<?php echo e($post->link()); ?>"><img class="img-responsive w-100" style="max-width:100%" src="<?php echo e(asset($post->featured_img)); ?>" alt="<?php echo e($post->name); ?>"></a> 
                     <a href="<?php echo e($post->link()); ?>"><h5><?php echo e($post->name); ?></h5></a>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               <?php $__currentLoopData = \App\Post::where('category_id',$category->id)->where('featured',1)->take(8)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li class=""><a href="<?php echo e($post->link()); ?>"><?php echo e($post->name); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ul>
         </div>
   </div>
   </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








		 
            
            
         

   






















<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
$(function(){
        $('.marquee').marquee({
           direction: 'up'
        });   
      });

$('.slick-carousel').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
   autoplay: true,
  autoplaySpeed: 1000,
});
$('.slick-carousel-khenthuong').slick({
   autoplay: true,
   infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
   autoplaySpeed: 500,
})
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/index.blade.php ENDPATH**/ ?>