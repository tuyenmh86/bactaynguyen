<?php $__env->startSection('content'); ?>

    <section class="bg-white mt-4">
        
            <div class="container bg-white pb-4">
                <div class="row">
                    <?php if(isset($category)): ?>
                        
                        <div class="title-new">
                            <?php echo e($category->name); ?>

                            <a class="" style="float: right;" href="<?php echo e($category->link()); ?>" title="<?php echo e($category->name); ?>">
                         </div>
                    <?php endif; ?>
                
                    <div class="container">
                
                    <div class="row sm-no-gutters gutters-5">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-2 col-lg-2 col-6">
                                <div class="item-product ">
                                    <?php if($product->discount>0): ?>
                                        <div class="product-sale-tags">
                                            <span><?php echo e(number_format(100-((($product->unit_price-$product->discount)/$product->unit_price)*100),1)); ?>%</span>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('product', $product->slug)); ?>">
                                        <div class="img">
                                            <picture>
                                                <img class="lazyload img-responsive transition" src="<?php echo e(asset($product->thumbnail_img)); ?>" alt="<?php echo e($product->name); ?>" data-original="<?php echo e(asset($product->thumbnail_img)); ?>">
                                            </picture>
                                        </div>
                                        <figcaption>
                                            <h4 class="title-h2 line-clamp"><?php echo e($product->name); ?></h4>
                                            <div class="price">
                                                <?php if($product->discount!=''): ?>
                                                    <?php echo e(format_price(convert_price($product->unit_price-$product->discount ))); ?> <del><?php echo e(format_price($product->unit_price)); ?></del>
                                                <?php else: ?>
                                                    <?php if($product->unit_price>0): ?>
                                                    <?php echo e(format_price(convert_price($product->unit_price))); ?>

                                                    <?php else: ?>
                                                        Liên Hệ
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </figcaption>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <nav aria-label="Center aligned pagination">
                        <ul class="pagination justify-content-center">
                            <?php echo e($products->links()); ?>

                        </ul>
                    </nav>
                </div>
                
                   
            </div>
            <hr/>
        </div>
    </section>
    
    <section class="bg-white mt-4">
        <div class="container">
            <?php if(isset($category)): ?>
                <p class="p-3"><?php echo $category->description; ?></p>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/product_listing.blade.php ENDPATH**/ ?>