<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            <div class="image" style="background-image:url('<?php echo e(asset(Auth::user()->avatar_original)); ?>')"></div>
            <?php if(Auth::user()->seller->verification_status == 1): ?>
                <div class="name mb-0"><?php echo e(Auth::user()->name); ?> <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span></div>
            <?php else: ?>
                <div class="name mb-0"><?php echo e(Auth::user()->name); ?> <span class="ml-2"><i class="fa fa-times-circle" style="color:red"></i></span></div>
            <?php endif; ?>
        </div>
        <div class="sidebar-widget-title py-3">
            <span><?php echo e(__('Menu')); ?></span>
        </div>
        <div class="widget-profile-menu py-3">
            <ul class="categories categories--style-3">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(areActiveRoutesHome(['dashboard'])); ?>">
                        <i class="la la-dashboard"></i>
                        <span class="category-name">
                            <?php echo e(__('Dashboard')); ?>

                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo e(route('wishlists.index')); ?>" class="<?php echo e(areActiveRoutesHome(['wishlists.index'])); ?>">
                        <i class="la la-heart-o"></i>
                        <span class="category-name">
                            <?php echo e(__('Wishlist')); ?>

                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('seller.products')); ?>" class="<?php echo e(areActiveRoutesHome(['seller.products', 'seller.products.upload', 'seller.products.edit'])); ?>">
                        <i class="la la-diamond"></i>
                        <span class="category-name">
                            <?php echo e(__('Products')); ?>

                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo e(route('reviews.seller')); ?>" class="<?php echo e(areActiveRoutesHome(['reviews.seller'])); ?>">
                        <i class="la la-star-o"></i>
                        <span class="category-name">
                            <?php echo e(__('Product Reviews')); ?>

                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('shops.index')); ?>" class="<?php echo e(areActiveRoutesHome(['shops.index'])); ?>">
                        <i class="la la-cog"></i>
                        <span class="category-name">
                            <?php echo e(__('Shop Setting')); ?>

                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo e(route('profile')); ?>" class="<?php echo e(areActiveRoutesHome(['profile'])); ?>">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            <?php echo e(__('Manage Profile')); ?>

                        </span>
                    </a>
                </li>
                <?php if(\App\BusinessSetting::where('type', 'wallet_system')->first()->value == 1): ?>
                    <li>
                        <a href="<?php echo e(route('wallet.index')); ?>" class="<?php echo e(areActiveRoutesHome(['wallet.index'])); ?>">
                            <i class="la la-dollar"></i>
                            <span class="category-name">
                                <?php echo e(__('My Wallet')); ?>

                            </span>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(route('support_ticket.index')); ?>" class="<?php echo e(areActiveRoutesHome(['support_ticket.index'])); ?>">
                        <i class="la la-support"></i>
                        <span class="category-name">
                            Yêu cầu hỗ trợ
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        
    </div>
</div>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/inc/seller_side_nav.blade.php ENDPATH**/ ?>