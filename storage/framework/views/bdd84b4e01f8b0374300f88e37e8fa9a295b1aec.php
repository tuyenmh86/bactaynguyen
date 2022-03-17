

<section class="home-banner-area bg-white d-none d-sm-none d-md-block d-lg-block">
        <div class="container">
        	<div class="row">
        	<div class="col-lg-8 col-md-8 col-8 pt-3 pl-4 pr-0">
                <div class="home-slide">
                        <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="false" data-slick-autoplay="true">
                                <?php $__currentLoopData = \App\Slider::where('published', 1)->where('photos_mobile','=','')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <img class="img-responsive w-100" src="<?php echo e(asset($slider->photo)); ?>" alt="Slider Image">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                </div>
            </div>	
            <div class="col-lg-4 col-md-4 col-4 pt-3 pl-0">
            	<?php $__currentLoopData = \App\Banner::where('position', 1)->where('published', 1)->take(2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <a href="<?php echo e($banner->url); ?>" target="_blank" class="banner-container">
                            <img src="<?php echo e(asset($banner->photo)); ?>" alt="" class="img-fluid pl-1 pb-2 pt-0">
                        </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
        </div>
    </section>
    <section class="home-banner-area bg-white d-block d-sm-none d-md-none">
        <div class="container">
            <div class="home-slide">
                <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="false" data-slick-autoplay="true">
                    <?php $__currentLoopData = \App\Slider::where('published', 1)->where('photos_mobile','!=','')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="">
                            <img class="img-responsive w-100" style="min-height:270px;" src="<?php echo e(asset($slider->photos_mobile)); ?>" alt="Slider Image">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/slideCarol.blade.php ENDPATH**/ ?>