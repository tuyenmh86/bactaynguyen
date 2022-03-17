<div class="header bg-white">
    <!-- Top Bar -->
    <div class="top-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col">
                    
                </div>

                <div class="col-5 text-right d-none d-lg-block">
                    <ul class="inline-links">
                        <li>
                            <a href="<?php echo e(route('orders.track')); ?>" class="top-bar-item"><?php echo e(__('Track Order')); ?></a>
                        </li>
                        <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="<?php echo e(route('dashboard')); ?>" class="top-bar-item"><?php echo e(__('My Profile')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" class="top-bar-item"><?php echo e(__('Logout')); ?></a>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('user.login')); ?>" class="top-bar-item"><?php echo e(__('Login')); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user.registration')); ?>" class="top-bar-item"><?php echo e(__('Registration')); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Top Bar -->

    <!-- mobile menu -->
    <div class="mobile-side-menu d-lg-none">
        <div class="side-menu-overlay opacity-0" onclick="sideMenuClose()"></div>
        <div class="side-menu-wrap opacity-0">
            <div class="side-menu closed">
                <div class="side-menu-header ">
                    <div class="side-menu-close" onclick="sideMenuClose()">
                        <i class="la la-close"></i>
                    </div>

                    <?php if(auth()->guard()->check()): ?>
                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                                <div class="image " style="background-image:url('<?php echo e(Auth::user()->avatar_original); ?>')"></div>
                                <div class="name"><?php echo e(Auth::user()->name); ?></div>
                        </div>
                        <div class="side-login px-3 pb-3">
                            <a href="<?php echo e(route('logout')); ?>"><?php echo e(__('Sign Out')); ?></a>
                        </div>
                    <?php else: ?>
                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                                <div class="image " style="background-image:url('<?php echo e(asset('frontend/images/icons/user-placeholder.jpg')); ?>')"></div>
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
                                <span><?php echo e(__('Home')); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('dashboard')); ?>">
                                <i class="la la-dashboard"></i>
                                <span><?php echo e(__('Dashboard')); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('purchase_history.index')); ?>">
                                <i class="la la-file-text"></i>
                                <span><?php echo e(__('Purchase History')); ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('compare')); ?>">
                                <i class="la la-refresh"></i>
                                <span><?php echo e(__('Compare')); ?></span>
                                <?php if(Session::has('compare')): ?>
                                    <span class="badge" id="compare_items_sidenav"><?php echo e(count(Session::get('compare'))); ?></span>
                                <?php else: ?>
                                    <span class="badge" id="compare_items_sidenav">0</span>
                                <?php endif; ?>
                            </a>
                        </li>
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
                        <li>
                            <a href="<?php echo e(route('wishlists.index')); ?>">
                                <i class="la la-heart-o"></i>
                                <span><?php echo e(__('Wishlist')); ?></span>
                            </a>
                        </li>

                        <?php if(\App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1): ?>
                            <li>
                                <a href="<?php echo e(route('wallet.index')); ?>">
                                    <i class="la la-dollar"></i>
                                    <span><?php echo e(__('My Wallet')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li>
                            <a href="<?php echo e(route('profile')); ?>">
                                <i class="la la-user"></i>
                                <span><?php echo e(__('Manage Profile')); ?></span>
                            </a>
                        </li>

                    </ul>
                    <?php if(Auth::check() && Auth::user()->user_type == 'seller'): ?>
                        <div class="sidebar-widget-title py-0">
                            <span><?php echo e(__('Shop Options')); ?></span>
                        </div>
                        <ul class="side-seller-menu">
                            <li>
                                <a href="<?php echo e(route('seller.products')); ?>">
                                    <i class="la la-diamond"></i>
                                    <span><?php echo e(__('Products')); ?></span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('orders.index')); ?>">
                                    <i class="la la-file-text"></i>
                                    <span><?php echo e(__('Orders')); ?></span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('shops.index')); ?>">
                                    <i class="la la-cog"></i>
                                    <span><?php echo e(__('Shop Setting')); ?></span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('payments.index')); ?>">
                                    <i class="la la-cc-mastercard"></i>
                                    <span><?php echo e(__('Payment History')); ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="sidebar-widget-title py-0">
                            <span><?php echo e(__('Earnings')); ?></span>
                        </div>
                        <div class="widget-balance py-3">
                            <div class="text-center">
                                <div class="heading-4 strong-700 mb-4">
                                    <?php
                                        $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->where('created_at', '>=', date('-30d'))->get();
                                        $total = 0;
                                        foreach ($orderDetails as $key => $orderDetail) {
                                            if($orderDetail->order->payment_status == 'paid'){
                                                $total += $orderDetail->price;
                                            }
                                        }
                                    ?>
                                    <small class="d-block text-sm alpha-5 mb-2"><?php echo e(__('Your earnings (current month)')); ?></small>
                                    <span class="p-2 bg-base-1 rounded"><?php echo e(single_price($total)); ?></span>
                                </div>
                                <table class="text-left mb-0 table w-75 m-auto">
                                    <tbody>
                                        <tr>
                                            <?php
                                                $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->get();
                                                $total = 0;
                                                foreach ($orderDetails as $key => $orderDetail) {
                                                    if($orderDetail->order->payment_status == 'paid'){
                                                        $total += $orderDetail->price;
                                                    }
                                                }
                                            ?>
                                            <td class="p-1 text-sm">
                                                <?php echo e(__('Total earnings')); ?>:
                                            </td>
                                            <td class="p-1">
                                                <?php echo e(single_price($total)); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <?php
                                                $orderDetails = \App\OrderDetail::where('seller_id', Auth::user()->id)->where('created_at', '>=', date('-60d'))->where('created_at', '<=', date('-30d'))->get();
                                                $total = 0;
                                                foreach ($orderDetails as $key => $orderDetail) {
                                                    if($orderDetail->order->payment_status == 'paid'){
                                                        $total += $orderDetail->price;
                                                    }
                                                }
                                            ?>
                                            <td class="p-1 text-sm">
                                                <?php echo e(__('Last Month earnings')); ?>:
                                            </td>
                                            <td class="p-1">
                                                <?php echo e(single_price($total)); ?>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="sidebar-widget-title py-0">
                        <span>Categories</span>
                    </div>
                    <ul class="side-seller-menu">
                        <?php $__currentLoopData = \App\Category::where('featured',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                            <a href="<?php echo e(route('products.category', $category->id)); ?>" class="text-truncate">
                                <img class="cat-image" src="<?php echo e(asset($category->icon)); ?>" width="13">
                                <span><?php echo e(__($category->name)); ?></span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile menu -->

    <div class="position-relative logo-bar-area pt-3">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-1 col-xs-1 col-1">
                    <div class="d-flex">
                        <div class="d-block d-lg-none mobile-menu-icon-box">
                            <!-- Navbar toggler  -->
                            <a href="" onclick="sideMenuOpen(this)">
                                <div class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>

                        <!-- Brand/Logo -->
                        <a class="navbar-brand w-100 d-xs-none d-sm-none" href="<?php echo e(route('home')); ?>">
                            <?php
                                $generalsetting = \App\GeneralSetting::first();
                            ?>
                            <?php if($generalsetting->logo != null): ?>
                                <img src="<?php echo e(asset($generalsetting->logo)); ?>" class="" alt="active shop">
                            <?php else: ?>
                                <img src="<?php echo e(asset('frontend/images/logo/logo.png')); ?>" class="" alt="active shop">
                            <?php endif; ?>
                        </a>

                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-11 col-xs-11 col-11 position-static">
                    <div class="d-flex w-100">
                        <div class="search-box flex-grow-1 px-4 d-xs-none">
                            <form action="<?php echo e(route('search')); ?>" method="GET">
                                <div class="d-flex position-relative">
                                    <div class="d-lg-none search-box-back d-xs-none">
                                        <button class="" type="button"><i class="la la-long-arrow-left"></i></button>
                                    </div>
                                    <div class="w-100 d-xs-none">
                                        <input type="text" aria-label="Search" id="search" name="q" class="w-100" placeholder="Tìm kiếm sản phẩm..." autocomplete="off">
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
                                                ><?php echo e(__($category->name)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <button class="d-none d-lg-block" type="submit">
                                        <i class="la la-search la-flip-horizontal"></i>
                                    </button>
                                    <div class="typed-search-box d-none">
                                        <div class="search-preloader">
                                            <div class="loader">
                                           
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

                        <div class="logo-bar-icons d-inline-block">
                            <div class="d-inline-block d-lg-none">
                                <div class="nav-search-box">

                                    <a href="#" class="nav-box-link">
                                        <input type="text" aria-label="Search" id="search" name="q" class="searchbox p-1" placeholder="Tìm kiếm sản phẩm..." autocomplete="off">
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
                                                ><?php echo e(__($category->name)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <button class="d-none d-lg-block" type="submit">
                                        <i class="la la-search la-flip-horizontal"></i>
                                    </button>
                                    <div class="typed-search-box d-none">
                                        <div class="search-preloader">
                                            <div class="loader">
                                           
                                            </div>
                                        </div>
                                        <div class="search-nothing d-none">

                                        </div>
                                        <div id="search-content">

                                        </div>
                                    </div>
                            </form>
                                        <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <div class="nav-compare-box" id="compare">
                                    <a href="<?php echo e(route('compare')); ?>" class="nav-box-link">
                                        <i class="la la-refresh d-inline-block nav-box-icon"></i>
                                        <span class="nav-box-text d-none d-xl-inline-block"><?php echo e(__('Compare')); ?></span>
                                        <?php if(Session::has('compare')): ?>
                                            <span class="nav-box-number"><?php echo e(count(Session::get('compare'))); ?></span>
                                        <?php else: ?>
                                            <span class="nav-box-number">0</span>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <div class="nav-wishlist-box" id="wishlist">
                                    <a href="<?php echo e(route('wishlists.index')); ?>" class="nav-box-link">
                                        <i class="la la-heart-o d-inline-block nav-box-icon"></i>
                                        <span class="nav-box-text d-none d-xl-inline-block"><?php echo e(__('Wishlist')); ?></span>
                                        <?php if(Auth::check()): ?>
                                            <span class="nav-box-number"><?php echo e(count(Auth::user()->wishlists)); ?></span>
                                        <?php else: ?>
                                            <span class="nav-box-number">0</span>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="d-inline-block" data-hover="dropdown">
                                <div class="nav-cart-box dropdown" id="cart_items">
                                    <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                                                <img src="<?php echo e(asset($product->thumbnail_img)); ?>" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="dc-content">
                                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                <a href="<?php echo e(route('product', $product->slug)); ?>">
                                                                                    <?php echo e(__($product->name)); ?>

                                                                                </a>
                                                                            </span>

                                                                            <span class="dc-quantity">x<?php echo e($cartItem['quantity']); ?></span>
                                                                            <span class="dc-price"><?php echo e(single_price($cartItem['price']*$cartItem['quantity'])); ?></span>
                                                                        </div>
                                                                        <div class="dc-actions">
                                                                            <button onclick="removeFromCart(<?php echo e($key); ?>)">
                                                                                <i class="la la-close"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <div class="dc-item py-3">
                                                            <span class="subtotal-text"><?php echo e(__('Subtotal')); ?></span>
                                                            <span class="subtotal-amount"><?php echo e(single_price($total)); ?></span>
                                                        </div>
                                                        <div class="py-2 text-center dc-btn">
                                                            <ul class="inline-links inline-links--style-3">
                                                                <li class="pr-3">
                                                                    <a href="<?php echo e(route('cart')); ?>" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1">
                                                                        <i class="la la-shopping-cart"></i> <?php echo e(__('View cart')); ?>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo e(route('checkout.shipping_info')); ?>" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
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
                    <div class="main-nav-area d-none d-lg-block">
                        <nav class="navbar navbar-expand-lg navbar--bold navbar--style-2 navbar-light bg-default">
                            <div class="container">
                                <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbar_main">
                                    <!-- Navbar links -->
                                    <ul class="navbar-nav">
                                        <?php $__currentLoopData = \App\Search::orderBy('count', 'desc')->get()->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo e(route('suggestion.search', $search->query)); ?>"><?php echo e($search->query); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        

<?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/frontend/inc/navseach.blade.php ENDPATH**/ ?>