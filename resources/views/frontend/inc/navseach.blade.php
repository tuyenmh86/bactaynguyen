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
                        <a class="navbar-brand w-100 d-xs-none" href="{{ route('home') }}">
                            @php
                                $generalsetting = \App\GeneralSetting::first();
                            @endphp
                            @if($generalsetting->logo != null)
                                <img src="{{ asset($generalsetting->logo) }}" class="" alt="{{$generalsetting->site_name}}">
                            @else
                                <img src="{{ asset('frontend/images/logo/logo.png') }}" class="" alt="active shop">
                            @endif
                        </a>

                        {{-- @if(Route::currentRouteName() != 'home' && Route::currentRouteName() != 'categories.all')
                            <div class="d-none d-xl-block category-menu-icon-box">
                                <div class="dropdown-toggle navbar-light category-menu-icon" id="category-menu-icon">
                                    <span class="navbar-toggler-icon"></span>
                                </div>
                            </div>
                        @endif --}}
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
                            @foreach(\App\Category::where('top',1)->get() as $category)
                            <li class="nav-item"> <a class="nav-link" href="{{$category->link()}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
