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
    <section class="product-details-area">
        <div class="container">

            <div class="bg-white">

                <!-- Product gallery and Description -->
                <div class="row no-gutters cols-xs-space cols-sm-space cols-md-space">
                    <div class="col-lg-6">
                        <div class="product-gal">
                            <?php if(is_array(json_decode($product->photos)) && count(json_decode($product->photos)) > 0): ?>
                                <div class="product-gal-img">
                                    <img class="xzoom img-fluid" src="<?php echo e(asset(json_decode($product->photos)[0])); ?>" xoriginal="<?php echo e(asset(json_decode($product->photos)[0])); ?>" />
                                </div>
                                <div class="product-gal-thumb">
                                    <div class="xzoom-thumbs p-1">
                                        <?php $__currentLoopData = json_decode($product->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(asset($photo)); ?>">
                                                <img class="xzoom-gallery" width="80" src="<?php echo e(asset($photo)); ?>"  <?php if($key == 0): ?> xpreview="<?php echo e(asset($photo)); ?>" <?php endif; ?>>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Product description -->
                        <div class="product-description-wrapper">
                            <!-- Product title -->
                            <h2 class="product-title">
                                <?php echo e(__($product->name)); ?>

                            </h2>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
                                <li><a href="<?php echo e(route('categories.all')); ?>"><?php echo e(__('All Categories')); ?></a></li>
                                <li class="active"><a href="<?php echo e(route('products.category', $product->category_id)); ?>"><?php echo e($product->category->name); ?></a></li>
                                <li>
                                <?php if($product->subcategory_id >0): ?>
                                <a href="<?php echo e(route('products.subcategory', $product->subcategory_id)); ?>"><?php echo e($product->subcategory->name); ?></a></li> 
                                <?php endif; ?>
                                <?php if($product->subsubcategory_id >0): ?>   
                                <li class="active"><a href="<?php echo e(route('products.subsubcategory', $product->subsubcategory_id)); ?>"><?php echo e($product->subsubcategory->name); ?></a></li>
                                <?php endif; ?>
                            </ul>

                            <div class="row">
                                <div class="col-12">
                                    <!-- Rating stars -->
                                    <div class="rating mb-1">
                                        <?php
                                            $total = 0;
                                            $total += $product->reviews->count();
                                        ?>
                                        <span class="star-rating">
                                            <?php echo e(renderStarRating($product->rating)); ?>

                                        </span>
                                        <span class="rating-count">(<?php echo e($total); ?> <?php echo e(__('customer reviews')); ?>)</span>
                                    </div>
                                    <div class="sold-by">
                                        <small class="mr-2">Shop: </small>
                                        <?php if($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
                                            <a href="<?php echo e(route('shop.visit', $product->user->shop->slug)); ?>"><?php echo e($product->user->shop->name); ?></a>
                                        <?php else: ?>
                                            <?php echo e(__('Inhouse product')); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <ul class="inline-links inline-links--style-1">
                                        <?php
                                            $qty = 0;
                                            foreach (json_decode($product->variations) as $key => $variation) {
                                                $qty += $variation->qty;
                                            }
                                        ?>
                                        <?php if(count(json_decode($product->variations, true)) >= 1): ?>
                                            <?php if($qty > 0): ?>
                                                <li>
                                                    <span class="badge badge-md badge-pill bg-green"><?php echo e(__('In stock')); ?></span>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <span class="badge badge-md badge-pill bg-red"><?php echo e(__('Out of stock')); ?></span>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                                                        <?php if(home_price($product->id) != home_discounted_price($product->id)): ?>

                                                            <div class="row no-gutters mt-4">
                                                                <div class="col-12">
                                                                    <div class="product-description-label"><?php echo e(__('Price')); ?>:</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="product-price-old">
                                                                        <del>
                                                                            <?php echo e(home_price($product->id)); ?>

                                                                            <span>/<?php echo e($product->unit); ?></span>
                                                                        </del>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row no-gutters mt-3">
                                                                <div class="col-12">
                                                                    <div class="product-description-label mt-1"><?php echo e(__('Discount Price')); ?>:</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="product-price">
                                                                        <strong>
                                                                            <?php echo e(home_discounted_price($product->id)); ?>

                                                                        </strong>
                                                                        <span class="piece">/<?php echo e($product->unit); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="row no-gutters mt-3">
                                                                <div class="col-12">
                                                                    <div class="product-description-label"><?php echo e(__('Price')); ?>:</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="product-price">
                                                                        <?php if($product->unit_price>0): ?>
                                                                        <strong>
                                                                            <?php echo e(home_discounted_price($product->id)); ?>

                                                                        </strong>
                                                                        <span class="piece">/<?php echo e($product->unit); ?></span>
                                                                        <?php else: ?>
                                                                            Liên hệ <a href="https://zalo.me/<?php echo e(\App\GeneralSetting::first()->zalo); ?>" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                            <?php if($product->unit_price>0): ?>
                            <hr>
                            

                            <form id="option-choice-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                <?php $__currentLoopData = json_decode($product->choice_options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-description-label mt-2 "><?php echo e($choice->title); ?>:</div>
                                        </div>
                                        <div class="col-12">
                                            <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                <?php $__currentLoopData = $choice->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <input type="radio" id="<?php echo e($choice->name); ?>-<?php echo e($option); ?>" name="<?php echo e($choice->name); ?>" value="<?php echo e($option); ?>" <?php if($key == 0): ?> checked <?php endif; ?>>
                                                        <label for="<?php echo e($choice->name); ?>-<?php echo e($option); ?>"><?php echo e($option); ?></label>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                                <?php if(count(json_decode($product->colors)) > 0): ?>
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="product-description-label mt-2"><?php echo e(__('Color')); ?>:</div>
                                        </div>
                                        <div class="col-10">
                                            <ul class="list-inline checkbox-color mb-1">
                                                <?php $__currentLoopData = json_decode($product->colors); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <input type="radio" id="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>" name="color" value="<?php echo e($color); ?>" <?php if($key == 0): ?> checked <?php endif; ?>>
                                                        <label style="background: <?php echo e($color); ?>;" for="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>" data-toggle="tooltip"></label>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <hr>
                                <?php endif; ?>

                            <!-- Quantity + Add to cart -->
                                <div class="row no-gutters">
                                    <div class="col-2">
                                        <div class="product-description-label mt-2">Số lượng:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-quantity d-flex align-items-center">
                                            <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="minus" data-field="quantity" disabled="disabled">
                                                        <i class="la la-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" class="form-control input-number text-center" placeholder="1" value="1" min="1" max="10">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-number" type="button" data-type="plus" data-field="quantity">
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <?php if(count(json_decode($product->variations, true)) >= 1): ?>
                                                <div class="avialable-amount">(<?php echo e($qty); ?> <?php echo e(__('available')); ?>)</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                               
                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                    <div class="col-2">
                                        <div class="product-description-label"><?php echo e(__('Total Price')); ?>:</div>
                                    </div>
                                    <div class="col-10">
                                        <div class="product-price">
                                            <strong id="chosen_price">

                                            </strong>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <div class="d-table width-100 mt-3">
                                <div class="d-table-cell">
                                    <!-- Buy Now button -->
                                    
                                    <?php if($product->quantity>0): ?>
                                        
                                            <button type="button" class="btn btn-styled btn-base-1 btn-icon-left strong-700 hov-bounce hov-shaddow" onclick="buyNow()">
                                                <i class="la la-shopping-cart"></i> <?php echo e(__('Buy Now')); ?>

                                            </button>
                                        
                                    <?php endif; ?>
                                <!-- Add to cart button -->

                                    <button type="button" class="btn btn-styled btn-alt-base-1 c-white btn-icon-left strong-700 hov-bounce hov-shaddow ml-2" onclick="addToCart()">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="d-none d-md-inline-block"> <?php echo e(__('Add to cart')); ?></span>
                                    </button>
                                </div>
                            </div>
                            <?php endif; ?>

                            <hr class="mt-3 mb-0">

                            <div class="d-table width-100 mt-2">
                                <div class="d-table-cell">
                                    <!-- Add to wishlist button -->
                                    <button type="button" class="btn pl-0 btn-link strong-700" onclick="addToWishList(<?php echo e($product->id); ?>)">
                                        <?php echo e(__('Add to wishlist')); ?>

                                    </button>
                                    <!-- Add to compare button -->
                                    <button type="button" class="btn btn-link btn-icon-left strong-700" onclick="addToCompare(<?php echo e($product->id); ?>)">
                                        <?php echo e(__('Add to compare')); ?>

                                    </button>
                                </div>
                            </div>

                            <hr class="mt-2">

                            <div class="row no-gutters mt-3">
                                <div class="col-12">

                                    <div class="product-description-label alpha-6">
                                    <?php echo e(__('Return Policy')); ?>:
                                </div>
                                </div>
                                
                            </div>
                            <?php if($product->added_by == 'seller'): ?>
                                <div class="row no-gutters mt-3">
                                    <div class="col-12">
                                        <div class="product-description-label alpha-6"><?php echo e(__('Seller Guarantees')); ?>:</div>
                                    </div>
                                    <div class="col-12">
                                        <?php if($product->user->seller->verification_status == 1): ?>
                                            <?php echo e(__('Verified seller')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('Non verified seller')); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row no-gutters mt-3">
                                <div class="col-12">
                                    <div class="product-description-label alpha-6"><?php echo e(__('Payment')); ?>:</div>
                                </div>
                                  
                                
                            </div>
                            
                            <hr class="mt-4">
                            <div class="row no-gutters mt-4">
                                <div class="col-3">
                                    <div class="product-description-label mt-2"><?php echo e(__('Share')); ?>:</div>
                                </div>
                                <div class="col-9">
                                    <div id="share"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="seller-info-box mb-3">
                        <div class="sold-by position-relative">
                            <?php if($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1 && $product->user->seller->verification_status == 1): ?>
                                <div class="position-absolute medal-badge">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 287.5 442.2">
                                        <polygon style="fill:#F8B517;" points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 "/>
                                        <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8"/>
                                        <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6"/>
                                        <polygon style="fill:#FCFCFD;" points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                        60,116.6 124.1,116.6 "/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div class="title"><?php echo e(__('Sold By')); ?></div>
                            <?php if($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
                                <a href="<?php echo e(route('shop.visit', $product->user->shop->slug)); ?>" class="name d-block"><?php echo e($product->user->shop->name); ?>

                                    <?php if($product->user->seller->verification_status == 1): ?>
                                        <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                                    <?php else: ?>
                                        <span class="ml-2"><i class="fa fa-times-circle" style="color:red"></i></span>
                                    <?php endif; ?>
                                </a>
                                <div class="location"><?php echo e($product->user->shop->address); ?></div>
                            <?php else: ?>
                                <?php echo e(__('Inhouse product')); ?>

                            <?php endif; ?>
                            <?php
                                $total = 0;
                                $rating = 0;
                                foreach ($product->user->products as $key => $seller_product) {
                                    $total += $seller_product->reviews->count();
                                    $rating += $seller_product->reviews->sum('rating');
                                }
                            ?>

                            <div class="rating text-center d-block">
                                <span class="star-rating star-rating-sm d-block">
                                    <?php if($total > 0): ?>
                                        <?php echo e(renderStarRating($rating/$total)); ?>

                                    <?php else: ?>
                                        <?php echo e(renderStarRating(0)); ?>

                                    <?php endif; ?>
                                </span>
                                <span class="rating-count d-block ml-0">(<?php echo e($total); ?> <?php echo e(__('customer reviews')); ?>)</span>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center">
                            <?php if($product->added_by == 'seller'): ?>
                                <div class="col">
                                    <a href="<?php echo e(route('shop.visit', $product->user->shop->slug)); ?>" class="d-block store-btn"><?php echo e(__('Visit Store')); ?></a>
                                </div>
                                <div class="col">
                                    <ul class="social-media social-media--style-1-v4 text-center">
                                        <li>
                                            <a href="<?php echo e($product->user->shop->facebook); ?>" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($product->user->shop->google); ?>" class="google" target="_blank" data-toggle="tooltip" data-original-title="Google">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($product->user->shop->twitter); ?>" class="twitter" target="_blank" data-toggle="tooltip" data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($product->user->shop->youtube); ?>" class="youtube" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                                       
                    <div class="seller-top-products-box bg-white sidebar-box mb-3">
                        <div class="box-title">
                            Top sản phẩm bán chạy nhất trong shop
                        </div>
                        <div class="box-content">
                            <?php $__currentLoopData = filter_products(\App\Product::where('category_id', $product->category_id)->orderBy('num_of_sale', 'desc'))->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $top_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                <div class="mb-3 product-box-3">
                                    <div class="clearfix">
                                        <div class="product-image float-left">
                                            <a href="<?php echo e(route('product', $top_product->slug)); ?>" style="background-image:url('<?php echo e(asset($top_product->thumbnail_img)); ?>');"></a>
                                        </div>
                                        <div class="product-details float-left">
                                            <h4 class="title text-truncate">
                                                <a href="<?php echo e(route('product', $top_product->slug)); ?>" class="d-block"><?php echo e($top_product->name); ?></a>
                                            </h4>
                                            <div class="star-rating star-rating-sm mt-1">
                                                <?php echo e(renderStarRating($top_product->rating)); ?>

                                            </div>
                                            <div class="price-box">
                                                <?php if($top_product->unit_price>0): ?>

                                                   <?php if(home_base_price($top_product->id) != home_discounted_base_price($top_product->id)): ?>
                                                        <del class="old-product-price strong-400"><?php echo e(home_base_price($top_product->id)); ?></del>
                                                    <?php endif; ?>
                                                <span class="product-price strong-600"><?php echo e(home_discounted_base_price($top_product->id)); ?></span>
                                                <?php else: ?>
                                                    Liên hệ
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="product-desc-tab bg-white">
                        <div class="tabs tabs--style-2">
                            <ul class="nav nav-tabs justify-content-center bg-white">
                                <li class="nav-item">
                                    <a href="#tab_default_1" data-toggle="tab" class="nav-link text-uppercase strong-600 active show"><?php echo e(__('Description')); ?></a>
                                </li>
                                <?php if($product->video_link != null): ?>
                                    <li class="nav-item">
                                        <a href="#tab_default_2" data-toggle="tab" class="nav-link text-uppercase strong-600"><?php echo e(__('Video')); ?></a>
                                    </li>
                                <?php endif; ?>
                               
                                <li class="nav-item">
                                    <a href="#tab_default_4" data-toggle="tab" class="nav-link text-uppercase strong-600"><?php echo e(__('Reviews')); ?></a>
                                </li>
                            </ul>

                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="tab_default_1">
                                    <div class="py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo $product->description; ?>
                                            </div>
                                        </div>
                                        <span class="space-md-md"></span>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab_default_2">
                                    <div class="fluid-paragraph py-2">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9 mb-5">
                                            <?php if($product->video_provider == 'youtube' && $product->video_link != null): ?>
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo e(explode('=', $product->video_link)[1]); ?>"></iframe>
                                            <?php elseif($product->video_provider == 'dailymotion' && $product->video_link != null): ?>
                                                <iframe class="embed-responsive-item" src="https://www.dailymotion.com/embed/video/<?php echo e(explode('video/', $product->video_link)[1]); ?>"></iframe>
                                            <?php elseif($product->video_provider == 'vimeo' && $product->video_link != null): ?>
                                                <iframe src="https://player.vimeo.com/video/<?php echo e(explode('vimeo.com/', $product->video_link)[1]); ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="tab_default_4">
                                    <div class="fluid-paragraph py-4">
                                        <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="block block-comment">
                                                <div class="block-image">
                                                    <img src="<?php echo e(asset($review->user->avatar_original)); ?>" class="rounded-circle">
                                                </div>
                                                <div class="block-body">
                                                    <div class="block-body-inner">
                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <h3 class="heading heading-6">
                                                                    <a href="javascript:;"><?php echo e($review->user->name); ?></a>
                                                                </h3>
                                                                <span class="comment-date">
                                                                    <?php echo e(date('d-m-Y', strtotime($review->created_at))); ?>

                                                                </span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="rating text-right clearfix d-block">
                                                                    <span class="star-rating star-rating-sm float-right">
                                                                        <?php for($i=0; $i < $review->rating; $i++): ?>
                                                                            <i class="fa fa-star active"></i>
                                                                        <?php endfor; ?>
                                                                        <?php for($i=0; $i < 5-$review->rating; $i++): ?>
                                                                            <i class="fa fa-star"></i>
                                                                        <?php endfor; ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="comment-text">
                                                            <?php echo e($review->comment); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(count($product->reviews) <= 0): ?>
                                            <div class="text-center">
                                               Chưa có đánh giá nào cho sản phẩm này
                                            </div>
                                        <?php endif; ?>

                                        <?php if(Auth::check()): ?>
                                            <?php
                                                $commentable = false;
                                            ?>
                                            <?php $__currentLoopData = $product->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($orderDetail->order->user_id == Auth::user()->id && $orderDetail->delivery_status == 'delivered' && \App\Review::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first() == null): ?>
                                                    <?php
                                                       $commentable = true;
                                                    ?>
                                               <?php endif; ?>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($commentable): ?>
                                                <div class="leave-review">
                                                    <div class="section-title section-title--style-1">
                                                        <h3 class="section-title-inner heading-6 strong-600 text-uppercase">
                                                            <?php echo e(__('Write a review')); ?>

                                                        </h3>
                                                    </div>
                                                    <form class="form-default" role="form" action="<?php echo e(route('reviews.store')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="text-uppercase c-gray-light"><?php echo e(__('Your name')); ?></label>
                                                                    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control" disabled required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="text-uppercase c-gray-light"><?php echo e(__('Email')); ?></label>
                                                                    <input type="text" name="email" value="<?php echo e(Auth::user()->email); ?>" class="form-control" required disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="c-rating mt-1 mb-1 clearfix d-inline-block">
                                                                    <input type="radio" id="star5" name="rating" value="5" required/>
                                                                    <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" required/>
                                                                    <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" required/>
                                                                    <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" required/>
                                                                    <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" required/>
                                                                    <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" rows="4" name="comment" placeholder="<?php echo e(__('Your review')); ?>" required></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-styled btn-base-1 btn-circle mt-4">
                                                                <?php echo e(__('Send review')); ?>

                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  <?php echo $__env->make('frontend.partials.relatedProducts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/frontend/product_details.blade.php ENDPATH**/ ?>