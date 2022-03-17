<?php $__env->startSection('content'); ?>
    <section class="bg-white p-4">
        
        <div class="container">
                <div class="row">
                <h3 class="title-h2 line-clamp"><?php echo e($categorypost->name); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                            <img class="img-thumbnail"  src="<?php echo e(asset($item->featured_img)); ?>" alt="<?php echo e($item->name); ?>" style="object-fit: contain;">
                    </div>
                    <div class="col-md-9">
                        <a href="<?php echo e($item->link()); ?>"><h2 class="title-h2 line-clamp">  <?php echo e($item->name); ?> </h3></a>
                        <p class="dia_chi text-justify"> 
                            <?php echo e($item->description); ?>

                        </p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/posts_list.blade.php ENDPATH**/ ?>