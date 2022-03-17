<div class="header bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 logo d-none d-md-block">
                <a href="/" title="banner"><img class="logo-icon" src="<?php echo e(asset(\App\GeneralSetting::first()->logo)); ?>" title="banner" alt="banner" style="background: #FFFFFF;"></a>
            </div>
            <div class="col-lg-8 col-sm-8 col-md-8">
                <ul class="hotline-top">
                    <li>Hotline - Zalo : <a href="tel:<?php echo e(App\GeneralSetting::first()->phone); ?>" title="<?php echo e(App\GeneralSetting::first()->phone); ?>"><?php echo e(App\GeneralSetting::first()->phone); ?></a></li>
               
                </ul>
                <div class="d-flex w-100">
                    <div class="search-box flex-grow-1 show">
                        <form action="<?php echo e(route('search')); ?>" method="GET">
                            <div class="d-flex position-relative">
                                <div class="d-lg-none search-box-back">
                                    <button class="" type="button"><i class="la la-search"></i>
                                    </button>
                                </div>
                                <div class="w-100">
                                    <input type="text" aria-label="Search" id="search" name="q" class="w-100"
                                           placeholder="Tôi muốn tìm sản phẩm ..." autocomplete="off">

                                </div>
                                <div class="form-group category-select d-none d-xl-block">
                                    <select class="form-control selectpicker" name="category_id">
                                        <option value=""><?php echo e(__('All Categories')); ?></option>
                                        <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"
                                                    <?php if(isset($category_id)): ?>
                                                    <?php if($category_id == $category->id): ?>
                                                    selected
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            ><?php echo e(__($category->name)); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <button class="d-none d-lg-block" type="submit">
                                    <i class="la la-search la-flip-horizontal"></i>
                                </button>
                                <div class="typed-search-box d-none">
                                    <div class="search-preloader">
                                        <div class="loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none">

                                    </div>
                                    <div id="search-content">

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>


                    <div class="logo-bar-icons d-inline-block ml-auto">
                        <div class="d-inline-block d-lg-none">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="d-inline-block" data-hover="dropdown">
                            <div class="nav-cart-box dropdown" id="cart_items">
                                <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="la la-shopping-cart d-inline-block nav-box-icon"></i>
                                    <span class="nav-box-text d-none d-xl-inline-block"><?php echo e(__('Cart')); ?></span>
                                    <?php if(Session::has('cart')): ?>
                                        <span class="nav-box-number"><?php echo e(count(Session::get('cart'))); ?></span>
                                    <?php else: ?>
                                        <span class="nav-box-number">0</span>
                                    <?php endif; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right px-0">
                                    <li>
                                        <div class="dropdown-cart px-0">
                                            <?php if(Session::has('cart')): ?>
                                                <?php if(count($cart = Session::get('cart')) > 0): ?>
                                                    <div class="dc-header">
                                                        <h3 class="heading heading-6 strong-700"><?php echo e(__('Cart Items')); ?></h3>
                                                    </div>
                                                    <div class="dropdown-cart-items c-scrollbar">
                                                        <?php
                                                            $total = 0;
                                                        ?>
                                                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $product = \App\Product::find($cartItem['id']);
                                                                $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                            ?>
                                                            <div class="dc-item">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dc-image">
                                                                        <a href="<?php echo e(route('product', $product->slug)); ?>">
                                                                            <img
                                                                                src="<?php echo e(asset($product->thumbnail_img)); ?>"
                                                                                class="img-fluid" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="dc-content">
                                                                                <span
                                                                                    class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                    <a href="<?php echo e(route('product', $product->slug)); ?>">
                                                                                        <?php echo e(__($product->name)); ?>

                                                                                    </a>
                                                                                </span>

                                                                        <span
                                                                            class="dc-quantity">x<?php echo e($cartItem['quantity']); ?></span>
                                                                        <span
                                                                            class="dc-price"><?php echo e(single_price($cartItem['price']*$cartItem['quantity'])); ?></span>
                                                                    </div>
                                                                    <div class="dc-actions">
                                                                        <button
                                                                            onclick="removeFromCart(<?php echo e($key); ?>)">
                                                                            <i class="la la-close"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <div class="dc-item py-3">
                                                        <span class="subtotal-text"><?php echo e(__('Subtotal')); ?></span>
                                                        <span
                                                            class="subtotal-amount"><?php echo e(single_price($total)); ?></span>
                                                    </div>
                                                    <div class="py-2 text-center dc-btn">
                                                        <ul class="inline-links inline-links--style-3">
                                                            <li class="pr-3">
                                                                <a href="<?php echo e(route('cart')); ?>"
                                                                   class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                                                    <i class="la la-shopping-cart"></i> <?php echo e(__('View cart')); ?>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo e(route('checkout.shipping_info')); ?>"
                                                                   class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                                                    <i class="la la-mail-forward"></i> <?php echo e(__('Checkout')); ?>

                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="dc-header">
                                                        <h3 class="heading heading-6 strong-700"><?php echo e(__('Your Cart is empty')); ?></h3>
                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="dc-header">
                                                    <h3 class="heading heading-6 strong-700"><?php echo e(__('Your Cart is empty')); ?></h3>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile-side-menu d-none d-lg-none">
        <div class="side-menu-overlay opacity-0" onclick="sideMenuClose()"></div>
        <div class="side-menu-wrap opacity-0">
            <div class="side-menu closed">
                <div class="side-menu-header ">
                    <div class="side-menu-close" onclick="sideMenuClose()">
                        <i class="la la-close"></i>
                    </div>

                    <?php if(auth()->guard()->check()): ?>
                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                            <div class="image "
                                 style="background-image:url('<?php echo e(Auth::user()->avatar_original); ?>')"></div>
                            <div class="name"><?php echo e(Auth::user()->name); ?></div>
                        </div>
                        <div class="side-login px-3 pb-3">
                            <a href="<?php echo e(route('logout')); ?>"><?php echo e(__('Sign Out')); ?></a>
                        </div>
                    <?php else: ?>
                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                            <div class="image "
                                 style="background-image:url('<?php echo e(asset('frontend/images/icons/user-placeholder.jpg')); ?>')"></div>
                        </div>
                        <div class="side-login px-3 pb-3">
                            <a href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Sign In')); ?></a>
                            <a href="<?php echo e(route('user.registration')); ?>"><?php echo e(__('Registration')); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="side-menu-list px-3">
                    <ul class="side-user-menu">
                        <li>
                            <a href="<?php echo e(route('home')); ?>">
                                <i class="la la-home"></i>
                                <span>TRANG CHỦ</span>
                            </a>
                        </li>
                        <li>
                            <?php $__currentLoopData = \App\Category::where('id',73)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($category->link()); ?>" class="nav-link" title="<?php echo e($category->name); ?>">
                                <?php echo e($category->name); ?>

                                </a>
                                <ul class="dropdown-menu">
                                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item">
                                            <a href="<?php echo e($lv2->link()); ?>" class="nav-link" title="<?php echo e($lv2->name); ?>"><?php echo e($lv2->name); ?>

                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $lv2->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item-lv2"><a class="nav-link" href=<?php echo e($lv3->link()); ?> title="<?php echo e($lv3->name); ?>"><?php echo e($lv3->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </li>
                        <?php $__currentLoopData = \App\Page::where('top-menu',1)->where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class=" nav-item has-childs">
                                <a href="<?php echo e($page->link()); ?>" class="nav-link" title="<?php echo e($page->name); ?>"><?php echo e($page->name); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = \App\CategoriesPost::where('headmenu', 1)->where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $headmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item"><a class="nav-link" href=<?php echo e($headmenu->link()); ?> title="<?php echo e($headmenu->name); ?>"><?php echo e($headmenu->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item "><a class="nav-link" href="<?php echo e(route('lien-he')); ?>" title="Liên hệ">Liên hệ</a></li>

                        

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <li>
                            <a href="<?php echo e(route('cart')); ?>">
                                <i class="la la-shopping-cart"></i>
                                <span><?php echo e(__('Cart')); ?></span>
                                <?php if(Session::has('cart')): ?>
                                    <span class="badge" id="cart_items_sidenav"><?php echo e(count(Session::get('cart'))); ?></span>
                                <?php else: ?>
                                    <span class="badge" id="cart_items_sidenav">0</span>
                                <?php endif; ?>
                            </a>
                        </li>
                        



                   
                    </ul>
                    













                </div>
            </div>
        </div>
    </div>
    <!-- end mobile menu -->
    <!-- Navbar -->

    <div id="menu_area" class="menu-area">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    <a class="navbar-brand" href="#"><img src="<?php echo e(asset(\App\GeneralSetting::first()->logo)); ?>" class="d-block d-sm-none d-md-none d-lg-none" alt="<?php echo e(\App\GeneralSetting::first()->sitename); ?>" style="max-height: 50px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <i class="btn-mobile fa fa-align-right" style="font-size: 28px; color:#FFF;background-color: #ff1313;"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Trang Chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('gioithieu')); ?>" title="Giới thiệu">Giới thiệu</a></li>
                            <?php
                            $mcategory = \App\Category::where('id',73)->first();
                            ?>
                            <?php if(!empty($mcategory)): ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="<?php echo e(route('products.category',$mcategory->id)); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e($mcategory->name); ?></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php $__currentLoopData = $mcategory->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="<?php echo e(route('products.subcategory',$subcategory->id)); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e($subcategory->name); ?></a>
                                                <?php if(!empty($subcategory)): ?>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <?php $__currentLoopData = $subcategory->subsubcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="<?php echo e(route('products.subsubcategory',$subsubcategories->id)); ?>"><?php echo e($subsubcategories->name); ?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('tintuc')); ?>" title="Tin tức">Tin tức</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('khuyenmai')); ?>" title="khuyến mãi">Khuyến mãi</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('duan')); ?>" title="Dự án thực hiện">Dự án thực hiện</a></li>
                            

                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('lien-he')); ?>" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
<?php /**PATH D:\xampp72\htdocs\mekendy\resources\views/frontend/inc/nav.blade.php ENDPATH**/ ?>