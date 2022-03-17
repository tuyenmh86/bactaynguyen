

<?php if(\App\BusinessSetting::where('type', 'best_selling')->first()->value == 1): ?>
<section class="mb-2">
   <div class="container">
      <div class="p-1 bg-white shadow-sm">
         <div class="section-title-1 clearfix">
            <h3 class="heading-5 strong-700 mb-0 float-left">
               <span class="mr-4"><?php echo e(__('Best Selling')); ?></span>
            </h3>
            
         </div>
         <div class="caorusel-box">
            <div class="slick-carousel" data-slick-items="5" data-slick-lg-items="5" data-slick-md-items="4"
               data-slick-sm-items="2" data-slick-xs-items="2" data-slick-dots="true" data-slick-rows="2">
               <?php $__currentLoopData = filter_products(\App\Product::where('published', 1)->orderBy('num_of_sale', 'desc'))->limit(20)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="item-product p-0">
                  
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
                           <?php if($product->unit_price>0): ?>
                           <?php if($product->discount!=''): ?>
                           <?php echo e(format_price(convert_price($product->unit_price-$product->discount ))); ?> <del><?php echo e(format_price($product->unit_price)); ?></del>
                           <?php else: ?>
                           <?php echo e(format_price(convert_price($product->unit_price))); ?>

                           <?php endif; ?>
                           <?php else: ?>
                          <a href="http://zalo.me/<?php echo e(\App\GeneralSetting::first()->zalo); ?>" class="zalo">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            <span>Zalo: <?php echo e(\App\GeneralSetting::first()->zalo); ?></span>
                          </a>
                          <?php endif; ?> 
                        </div>
                  </figcaption>
                  </a>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>

<?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/frontend/partials/best_selling.blade.php ENDPATH**/ ?>