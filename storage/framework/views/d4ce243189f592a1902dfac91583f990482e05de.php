<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                 <div id="mainnav-profile" class="mainnav-profile">
                    <div class="profile-wrap text-center">
                        <div class="pad-btm">
                            <img class="img-circle img-md" src="<?php echo e(asset('img/profile-photos/1.png')); ?>" alt="Profile Picture">
                        </div>
                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                            <span class="pull-right dropdown-toggle">
                                <i class="dropdown-caret"></i>
                            </span>
                            <p class="mnp-name"><?php echo e(Auth::user()->name); ?></p>
                            <span class="mnp-desc"><?php echo e(Auth::user()->email); ?></span>
                        </a>
                    </div>
                    <div id="profile-nav" class="collapse list-group bg-trans">
                        <a href="#" class="list-group-item">
                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                        </a>
                    </div>
                </div>


                <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                        <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                    

                    <!--Menu list item-->
                        <li class="<?php echo e(areActiveRoutes(['admin.dashboard'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fa fa-home"></i>
                                <span class="menu-title"><?php echo e(__('Dashboard')); ?></span>
                            </a>
                        </li>
                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link" href="<?php echo e(route('laravel-show')); ?>">
                                    <i class="fa fa-camera-retro" aria-hidden="true"></i> Quản lý File</a>
                            </li>
                        <?php endif; ?>
                    <!-- Pages Menu -->
                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li class="<?php echo e(areActiveRoutes(['pages', 'page.create','page.edit'])); ?>">
                                <a class="nav-link" href="<?php echo e(route('pages')); ?>">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title"><?php echo e(__('Trang cá nhân')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <!-- Post Menu -->
                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li class="<?php echo e(areActiveRoutes(['posts', 'posts.create','posts.edit'])); ?>">
                                <a class="nav-link" href="<?php echo e(route('postcategory')); ?>">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">Tin tức</span>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['posts', 'posts.create','posts.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('postcategory')); ?>">
                                            <i class="fa fa-bolt"></i>
                                            <span class="menu-title">Danh mục bài viết</span>
                                        </a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['posts', 'posts.create','posts.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('posts')); ?>">
                                            <i class="fa fa-bolt"></i>
                                            <span class="menu-title">Quản lý bài viết</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <!-- Post Menu -->
                        
                    <!-- Product Menu -->
                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title"><?php echo e(__('Products')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    
                                    <li class="<?php echo e(areActiveRoutes(['categories.index', 'categories.create', 'categories.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Danh mục</a>
                                    </li>
                                    
                                    
                                    <li class="<?php echo e(areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('products.admin')); ?>">Sản phẩm tự đăng</a>
                                    </li>







                                    <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
                                        <li class="<?php echo e(areActiveRoutes(['products.seller', 'products.seller.edit'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('products.seller')); ?>">Sản phẩm của khách hàng</a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php echo e(areActiveRoutes(['reviews.index'])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('reviews.index')); ?>">Đánh giá của khách</a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <!-- Hoa hồng  -->
                        

                        


                            

                          


                            <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title"><?php echo e(__('Sellers')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['sellers.index', 'sellers.create', 'sellers.edit'])); ?>">
                                    <?php
                                        $sellers = \App\Seller::where('verification_status', 0)->where('verification_info', '!=', null)->count();
                                    ?>
                                    <a class="nav-link" href="<?php echo e(route('sellers.index')); ?>"><?php echo e(__('Seller list')); ?> <?php if($sellers > 0): ?><span class="pull-right badge badge-info"><?php echo e($sellers); ?></span> <?php endif; ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['seller_verification_form.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('seller_verification_form.index')); ?>"><?php echo e(__('Seller verification form')); ?></a>
                                </li>
                                
                            </ul>
                        </li>
                        <?php endif; ?>

                            

                         


                            <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span class="menu-title"><?php echo e(__('Messaging')); ?></span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="<?php echo e(areActiveRoutes(['newsletters.index'])); ?>">
                                        <a class="nav-link"
                                           href="<?php echo e(route('newsletters.index')); ?>"><?php echo e(__('Newsletters')); ?></a>
                                    </li>
                                    <li class="<?php echo e(areActiveRoutes(['contacts.index'])); ?>">
                                        <a class="nav-link"
                                           href="<?php echo e(route('contacts.index')); ?>"><?php echo e(__('Khách liên hệ')); ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <!-- Widget Menu -->

                            <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>
                            <li class="<?php echo e(areActiveRoutes(['widgets', 'widget.create','widget.edit'])); ?>">
                                <a class="nav-link" href="<?php echo e(route('widgets')); ?>">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title"><?php echo e(__('Widget')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>

                        <li>
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title"><?php echo e(__('Business Settings')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['activation.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('activation.index')); ?>"><?php echo e(__('Activation')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['payment_method.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('payment_method.index')); ?>"><?php echo e(__('Payment method')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['smtp_settings.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('smtp_settings.index')); ?>"><?php echo e(__('SMTP Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['google_analytics.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('google_analytics.index')); ?>"><?php echo e(__('Google Analytics')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['facebook_chat.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('facebook_chat.index')); ?>"><?php echo e(__('Facebook Chat')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['social_login.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('social_login.index')); ?>"><?php echo e(__('Social Media Login')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['currency.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('currency.index')); ?>"><?php echo e(__('Currency')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['languages.index', 'languages.create', 'languages.store', 'languages.show', 'languages.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('languages.index')); ?>"><?php echo e(__('Languages')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>

                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title"><?php echo e(__('Frontend Settings')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['home_settings.index', 'home_banners.index', 'sliders.index', 'home_categories.index', 'home_banners.create', 'home_categories.create', 'home_categories.edit', 'sliders.create'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('home_settings.index')); ?>"><?php echo e(__('Home')); ?></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-title"><?php echo e(__('Policy Pages')); ?></span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">

                                        <li class="<?php echo e(areActiveRoutes(['sellerpolicy.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('sellerpolicy.index', 'seller_policy')); ?>"><?php echo e(__('Seller Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['returnpolicy.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('returnpolicy.index', 'return_policy')); ?>"><?php echo e(__('Return Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['supportpolicy.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('supportpolicy.index', 'support_policy')); ?>"><?php echo e(__('Support Policy')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['terms.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('terms.index', 'terms')); ?>"><?php echo e(__('Terms & Conditions')); ?></a>
                                        </li>
                                        <li class="<?php echo e(areActiveRoutes(['privacypolicy.index'])); ?>">
                                            <a class="nav-link" href="<?php echo e(route('privacypolicy.index', 'privacy_policy')); ?>"><?php echo e(__('Privacy Policy')); ?></a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="<?php echo e(areActiveRoutes(['links.index', 'links.create', 'links.edit'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('links.index')); ?>"><?php echo e(__('Useful Link')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.index'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.index')); ?>"><?php echo e(__('General Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.logo'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.logo')); ?>"><?php echo e(__('Logo Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(areActiveRoutes(['generalsettings.color'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('generalsettings.color')); ?>"><?php echo e(__('Color Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>

                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title"><?php echo e(__('E-commerce Setup')); ?></span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li>
                                    <li class="<?php echo e(areActiveRoutes(['coupon.index','coupon.create','coupon.edit',])); ?>">
                                        <a class="nav-link" href="<?php echo e(route('coupon.index')); ?>"><?php echo e(__('Coupon')); ?></a>
                                    </li>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>

                            <?php
                                $support_ticket = DB::table('tickets')
                                            ->where('viewed', 0)
                                            ->select('id')
                                            ->count();
                            ?>
                        <li class="<?php echo e(areActiveRoutes(['support_ticket.admin_index'])); ?>">
                            <a class="nav-link" href="<?php echo e(route('support_ticket.admin_index')); ?>">
                                <i class="fa fa-support"></i>
                                <span class="menu-title"><?php echo e(__('Suppot Ticket')); ?> <?php if($support_ticket > 0): ?><span class="pull-right badge badge-info"><?php echo e($support_ticket); ?></span><?php endif; ?></span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff'): ?>

                            <li class="<?php echo e(areActiveRoutes(['seosetting.index'])); ?>">
                                <a class="nav-link" href="<?php echo e(route('seosetting.index')); ?>">
                                    <i class="fa fa-search"></i>
                                    <span class="menu-title"><?php echo e(__('SEO Setting')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>

                        
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/inc/admin_sidenav.blade.php ENDPATH**/ ?>