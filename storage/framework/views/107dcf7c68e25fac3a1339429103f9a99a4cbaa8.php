

<?php if(\App\Category::where('featured',1)->count()>0): ?>
    <?php $__currentLoopData = \App\Category::where('featured',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <section class="mb-4">
            <div class="container">
               <div class="bg-white shadow-sm">
                  <div class="row">
                     <div class="container">
                        <div class="title-new">
                           <?php echo e($home_category->name); ?>

                           <a class="" style="float: right;" href="<?php echo e($home_category->link()); ?>" title="<?php echo e($home_category->name); ?>">
                           <i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a>
                        </div>
                     </div>                     
                  </div>
                  <div class="row">
                     <?php $__currentLoopData = \App\Product::where('published', 1)->where('featured', '1')->where('category_id',$home_category->id)->limit(12)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-lg-3 col-6">
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

                        <p class="dia_chi text-justify">
                           <i class="fas fa-map-marker-alt"></i>
                           
                        </p>
                        <div class="hourseitem">
                        <p class="threemt bold500">
                           <?php if(isset($product->bedroom)): ?>

                           <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Phòng ngủ"> <i><img src="<?php echo e(asset('img/bedroom.png')); ?>" style="max-height:15px;"></i> <i class="vti"><?php echo e($product->bedroom); ?></i> </span>
                           <?php endif; ?>
                          
                           <?php if(isset($product->wc)): ?>
                           <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Số phòng WC">  <i><img src="<?php echo e(asset('img/batroom.png')); ?>" style="max-height:15px;"></i> <i class="vti"><?php echo e($product->wc); ?></i></span>
                           <?php endif; ?>
                           <?php if(isset($product->huongdat)): ?>
                           <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Diện tích"> <i><img src="<?php echo e(asset('img/huongdat.png')); ?>" style="max-height:15px;"></i> <i class="vti"><?php echo e($product->dientich); ?></i> </span>
                           <?php endif; ?>
                           <?php if(isset($product->huongdat)): ?>
                           <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Diện tích"> <i><img src="<?php echo e(asset('img/compass.png')); ?>" style="max-height:15px;"></i> <i class="vti"><?php echo e($product->huongdat); ?></i> </span>
                           <?php endif; ?> 
                        </p>
                        </div>
                  </figcaption>
                  </a>
               </div>
                          
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            
            </div>
         </section>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/featured.blade.php ENDPATH**/ ?>