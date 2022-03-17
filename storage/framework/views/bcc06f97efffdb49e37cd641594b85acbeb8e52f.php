
<section class="bg-white">
    <div class="wapper wapper-new">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-12">
                    
                    <div class="title-new">Sự kiện nổi bật <a class="btn btn-primary" href="" title="Tin tức - sự kiện"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a></div>
                    <div class="caorusel-box">  
                        <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="3" data-slick-lg-items="3"  data-slick-md-items="3" data-slick-sm-items="2" data-slick-xs-items="2">
                        
                    <?php $__currentLoopData = \App\Post::where('category_id',7)->where('published',1)->where('featured',1)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tinright">
                        <a href="<?php echo e($post->link()); ?>" title="<?php echo e($post->name); ?>">
                            <picture>
                                <source media="(max-width: 1023px)" srcset="<?php echo e(asset($post->featured_img)); ?>">
                                <source media="(min-width: 1024px)" srcset="<?php echo e(asset($post->featured_img)); ?>">
                                <img class="img-responsive" src="<?php echo e(asset($post->featured_img)); ?>" alt="<?php echo e($post->name); ?>">
                            </picture>
                        </a>
                        <h5 class="title_h5"><a href="<?php echo e($post->link()); ?>" title="<?php echo e($post->name); ?>"><?php echo e($post->name); ?></a></h5>
                        
                    </div>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</section><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/news.blade.php ENDPATH**/ ?>