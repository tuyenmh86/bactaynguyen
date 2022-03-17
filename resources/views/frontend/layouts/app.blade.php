@php
    $seosetting = \App\SeoSetting::first();
    $sitesetting = \App\GeneralSetting::first();
@endphp
<!DOCTYPE html>

        <html>
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
            <title>{{$sitesetting->site_name}}</title>
            <meta name="keywords" content="{{$seosetting->keyword}}">
            <meta name="description" content="{{$seosetting->description}}">
            <meta name="geo.region" content="VN">
            <meta name="geo.placename" content="Gia lai (Gia Lai)">
            <meta name="geo.position" content="21.027437;105.774425">
            <meta name="ICBM" content="21.027437, 105.774425">
            <meta name="DC.title" content="{{$seosetting->description}}">
            <meta name="DC.identifier" content="{{$sitesetting->site_address}}">
            <meta name="DC.description" content="{{$seosetting->description}}">
            <meta name="DC.subject" content="{{$seosetting->description}}">
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
            <meta itemprop="name" content="{{$seosetting->description}}">
            <meta itemprop="inlanguage" content="vi-VN">
            <meta itemprop="description" content="{{$seosetting->description}}">
            <link rel="canonical" href="index.html">
            <meta name="geo.position" content="21;105">
            <meta name="geo.region" content="">
            <meta name="geo.country" content="VIET NAM">
            <meta name="ICBM" content="15;107">

            <meta name="description" content="@yield('meta_description', $seosetting->description)" />
            <meta name="keywords" content="@yield('meta_keywords', $seosetting->keyword)">
            <meta name="author" content="{{ $seosetting->author }}">
            <meta name="sitemap_link" content="{{ $seosetting->sitemap_link }}">
            @yield('meta')

            <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        
            <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
            
            <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        
            <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
        
            <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">
            
            <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

        <!-- Favicon -->
            <link name="favicon" type="image/x-icon" href="{{ asset(\App\GeneralSetting::first()->favicon) }}" rel="shortcut icon" />

            <title>@yield('meta_title', config('app.name', env('APP_NAME')))</title>

            <!-- Bootstrap -->

        <!-- Facebook Chat style -->
            @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
                <link href="{{ asset('frontend/css/fb-style.css')}}" rel="stylesheet">
            @endif
          
            <!-- jQuery -->
            <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
            <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
            @yield('style')
            @if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
            <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id={{env('TRACKING_ID')}}"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', @php env('TRACKING_ID') @endphp);
                </script>
            @endif


        </head>
        <body>


        <!-- MAIN WRAPPER -->
        {{-- <section class="bg-white">
            <div class="container-fluid topmenu sticky-top bg-light" id="topmenu">
                <div class="row">
                    <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"><img src="{{asset($sitesetting->logo)}}" class="logo" style="height:60px"></a>
                        {{-- <button class="navbar-toggler" type="button" onclick="sideMenuOpen(this)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button> --}}
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
                                @foreach (\App\Category::where('featured',1)->get() as $key => $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $category->link() }}" class="text-truncate">
                                        <span>{{ __($category->name) }}</span>
                                    </a>
                                </li>
                                @endforeach
                                @foreach (\App\CategoriesPost::where('headmenu',1)->get() as $key => $news)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $news->link() }}" class="text-truncate">
                                        <span>{{ __($news->name) }}</span>
                                    </a>
                                </li>
                                @endforeach
                                {{-- <li class="nav-item"><a class="nav-link" href="#">Dự án BĐS <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a class="nav-link " href="#">Mua nhà</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Thuê nhà</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">BĐS công nghiệp</a></li> --}}
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profile') }}">
                                        Xin chào: {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard') }}">
                                            Đăng sản phẩm
                                        </a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}">{{__('Sign Out')}}</a>
                                    </li>                     
                                @else
                                    <li class="nav-item"><a class="nav-link  " href="{{route('user.login')}}" title="Đăng nhập">Đăng nhập để đăng tin</a></li>
                                @endauth
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
                
                                    @auth
                                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                                                <div class="image " style="background-image:url('{{ Auth::user()->avatar_original }}')"></div>
                                                <div class="name">{{ Auth::user()->name }}</div>
                                        </div>
                                        <div class="side-login px-3 pb-3">
                                            <a href="{{ route('logout') }}">{{__('Sign Out')}}</a>
                                        </div>
                                    @else
                                        <div class="widget-profile-box px-3 py-4 d-flex align-items-center">
                                                <div class="image " style="background-image:url('{{ asset('frontend/images/icons/user-placeholder.jpg') }}')"></div>
                                        </div>
                                        <div class="side-login px-3 pb-3">
                                            <a href="{{ route('user.login') }}">{{__('Sign In')}}</a>
                                            <a href="{{ route('user.registration') }}">{{__('Registration')}}</a>
                                        </div>
                                    @endauth
                                </div>
                                <div class="side-menu-list px-3">
                                    <ul class="side-user-menu">
                                        <li>
                                            <a href="{{ route('home') }}">
                                                <i class="la la-home"></i>
                                                <span>{{__('Home')}}</span>
                                            </a>
                                        </li>
                
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <i class="la la-dashboard"></i>
                                                <span>{{__('Dashboard')}}</span>
                                            </a>
                                        </li>
                
                                        @foreach (\App\Category::where('featured',1)->get() as $key => $category)
                                        <li>
                                        <a href="{{ $category->link() }}" class="text-truncate">
                                            <img class="cat-image" src="{{ asset($category->icon) }}" width="13">
                                            <span>{{ __($category->name) }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> --}}
           {{-- @include('frontend.inc.navseach') --}}
           {{-- @include('frontend.inc.header') --}}

            @yield('content')

            {{-- @include('frontend.inc.footer') --}}

            {{-- @include('frontend.partials.footer') --}}
            {{-- @include('frontend.partials.modal')

            <div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
                    <div class="modal-content position-relative">
                        <div class="c-preloader">
                            <i class="fa fa-spin fa-spinner"></i>
                        </div>
                        <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div id="addToCart-modal-body">

                        </div>
                    </div>
                </div>
            </div> --}}

            @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
                <div id="fb-root"></div>
                <!-- Your customer chat code -->
                <div class="fb-customerchat"
                     attribution=setup_tool
                     page_id="{{ env('FACEBOOK_PAGE_ID') }}">
                </div>
            @endif

        </div><!-- END: body-wrap -->

        <!-- SCRIPTS -->
        <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('frontend/js/aos.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{ asset('frontend/js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('frontend/js/google-map.js')}}"></script>
        <script src="{{ asset('frontend/js/main.js')}}"></script>
          

        {{-- <!-- Core -->
        <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>

        <!-- Plugins: Sorted A-Z -->
        <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>


        <script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick/slick.min.js') }}"></script>
        {{-- <script src="{{ asset('frontend/js/slick.min.js') }}"></script> --}}

        {{-- <script src="{{ asset('frontend/js/jquery.share.js') }}"></script> --}}

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

        @foreach (session('flash_notification', collect())->toArray() as $message)
            <script type="text/javascript">
                showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
            </script>
        @endforeach

        <script>
            $(document).ready(function() {
                if ($('#lang-change').length > 0) {
                    $('#lang-change .dropdown-item a').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var locale = $this.data('flag');
                            $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
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
                            $.post('{{ route('currency.change') }}',{_token:'{{ csrf_token() }}', currency_code:currency_code}, function(data){
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
                    $.post('{{ route('search.ajax') }}', { _token: '{{ @csrf_token() }}', search:search}, function(data){
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
                        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
                            $('#cart_items').html(data);
                        });
                    }

            function removeFromCart(key){
                $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
                    updateNavCart();
                    $('#cart-summary').html(data);
                    showFrontendAlert('success', 'Item has been removed from cart');
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
                });
            }

            function addToCompare(id){
                $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    $('#compare').html(data);
                    showFrontendAlert('success', 'Item has been added to compare list');
                    $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
                });
            }

            function addToWishList(id){
                @if (Auth::check())
                $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        showFrontendAlert('success', 'Item has been added to wishlist');
                    }
                    else{
                        showFrontendAlert('warning', 'Please login first');
                    }
                });
                @else
                showFrontendAlert('warning', 'Please login first');
                @endif
            }

            function showAddToCartModal(id){
                if(!$('#modal-size').hasClass('modal-lg')){
                    $('#modal-size').addClass('modal-lg');
                }
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.post('{{ route('cart.showCartModal') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
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
                $.post('{{ route('lesson.getVideoUrl') }}', {_token: '{{ csrf_token() }}', id: id}, function (data) {
                    // $('.c-preloader').hide();
                    // $('#addToCart-modal-body').html(data);
                    // $('#lesson_video_url').attr('src',data);

                    $('#lesson_video_content').html('<video width="100%" controls controlsList="nodownload" autoplay>' +
                            '<source src="'+data+ '" >'+
                        '</video>');

                    // window.location.href = data;
                    // window.open(data);
                });
                {{--$.ajax({--}}
                {{--    type: "POST",--}}
                {{--    url: '{{ route('lesson.getVideoUrl') }}',--}}
                {{--    data: $('#option-choice-form').serializeArray(),--}}
                {{--    success: function (data) {--}}
                {{--        $('#addToCart-modal-body').html(data);--}}
                {{--    }--}}
                {{--});--}}
            }
            $('#option-choice-form input').on('change', function(){
                getVariantPrice();
            });

            function getVariantPrice(){
                if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                    $.ajax({
                        type:"POST",
                        url: '{{ route('products.variant_price') }}',
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
                        url: '{{ route('cart.addToCart') }}',
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
                        url: '{{ route('cart.addToCart') }}',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data){
                            //$('#addToCart-modal-body').html(null);
                            //$('.c-preloader').hide();
                            //$('#modal-size').removeClass('modal-lg');
                            //$('#addToCart-modal-body').html(data);
                            updateNavCart();
                            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())+1);
                            window.location.replace("{{ route('checkout.shipping_info') }}");
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

                $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
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

                $.post('{{ route('orders.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
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

        <script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
{{--        <script src="{{ asset('frontend/js/jodit.min.js') }}"></script>--}}
        <script src="{{ asset('frontend/js/modernizr.js') }}"></script>
        <script src="{{ asset('frontend/js/xzoom.min.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('frontend/js/active-shop.js') }}"></script>
            <script src="{{ asset('frontend/js/main.js') }}"></script>
        @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
        <script src="{{ asset('frontend/js/fb-script.js') }}"></script>
        @endif
        @yield('script')

        </body>
        </html>
