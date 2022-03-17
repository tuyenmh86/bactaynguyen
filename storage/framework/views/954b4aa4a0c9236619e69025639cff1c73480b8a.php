<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            <div class="image" style="background-image:url('<?php echo e(asset(Auth::user()->avatar_original)); ?>')"></div>
            <div class="name"><?php echo e(Auth::user()->name); ?></div>
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
                           Bảng điều khiển
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('products.userId',Auth::user()->id)); ?>" class="<?php echo e(areActiveRoutesHome(['products.userId'])); ?>">
                        <i class="la la-file-text"></i>
                        <span class="category-name">
                            Khóa học của tôi
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('aff.link',Auth::user()->id)); ?>" class="<?php echo e(areActiveRoutesHome(['aff.link'])); ?>">
                        <i class="la la-file-text"></i>
                        <span class="category-name">
                            Tham gia bán hàng cùng chúng tôi
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
                <li>
                    <a href="<?php echo e(route('commission.custommer',Auth::user()->id)); ?>" class="<?php echo e(areActiveRoutesHome(['commission.custommer'])); ?>">
                        <i class="la la-user"></i>
                        <span class="category-name">
                            Hoa hồng giới thiệu
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
        <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
            <div class="widget-seller-btn pt-4">
                <a href="<?php echo e(route('shops.create')); ?>" class="btn btn-anim-primary w-100"><?php echo e(__('Be A Seller')); ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/inc/customer_side_nav.blade.php ENDPATH**/ ?>