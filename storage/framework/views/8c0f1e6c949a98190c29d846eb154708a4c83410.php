<?php $__env->startSection('meta_title'); ?><?php echo e($product->meta_title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?><?php echo e($product->meta_description); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_keywords'); ?><?php echo e($product->tags); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php echo e($product->meta_title); ?>">
<meta itemprop="description" content="<?php echo e($product->meta_description); ?>">
<meta itemprop="image" content="<?php echo e(asset($product->meta_img)); ?>">
<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="<?php echo e($product->meta_title); ?>">
<meta name="twitter:description" content="<?php echo e($product->meta_description); ?>">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image" content="<?php echo e(asset($product->meta_img)); ?>">
<meta name="twitter:data1" content="<?php echo e(single_price($product->unit_price)); ?>">
<meta name="twitter:label1" content="Price">
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo e($product->meta_title); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo e(route('product', $product->slug)); ?>" />
<meta property="og:image" content="<?php echo e(asset($product->meta_img)); ?>" />
<meta property="og:description" content="<?php echo e($product->meta_description); ?>" />
<meta property="og:site_name" content="<?php echo e(env('APP_NAME')); ?>" />
<meta property="og:price:amount" content="<?php echo e(single_price($product->unit_price)); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- SHOP GRID WRAPPER -->
<?php
$sitesetting = \App\GeneralSetting::first();
?>
<section class="bg-white">
    <div class="container">
        <div class="home-slide">
            <div class="caorusel-box">  
                <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="3" data-slick-lg-items="3"  data-slick-md-items="3" data-slick-sm-items="2" data-slick-xs-items="1">
                   
            <?php $__currentLoopData = json_decode($product->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-photo">
                <picture>
                    <source media="(max-width: 1023px)" srcset="<?php echo e(asset($photo)); ?>">
                    <source media="(min-width: 1024px)" srcset="<?php echo e(asset($photo)); ?>">
                    <img class="img-responsive" src="<?php echo e(asset($photo)); ?>" alt="">
                </picture>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </div>
            </div>
        </div>
    </div>
    

    <div class="container w90 pt-4">
    <h1 class="titlehouse" id="house-89620"><?php echo e($product->name); ?></h1>
    <p class="addresshouse"><i class="fas fa-map-marker-alt"></i><?php echo e($product->address); ?> - <?php echo e(\App\Ward::find($product->ward_id)->name); ?> - <?php echo e(\App\District::find($product->district_id)->name); ?> - <?php echo e(\App\Province::find($product->provice_id)->name); ?></p>
    <p class="pricehouse">
        <?php echo e(format_price(convert_price($product->unit_price))); ?>

    </p>
    <div class="row">
        <div class="col-md-8">
            <div class="row" style="padding-top: 15px;">
                <div class="col-sm-12">
                <h5 class="headifhouse">Thông tin chính</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6 col-sm-3">Diện tích</div>
                            <div class="col-6 col-sm-3"><b><?php echo e($product->dientich); ?></b></div>
                            <div class="col-6 col-sm-3">Mã BDS:</div>
                            <div class="col-6 col-sm-3"><b><?php echo e($product->id); ?></b></div>
                            <div class="col-6 col-sm-3">Phòng ngủ</div>
                            <div class="col-6 col-sm-3"><b><?php echo e($product->bedroom); ?></b></div>
                            <div class="col-6 col-sm-3">Giá</div>
                            <div class="col-6 col-sm-3"><b><?php echo e(format_price(convert_price($product->unit_price))); ?></b></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <h5 class="headifhouse">Mô tả</h5>
                <div>
                    <p><?php echo $product->description; ?></p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="boxright">
                <div class="head">
                Liên hệ người bán
                </div>
                <div class="row itemagent">
                <div class="col-sm-4">
                    <a href="#">
                    <img src="https://images.cenhomes.vn/2019/09/1567563102-cenhomes.jpg" alt="null" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-8">
                    <div class="info">
                        <a href="#"><?php echo e($product->user->name); ?></a>
                        <p class="mobile"><?php echo e($product->user->phone); ?></p>
                        <p class="email"><?php echo e($product->user->email); ?></p>
                    </div>
                </div>
                </div>
            </div>
            <div class="xem-bieu-gia">
            </div>
            <div class="boxright">
                <form action="<?php echo e(route('gui-lien-he')); ?>" enctype="multipart/form-data"
                                  id="form-sec" method="post" accept-charset="utf-8">
                                <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e($product->id); ?>" name="bds_id" id="bds_id">
                <input type="hidden" value="<?php echo e($product->link()); ?>" name="urlback" id="urlback">
                <div class="head">Liên hệ tư vấn</div>
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control " placeholder="Họ và tên *">
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control " placeholder="Số điện thoại *">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control " placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="title" class="form-control " placeholder="Tiêu đề *" value="<?php echo e($product->name); ?>" readonly="">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control " rows="5" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-orange btn-block">Gửi liên hệ</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container w90">
        <div class="my-4 bg-white">
            <div class="section-title-1">
                <h3 class="heading-5 strong-700 mb-0">
                    <span class="mr-4">Bất động sản cùng khu vực</span>
                </h3>
            </div>
            <div class="caorusel-box">
                <div class="responsive_slick_2row" data-slick-items="4" data-slick-xl-items="4" data-slick-lg-items="4"  data-slick-md-items="4" data-slick-sm-items="2" data-slick-xs-items="2"  data-slick-rows="1">
                    <?php $__currentLoopData = filter_products(\App\Product::where('ward_id', $product->ward_id)->where('id', '!=', $product->id))->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $related_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="item-product p-0">
      
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
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
   $(document).ready(function() {
   
       getVariantPrice();
   
       $('#share').share({
           networks: ['facebook','twitter','linkedin'],
           theme: 'square'
       });
   });
   
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/product_details.blade.php ENDPATH**/ ?>