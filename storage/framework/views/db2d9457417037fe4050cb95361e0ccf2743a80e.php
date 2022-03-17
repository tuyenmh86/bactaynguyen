<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <section class="mb-4 bg-white">
        <div class="container ">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="new_title"><?php echo e($post->name); ?></h2>
                    <div class="post-description d-none">
                        <p><?php echo e($post->description); ?></p>
                    </div>
                    <div class="post-content">
                        <p><?php echo $post->content; ?></p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <!-- Project One -->
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/post_detail.blade.php ENDPATH**/ ?>