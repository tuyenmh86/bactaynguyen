  <div class="my-4 bg-white">
                        <div class="section-title-1">
                            <h3 class="heading-5 strong-700 mb-0">
                                <span class="mr-4"><?php echo e(__('Related products')); ?></span>
                            </h3>
                        </div>
                        <div class="1caorusel-box">
                            <div class="responsive_slick_2row" data-slick-items="4" data-slick-xl-items="4" data-slick-lg-items="4"  data-slick-md-items="4" data-slick-sm-items="2" data-slick-xs-items="2"  data-slick-rows="1">
                                <?php $__currentLoopData = filter_products(\App\Product::where('category_id', $product->category_id)->where('id', '!=', $product->id))->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $related_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <div class="item-product p-0">
                  
                  <?php if($related_product->discount>0): ?>
                  <div class="product-sale-tags">
                     <span><?php echo e(number_format(100-((($related_product->unit_price-$related_product->discount)/$related_product->unit_price)*100),1)); ?>%</span>
                  </div>
                  <?php endif; ?>
                  <a href="<?php echo e(route('product', $related_product->slug)); ?>">
                     <div class="img">
                        <picture>
                           <img class="lazyload img-responsive transition" src="<?php echo e(asset($related_product->thumbnail_img)); ?>" alt="<?php echo e($related_product->name); ?>" data-original="<?php echo e(asset($related_product->thumbnail_img)); ?>">
                        </picture>
                     </div>
                     <figcaption>
                        <h4 class="title-h2 line-clamp"><?php echo e($related_product->name); ?></h4>
                        <div class="price">
                           <?php if($related_product->unit_price>0): ?>
                           <?php if($related_product->discount!=''): ?>
                           <?php echo e(format_price(convert_price($related_product->unit_price-$related_product->discount ))); ?> <del><?php echo e(format_price($related_product->unit_price)); ?></del>
                           <?php else: ?>
                           <?php echo e(format_price(convert_price($related_product->unit_price))); ?>

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
                    </div><?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/frontend/partials/relatedProducts.blade.php ENDPATH**/ ?>