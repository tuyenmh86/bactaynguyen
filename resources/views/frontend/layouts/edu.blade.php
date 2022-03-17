@php
    $seosetting = \App\SeoSetting::first();
    $sitesetting = \App\GeneralSetting::first();
@endphp
<!DOCTYPE html>

        <html>
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=1">
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
			{{--<meta property="fb:app_id"          content="" /> --}}
			{{-- <meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
			<meta property="og:url"             content="https://tuthuchoahong.edu.vn"/> 
			<meta property="og:title"           content="Trường Mầm Non Tư Thục Hoa Hồng" /> 
			<meta property="og:image"           content="{{asset('img/og-image.png')}}" /> 
			<meta property="og:image:alt"           content="Trường Mầm Non Tư Thục Hoa Hồng" /> 
			<meta property="og:description"    content="{{$sitesetting->sologun}}" /> --}}
            
            <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> --}}
          
            <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
            <link type="text/css" href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick-theme.css')}}"/>
            
            <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/fancybox.min.css')}}">
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
            {{-- @if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
            <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id={{env('TRACKING_ID')}}"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', @php env('TRACKING_ID') @endphp);
                </script>
            @endif
            <script src="https://sp.zalo.me/plugins/sdk.js"></script> --}}

        </head>
        <body>
           @include('frontend.edu.header')
           <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @yield('content')
                </div>
                <div class="col-md-3">
                    <div class="box-thongbao mb-4 thongbao">
                        <div class="title">Thông báo</div>
                            <div class="content">
                                <marquee onmouseout="this.start();" onmouseover="this.stop();" with="178" scrollamount="1" scrolldelay="30" direction="up" height="180px">
                                <ul>
                                    @foreach(\App\Post::where('category_id',33)->where('published',1)->orderBy('created_at','desc')->take(10)->get() as $thongbao)
                                        <li>
                                            <a href="{{$thongbao->link()}}">
                                                {{$thongbao->name}} 
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                </marquee>
                            </div>
                        </div>
                    <div class="box-thongbao mb-4 ldCuc">
                        <div class="title">Lãnh đạo Cục</div>
                        <div class="content">
                            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
                                    <div class="">
                                        <img class="img-responsive w-100" src="{{ asset('img/ld/quanlv.jpg') }}" alt="Slider Image">
                                        <p class="text-center">Cục trưởng - Lưu Văn Quân </p>
                                    </div>
                                    <div class="">
                                    <img class="img-responsive w-100" src="{{ asset('img/ld/hieunt2.jpg') }}" alt="Slider Image">
                                    <p class="text-center">Phó Cục trưởng - Nguyễn Thị Hiếu </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box-thongbao mb-4 ldCuc">
                        <div class="title">Lịch công tác của lãnh đạo</div>
                        <div class="content">
                            {{-- <img class="img-responsive w-100" src="{{ asset('img/ld/lctld.png') }}" alt="Slider Image"> --}}
                            {{-- [lich-cong-tac-417]  --}}
                        </div>
                    </div>
                    <div class="box-thongbao mb-4">
                        <div class="title">Liên kết phần mềm</div>
                        <div class="content">
                            <ul class="list-group list-group-flush">
                                @foreach (\App\Link::all() as $link )
                                <li class="list-group-item">
                                    <a href="{{$link->url}}" target="_blank">{{$link->name}}</a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    @yield('col-right')
                    
                </div>
            </div>
            

           </div>
           

            {{-- @include('frontend.inc.footer') --}}
            <a href="#" class="back-to-top btn-back-to-top"><span class="oi oi-arrow-thick-top"></span></a>

            @include('frontend.edu.footer')
            
            {{-- @if (\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1)
                <div id="fb-root"></div>
                <!-- Your customer chat code -->
                <div class="fb-customerchat"
                     attribution=setup_tool
                     page_id="{{ env('FACEBOOK_PAGE_ID') }}">
                </div>
            @endif --}}

        </div><!-- END: body-wrap -->

        <!-- SCRIPTS -->
        <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        
        <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.marquee.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.fancybox.min.js')}}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('frontend/js/aos.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{ asset('frontend/js/scrollax.min.js')}}"></script>
        <script src="{{ asset('frontend/js/webfont.js')}}"></script>
        
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
        {{-- <script src="{{ asset('frontend/js/google-map.js')}}"></script> --}}
        <script src="{{ asset('frontend/js/main.js')}}"></script>
        
        @yield('script')

        </body>
        </html>
