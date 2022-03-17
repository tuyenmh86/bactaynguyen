<div class="header bg-white">
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

                        <?php $__currentLoopData = \App\Category::where('top',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                        <a href="<?php echo e($category->link()); ?>" class="text-truncate">
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

    <div class="position-relative logo-bar-area pt-3 pb-3">
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
                        <a class="navbar-brand w-100 d-xs-none" href="<?php echo e(route('home')); ?>">
                            <?php
                                $generalsetting = \App\GeneralSetting::first();
                            ?>
                            <?php if($generalsetting->logo != null): ?>
                                <img src="<?php echo e(asset($generalsetting->logo)); ?>" class="" alt="<?php echo e($generalsetting->site_name); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('frontend/images/logo/logo.png')); ?>" class="" alt="active shop">
                            <?php endif; ?>
                        </a>

                        
                    </div>
                </div>
               
            </div>
            
            
        </div>
        
    </div>
    <div class="row no-gutters align-items-center nav-main-2">
        
        <div class="main-nav-area-2 d-none d-lg-block p-2">
            <nav class="navbar navbar-expand-lg navbar--bold navbar--style-2 navbar-light bg-default">
                <div class="container">
                    <div class="d-block mobile-menu-icon-box">
                        <!-- Navbar toggler  -->
                        <a class="nav-link" href="" onclick="sideMenuOpen(this)">
                            <div class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar_main">
                        <!-- Navbar links -->
                        
                        <ul class="navbar-nav">
                            <?php $__currentLoopData = \App\Category::where('top',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo e($category->link()); ?>"><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/inc/navseach.blade.php ENDPATH**/ ?>