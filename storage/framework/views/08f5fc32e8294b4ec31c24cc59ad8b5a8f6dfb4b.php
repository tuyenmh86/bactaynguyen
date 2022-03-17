
  <?php $__currentLoopData = \App\HomeCategory::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_home => $homeCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="mb-4">
            <div class="container">
                <div class="bg-white shadow-sm">
                    <div class="section-title-1 clearfix p-1 mb-1">
                        <h3 class="heading-5 strong-700 mb-0 float-left">
                            <span class="mr-4"><a title="<?php echo e($homeCategory->category->name); ?>" href="<?php echo e($homeCategory->category->link()); ?>"><?php echo e($homeCategory->category->name); ?></a> </span>
                            
                        </h3>
                         <?php if(json_decode($homeCategory->subcategories)!=null): ?>
                            <ul class="inline-links float-right nav d-none d-lg-inline-block">
                                <?php $__currentLoopData = json_decode($homeCategory->subcategories); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(\App\SubCategory::find($subcategory)!= null): ?>
                                        <li class="<?php if($key == 0) echo 'active'; ?>">
                                            <a href="#subcat-<?php echo e($subcategory); ?>" data-toggle="tab"
                                               class="d-block <?php if($key == 0) echo 'active'; ?>"><?php echo e(\App\SubCategory::find($subcategory)->name); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="tab-content">
                        <div class="row gutters-5 sm-no-gutters">
                            <?php if($homeCategory->category->banner!=null): ?>
                            <div class="pt-2 col-lg-3 col-md-3 d-none d-md-block d-sm-none">
                                <a href="<?php echo e($homeCategory->banner_url); ?>" target="_blank" class="banner-container">
                                    <img src="<?php echo e(asset($homeCategory->category->banner)); ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="<?php if($homeCategory->category->banner!=null): ?> col-lg-9 col-md-9 <?php else: ?> container <?php endif; ?>">
                                <?php if(json_decode($homeCategory->subcategories)!=null): ?>
                                    <?php $__currentLoopData = json_decode($homeCategory->subcategories); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(\App\SubCategory::find($subcategory) != null): ?>
                                            <div class="tab-pane fade <?php if($key == 0) echo 'show active'; ?>"
                                                 id="subsubcat-<?php echo e($subcategory); ?>">
                                                <div class="row">
                                                    <?php $__currentLoopData = filter_products(\App\Product::where('published', 1)->where('subcategory_id', $subcategory))->limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                            
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
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="row" style="text-align: center;">
                                                    <p class="bg-white" style="width:100%;text-align: center;">
                                                        <a class="btn btn-warning" href="<?php echo e(\App\SubCategory::find($subcategory)->link()); ?>">Xem thêm</a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <div class="row">
                                    <div class="container">
                                        <div class="caorusel-box">
            <div class="slick-carousel" data-slick-items="5" data-slick-lg-items="4" data-slick-md-items="3"
               data-slick-sm-items="2" data-slick-xs-items="2" data-slick-dots="true" data-slick-rows="2">
                                        <?php $__currentLoopData = filter_products(\App\Product::where('published', 1)->where('category_id', $homeCategory->category_id))->limit(12)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/homeCategory.blade.php ENDPATH**/ ?>