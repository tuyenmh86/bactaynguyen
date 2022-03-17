<?php
    $seosetting = \App\SeoSetting::first();
    $sitesetting = \App\GeneralSetting::first();
?>
<!DOCTYPE html>

        <html>
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
            <title><?php echo e($sitesetting->site_name); ?></title>
            <meta name="keywords" content="<?php echo e($seosetting->keyword); ?>">
            <meta name="description" content="<?php echo e($seosetting->description); ?>">
            <meta name="geo.region" content="VN">
            <meta name="geo.placename" content="Gia lai (Gia Lai)">
            <meta name="geo.position" content="21.027437;105.774425">
            <meta name="ICBM" content="21.027437, 105.774425">
            <meta name="DC.title" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.identifier" content="<?php echo e($sitesetting->site_address); ?>">
            <meta name="DC.description" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.subject" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.language" scheme="ISO639-1" content="vi-VN">
            <meta name="DC.date" content="2014-07-07">
            <meta http-equiv="expires" content="0">
            <meta name="resource-type" content="document">
            <meta name="distribution" content="global">
            <meta http-equiv="Refresh" content="3600">
            <meta name="robots" content="index, follow">
            <meta name="revisit-after" content="1 days">
            <meta name="rating" content="general">
            <meta name="copyright" content="toanphat">
            <meta itemprop="name" content="<?php echo e($seosetting->description); ?>">
            <meta itemprop="inlanguage" content="vi-VN">
            <meta itemprop="description" content="<?php echo e($seosetting->description); ?>">
            <link rel="canonical" href="index.html">
            <meta name="geo.position" content="21;105">
            <meta name="geo.region" content="">
            <meta name="geo.country" content="VIET NAM">
            <meta name="ICBM" content="15;107">

            <meta name="description" content="<?php echo $__env->yieldContent('meta_description', $seosetting->description); ?>" />
            <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', $seosetting->keyword); ?>">
            <meta name="author" content="<?php echo e($seosetting->author); ?>">
            <meta name="sitemap_link" content="<?php echo e($seosetting->sitemap_link); ?>">
            <?php echo $__env->yieldContent('meta'); ?>

            <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/open-iconic-bootstrap.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
            
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
        
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/aos.css')); ?>">
        
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/ionicons.min.css')); ?>">
            
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flaticon.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/icomoon.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">

        <!-- Favicon -->
            <link name="favicon" type="image/x-icon" href="<?php echo e(asset(\App\GeneralSetting::first()->favicon)); ?>" rel="shortcut icon" />

            <title><?php echo $__env->yieldContent('meta_title', config('app.name', env('APP_NAME'))); ?></title>

            <!-- Bootstrap -->

        <!-- Facebook Chat style -->
            <?php if(\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1): ?>
                <link href="<?php echo e(asset('frontend/css/fb-style.css')); ?>" rel="stylesheet">
            <?php endif; ?>
          
            <!-- jQuery -->
            <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(asset('frontend/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
            <?php echo $__env->yieldContent('style'); ?>
            <?php if(\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1): ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(env('TRACKING_ID')); ?>"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', <?php env('TRACKING_ID') ?>);
                </script>
            <?php endif; ?>


        </head>
        <body>


        <!-- MAIN WRAPPER -->
        
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
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav justify-content-end">
                                <?php $__currentLoopData = \App\Category::where('featured',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e($category->link()); ?>" class="text-truncate">
                                        <span><?php echo e(__($category->name)); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = \App\CategoriesPost::where('headmenu',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e($news->link()); ?>" class="text-truncate">
                                        <span><?php echo e(__($news->name)); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if(auth()->guard()->check()): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('profile')); ?>">
                                        Xin chào: <?php echo e(Auth::user()->name); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                                            Đăng sản phẩm
                                        </a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo e(__('Sign Out')); ?></a>
                                    </li>                     
                                <?php else: ?>
                                    <li class="nav-item"><a class="nav-link  " href="<?php echo e(route('user.login')); ?>" title="Đăng nhập">Đăng nhập để đăng tin</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                    </div>
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
                
                                        <?php $__currentLoopData = \App\Category::where('featured',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    
                </div>
            </div>
        </section> --}}
           
           

            <?php echo $__env->yieldContent('content'); ?>

            

            
            

            <?php if(\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1): ?>
                <div id="fb-root"></div>
                <!-- Your customer chat code -->
                <div class="fb-customerchat"
                     attribution=setup_tool
                     page_id="<?php echo e(env('FACEBOOK_PAGE_ID')); ?>">
                </div>
            <?php endif; ?>

        </div><!-- END: body-wrap -->

        <!-- SCRIPTS -->
        <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.easing.1.3.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.stellar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/aos.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.animateNumber.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/scrollax.min.js')); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="<?php echo e(asset('frontend/js/google-map.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
          

        

        

        <script type="text/javascript">
            function showFrontendAlert(type, message){
                swal({
                    position: 'top-end',
                    type: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        </script>

        <?php $__currentLoopData = session('flash_notification', collect())->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script type="text/javascript">
                showFrontendAlert('<?php echo e($message['level']); ?>', '<?php echo e($message['message']); ?>');
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <script>
            $(document).ready(function() {
                if ($('#lang-change').length > 0) {
                    $('#lang-change .dropdown-item a').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var locale = $this.data('flag');
                            $.post('<?php echo e(route('language.change')); ?>',{_token:'<?php echo e(csrf_token()); ?>', locale:locale}, function(data){
                                location.reload();
                            });

                        });
                    });
                }

                if ($('#currency-change').length > 0) {
                    $('#currency-change .dropdown-item a').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var currency_code = $this.data('currency');
                            $.post('<?php echo e(route('currency.change')); ?>',{_token:'<?php echo e(csrf_token()); ?>', currency_code:currency_code}, function(data){
                                location.reload();
                            });

                        });
                    });
                }
            });

            $('#search').on('keyup', function(){
                search();
            });

            $('#search').on('focus', function(){
                search();
            });

            function search(){
                var search = $('#search').val();
                if(search.length > 0){
                    $('body').addClass("typed-search-box-shown");

                    $('.typed-search-box').removeClass('d-none');
                    $('.search-preloader').removeClass('d-none');
                    $.post('<?php echo e(route('search.ajax')); ?>', { _token: '<?php echo e(@csrf_token()); ?>', search:search}, function(data){
                        if(data == '0'){
                            // $('.typed-search-box').addClass('d-none');
                            $('#search-content').html(null);
                            $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+search+'"</strong>');
                            $('.search-preloader').addClass('d-none');

                        }
                        else{
                            $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                            $('#search-content').html(data);
                            $('.search-preloader').addClass('d-none');
                        }
                    });
                }
                else {
                    $('.typed-search-box').addClass('d-none');
                    $('body').removeClass("typed-search-box-shown");
                }
            }

                    function updateNavCart(){
                        $.post('<?php echo e(route('cart.nav_cart')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                            $('#cart_items').html(data);
                        });
                    }

            function removeFromCart(key){
                $.post('<?php echo e(route('cart.removeFromCart')); ?>', {_token:'<?php echo e(csrf_token()); ?>', key:key}, function(data){
                    updateNavCart();
                    $('#cart-summary').html(data);
                    showFrontendAlert('success', 'Item has been removed from cart');
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
                });
            }

            function addToCompare(id){
                $.post('<?php echo e(route('compare.addToCompare')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:id}, function(data){
                    $('#compare').html(data);
                    showFrontendAlert('success', 'Item has been added to compare list');
                    $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
                });
            }

            function addToWishList(id){
                <?php if(Auth::check()): ?>
                $.post('<?php echo e(route('wishlists.store')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    }
                    else{
                        showFrontendAlert('warning', 'Please login first');
                    }
                });
                <?php else: ?>
                showFrontendAlert('warning', 'Please login first');
                <?php endif; ?>
            }

            function showAddToCartModal(id){
                if(!$('#modal-size').hasClass('modal-lg')){
                    $('#modal-size').addClass('modal-lg');
                }
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.post('<?php echo e(route('cart.showCartModal')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:id}, function(data){
                    $('.c-preloader').hide();
                    $('#addToCart-modal-body').html(data);
                    $('.xzoom, .xzoom-gallery').xzoom({
                        Xoffset: 20,
                        bg: true,
                        tint: '#000',
                        defaultScale: 0
                    });
                });
            }

            function showVideoModal(id){
                if(!$('#modal-size').hasClass('modal-lg')){
                    $('#modal-size').addClass('modal-lg');
                }
                // $('#addToCart-modal-body').html(null);
                // $('#addToCart').modal();
                // $('.c-preloader').show();
                $.post('<?php echo e(route('lesson.getVideoUrl')); ?>', {_token: '<?php echo e(csrf_token()); ?>', id: id}, function (data) {
                    // $('.c-preloader').hide();
                    // $('#addToCart-modal-body').html(data);
                    // $('#lesson_video_url').attr('src',data);

                    $('#lesson_video_content').html('<video width="100%" controls controlsList="nodownload" autoplay>' +
                            '<source src="'+data+ '" >'+
                        '</video>');

                    // window.location.href = data;
                    // window.open(data);
                });
                
                
                
                
                
                
                
                
            }
            $('#option-choice-form input').on('change', function(){
                getVariantPrice();
            });

            function getVariantPrice(){
                if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                    $.ajax({
                        type:"POST",
                        url: '<?php echo e(route('products.variant_price')); ?>',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data){
                            $('#option-choice-form #chosen_price_div').removeClass('d-none');
                            $('#option-choice-form #chosen_price_div #chosen_price').html(data);
                        }
                    });
                }
            }

            function checkAddToCartValidity(){
                var names = {};
                $('#option-choice-form input:radio').each(function() { // find unique names
                    names[$(this).attr('name')] = true;
                });
                var count = 0;
                $.each(names, function() { // then count them
                    count++;
                });
                if($('input:radio:checked').length == count){
                    return true;
                }
                return false;
            }

            function addToCart(){
                if(checkAddToCartValidity()) {
                    $('#addToCart').modal();
                    $('.c-preloader').show();
                    $.ajax({
                        type:"POST",
                        url: '<?php echo e(route('cart.addToCart')); ?>',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data){
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data);
                            updateNavCart();
                            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                        }
                    });
                }
                else{
                    showFrontendAlert('warning', 'Please choose all the options');
                }
            }

            function buyNow(){
                if(checkAddToCartValidity()) {
                    $('#addToCart').modal();
                    $('.c-preloader').show();
                    $.ajax({
                        type:"POST",
                        url: '<?php echo e(route('cart.addToCart')); ?>',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data){
                            //$('#addToCart-modal-body').html(null);
                            //$('.c-preloader').hide();
                            //$('#modal-size').removeClass('modal-lg');
                            //$('#addToCart-modal-body').html(data);
                            updateNavCart();
                            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                            window.location.replace("<?php echo e(route('checkout.shipping_info')); ?>");
                        }
                    });
                }
                else{
                    showFrontendAlert('warning', 'Please choose all the options');
                }
            }

            function show_purchase_history_details(order_id)
            {
                $('#order-details-modal-body').html(null);

                if(!$('#modal-size').hasClass('modal-lg')){
                    $('#modal-size').addClass('modal-lg');
                }

                $.post('<?php echo e(route('purchase_history.details')); ?>', { _token : '<?php echo e(@csrf_token()); ?>', order_id : order_id}, function(data){
                    $('#order-details-modal-body').html(data);
                    $('#order_details').modal();
                    $('.c-preloader').hide();
                });
            }

            function show_order_details(order_id)
            {
                $('#order-details-modal-body').html(null);

                if(!$('#modal-size').hasClass('modal-lg')){
                    $('#modal-size').addClass('modal-lg');
                }

                $.post('<?php echo e(route('orders.details')); ?>', { _token : '<?php echo e(@csrf_token()); ?>', order_id : order_id}, function(data){
                    $('#order-details-modal-body').html(data);
                    $('#order_details').modal();
                    $('.c-preloader').hide();
                });
            }

            function cartQuantityInitialize(){
                $('.btn-number').click(function(e) {
                    e.preventDefault();

                    fieldName = $(this).attr('data-field');
                    type = $(this).attr('data-type');
                    var input = $("input[name='" + fieldName + "']");
                    var currentVal = parseInt(input.val());

                    if (!isNaN(currentVal)) {
                        if (type == 'minus') {

                            if (currentVal > input.attr('min')) {
                                input.val(currentVal - 1).change();
                            }
                            if (parseInt(input.val()) == input.attr('min')) {
                                $(this).attr('disabled', true);
                            }

                        } else if (type == 'plus') {

                            if (currentVal < input.attr('max')) {
                                input.val(currentVal + 1).change();
                            }
                            if (parseInt(input.val()) == input.attr('max')) {
                                $(this).attr('disabled', true);
                            }

                        }
                    } else {
                        input.val(0);
                    }
                });

                $('.input-number').focusin(function() {
                    $(this).data('oldValue', $(this).val());
                });

                $('.input-number').change(function() {

                    minValue = parseInt($(this).attr('min'));
                    maxValue = parseInt($(this).attr('max'));
                    valueCurrent = parseInt($(this).val());

                    name = $(this).attr('name');
                    if (valueCurrent >= minValue) {
                        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                    } else {
                        alert('Sorry, the minimum value was reached');
                        $(this).val($(this).data('oldValue'));
                    }
                    if (valueCurrent <= maxValue) {
                        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                    } else {
                        alert('Sorry, the maximum value was reached');
                        $(this).val($(this).data('oldValue'));
                    }


                });
                $(".input-number").keydown(function(e) {
                    // Allow: backspace, delete, tab, escape, enter and .
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                        // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right
                        (e.keyCode >= 35 && e.keyCode <= 39)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
            }

            function imageInputInitialize(){
                $('.custom-input-file').each(function() {
                    var $input = $(this),
                        $label = $input.next('label'),
                        labelVal = $label.html();

                    $input.on('change', function(e) {
                        var fileName = '';

                        if (this.files && this.files.length > 1)
                            fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                        else if (e.target.value)
                            fileName = e.target.value.split('\\').pop();

                        if (fileName)
                            $label.find('span').html(fileName);
                        else
                            $label.html(labelVal);
                    });

                    // Firefox bug fix
                    $input
                        .on('focus', function() {
                            $input.addClass('has-focus');
                        })
                        .on('blur', function() {
                            $input.removeClass('has-focus');
                        });
                });
            }

        </script>

        <script src="<?php echo e(asset('frontend/js/bootstrap-tagsinput.min.js')); ?>"></script>

        <script src="<?php echo e(asset('frontend/js/modernizr.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/xzoom.min.js')); ?>"></script>

        <!-- App JS -->
        <script src="<?php echo e(asset('frontend/js/active-shop.js')); ?>"></script>
            <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
        <?php if(\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1): ?>
        <script src="<?php echo e(asset('frontend/js/fb-script.js')); ?>"></script>
        <?php endif; ?>
        <?php echo $__env->yieldContent('script'); ?>

        </body>
        </html>
<?php /**PATH D:\xampp72\htdocs\hoahong\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>