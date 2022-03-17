<section class="mb-4">
   <div class="container">
      <div class="bg-white shadow-sm">
         <div class="row">
            <div class="container">
               <div class="title-new">
                    DANH SÁCH BẤT ĐỘNG SẢN VIP
               </div>
            </div>
         </div>
         <div class="row">
            <?php $__currentLoopData = \App\Product::where('vip1',1)->where('featured',1)->where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-3 col-lg-3 col-6">
               <div class="item-product p-0">
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
                                <?php echo e(format_price(convert_price($product->unit_price))); ?>

                           <?php else: ?>
                                Thương lượng
                                
                            <?php endif; ?> 
                  </div>
                  <p class="dia_chi text-justify">
                  <i class="fas fa-map-marker-alt"></i>
                    <?php echo e($product->address); ?> - <?php echo e(\App\Ward::find($product->ward_id)->name); ?> - <?php echo e(\App\District::find($product->district_id)->name); ?> - <?php echo e(\App\Province::find($product->provice_id)->name); ?>

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

<?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/partials/vip1.blade.php ENDPATH**/ ?>