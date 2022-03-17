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

                        
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions))): ?>
                            <li class="<?php echo e(areActiveRoutes(['albums', 'album.create','album.edit'])); ?>">
                                <a class="nav-link" href="<?php echo e(route('albums')); ?>">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">Album trường</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->user_type == 'admin'): ?>
                            <li class="">
                                <a class="nav-link" href="<?php echo e(route('photos.create')); ?>">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">Ảnh album</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <!-- Post Menu -->
                        
                    <!-- Product Menu -->
                        
                    <!-- Hoa hồng  -->
                        

                        


                            

                          

                            

                            

                         


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
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title"><?php echo e(__('Frontend Settings')); ?></span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(areActiveRoutes(['home_settings.index', 'home_banners.index', 'sliders.index', 'home_categories.index', 'home_banners.create', 'home_categories.create', 'home_categories.edit', 'sliders.create'])); ?>">
                                    <a class="nav-link" href="<?php echo e(route('home_settings.index')); ?>"><?php echo e(__('Home')); ?></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-title"><?php echo e(__('Policy Pages')); ?></span>
                                        <i class="arrow"></i>
                                    </a>
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
<?php /**PATH D:\xampp73\htdocs\bactaynguyen\resources\views/inc/admin_sidenav.blade.php ENDPATH**/ ?>