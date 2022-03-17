<?php $__env->startSection('style'); ?>
    <link type="text/css" href="<?php echo e(asset('frontend/evo/css/evo-blogs.scss.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
    <meta name="description" content="<?php echo e($page->seo_description); ?>">
    <meta name="keywords" content="<?php echo e($page->seo_keywords); ?>">
    <meta name="author" content="<?php echo e(config('app.name')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="evo-themes">

    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <h3><?php echo e($page->name); ?></h3>

            <ul class="breadcrumb">
                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="<?php echo e(areActiveRoutesHome(['page'])); ?>"><a href="<?php echo e(route('page',[$page->slug])); ?>"><?php echo e($page->name); ?></a></li>
            </ul>
        </div>
    </section>

        <section class="Page-detail">
            <article class="article-main" itemscope="" itemtype="http://schema.org/Article">
                <meta itemprop="mainEntityOfPage" content="<?php echo e($page->link()); ?>">
                <meta itemprop="description" content="<?php echo e($page->description); ?>">
                <meta itemprop="author" content="<?php echo e(config('app.name')); ?>">
                <meta itemprop="headline" content="<?php echo e($page->name); ?>">
                <meta itemprop="image" content="<?php echo e(asset('news/'.$page->featured_img)); ?>">
                <meta itemprop="datePublished" content="<?php echo e($page->created_at); ?>">
                <meta itemprop="dateModified" content="<?php echo e($page->updated_at); ?>">
                <div class="d-none" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                        <img src="<?php echo e(asset($page->featured_img)); ?>" alt="<?php echo e($page->name); ?>">
                                <meta itemprop="url" content="<?php echo e($page->link()); ?>">
                        <meta itemprop="width" content="200"><meta itemprop="height" content="49">
                    </div>
                    <meta itemprop="name" content="<?php echo e($page->name); ?>">
                </div>
                <div class="row">
                    <div class="container">

                        <div class="article-details evo-toc-content">
                            <?php echo $page->content; ?>

                        </div>
                    </div>
                    <div class="container">
                        <div class="evo-article-toolbar">
                            <div class="evo-article-toolbar-left clearfix">
                                <span class="evo-article-toolbar-head">Bạn đang xem: </span>
                                <span class="evo-article-toolbar-title" title="<?php echo e($page->name); ?>"><?php echo e($page->name); ?></span>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </article>
        </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\hoahong\resources\views/frontend/evo_theme/evo_page.blade.php ENDPATH**/ ?>