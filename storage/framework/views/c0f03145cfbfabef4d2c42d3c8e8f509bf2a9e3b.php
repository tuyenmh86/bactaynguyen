<?php
    $flash_deal = \App\FlashDeal::where('status', 1)->first();
?>
 <?php if($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date || filter_products(\App\Product::where('published', 1)->where('todays_deal', '1'))->count()>0): ?>
<section class="mb-4">
        <div class="container">
            <div class="p-0 bg-white">
                
                
                <?php if($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date): ?>
                    <div class="col-lg-12 d-lg-block"> 
                        <div class="section-title-1 clearfix">
                            <h3 class="heading-5 strong-700 mb-0 float-left">
                                <img src="<?php echo e(asset('img\flashsale.png')); ?>">
                                <span class="mr-4">Flash Sale</span>
                                
                            </h3>
                            <div class="countdown countdown--style-1 countdown--style-2-v1" data-countdown-date="<?php echo e(date('m/d/Y', $flash_deal->end_date)); ?>" data-countdown-label="show"></div>
                        </div>
                        <div class="flash-deal-box bg-white ">
                            <div class="caorusel-box">  
                                <div class="slick-carousel" data-slick-items="4" data-slick-xl-items="5" data-slick-lg-items="4"  data-slick-md-items="3" data-slick-sm-items="2" data-slick-xs-items="2">
                                <?php $__currentLoopData = $flash_deal->flash_deal_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $flash_deal_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $product = \App\Product::find($flash_deal_product->product_id);
                                    ?>
                                    <?php if($product != null): ?>
                                        <div class="product-card-2 card card-product m-0 shop-cards shop-tech">
                                            <div class="card-body p-0">

                                                <div class="card-image">
                                                    <a href="<?php echo e(route('product', $product->slug)); ?>" class="d-block" style="background-image:url('<?php echo e(asset($product->flash_deal_img)); ?>');">
                                                    </a>
                                                </div>

                                                <div class="p-3">
                                                    <div class="price-box">
                                                        <?php if($product->unit_price>0): ?>
                                                            <?php if(home_base_price($product->id) != home_discounted_base_price($product->id)): ?>
                                                                <del class="old-prctoduct-price strong-400"><?php echo e(home_base_price($product->id)); ?></del>
                                                            <?php endif; ?>
                                                            <span class="product-price strong-600"><?php echo e(home_discounted_base_price($product->id)); ?></span>
                                                        <?php else: ?>
                                                            <span class="product-price strong-600">Liên hệ</span>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="star-rating star-rating-sm mt-1">
                                                        <?php echo e(renderStarRating($product->rating)); ?>

                                                    </div>
                                                    <h2 class="product-title p-0 text-truncate-2">
                                                        <a href="<?php echo e(route('product', $product->slug)); ?>"><?php echo e(__($product->name)); ?></a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            </div>

                        </div>
                       
                    </div>
                <?php else: ?>
                     <?php echo $__env->make('frontend.partials.todayDeals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
    </section>
    <?php endif; ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/flashDeal.blade.php ENDPATH**/ ?>