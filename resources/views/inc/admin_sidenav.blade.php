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
                            <img class="img-circle img-md" src="{{ asset('img/profile-photos/1.png') }}" alt="Profile Picture">
                        </div>
                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                            <span class="pull-right dropdown-toggle">
                                <i class="dropdown-caret"></i>
                            </span>
                            <p class="mnp-name">{{Auth::user()->name}}</p>
                            <span class="mnp-desc">{{Auth::user()->email}}</span>
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
                    {{-- <div id="mainnav-shortcut" class="hidden">
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
                    </div> --}}
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                    {{-- <li class="list-header">Navigation</li> --}}

                    <!--Menu list item-->
                        <li class="{{ areActiveRoutes(['admin.dashboard'])}}">
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <i class="fa fa-home"></i>
                                <span class="menu-title">{{__('Dashboard')}}</span>
                            </a>
                        </li>
                        @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link" href="{{route('laravel-show')}}">
                                    <i class="fa fa-camera-retro" aria-hidden="true"></i> Qu???n l?? File</a>
                            </li>
                        @endif
                    <!-- Pages Menu -->
                        @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                            <li class="{{ areActiveRoutes(['pages', 'page.create','page.edit'])}}">
                                <a class="nav-link" href="{{ route('pages') }}">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">{{__('Trang c?? nh??n')}}</span>
                                </a>
                            </li>
                        @endif
                    <!-- Post Menu -->
                        @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                        
                        <li class="{{ areActiveRoutes(['posts', 'posts.create','posts.index'])}}">
                            <a class="nav-link" href="{{ route('postcategory') }}">
                                <i class="fa fa-bolt"></i>
                                <span class="menu-title">Danh m???c b??i vi???t</span>
                            </a>
                        </li>
                        <li class="{{ areActiveRoutes(['posts', 'posts.create','posts.edit'])}}">
                            <a class="nav-link" href="{{ route('posts') }}">
                                <i class="fa fa-bolt"></i>
                                <span class="menu-title">Qu???n l?? b??i vi???t</span>
                            </a>
                        </li>

                        {{-- <li class="{{ areActiveRoutes(['posts', 'posts.create','posts.edit'])}}">
                                <a class="nav-link" href="{{ route('postcategory') }}">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">Tin t???c</span>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['posts', 'posts.create','posts.index'])}}">
                                        <a class="nav-link" href="{{ route('postcategory') }}">
                                            <i class="fa fa-bolt"></i>
                                            <span class="menu-title">Danh m???c b??i vi???t</span>
                                        </a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['posts', 'posts.create','posts.edit'])}}">
                                        <a class="nav-link" href="{{ route('posts') }}">
                                            <i class="fa fa-bolt"></i>
                                            <span class="menu-title">Qu???n l?? b??i vi???t</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                        @endif
                        @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                            <li class="{{ areActiveRoutes(['albums', 'album.create','album.edit'])}}">
                                <a class="nav-link" href="{{ route('albums') }}">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">Album tr?????ng</span>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->user_type == 'admin')
                            <li class="">
                                <a class="nav-link" href="{{ route('photos.create') }}">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">???nh album</span>
                                </a>
                            </li>
                        @endif
                    <!-- Post Menu -->
                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                           
                        @endif --}}
                    <!-- Product Menu -->
                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('3', json_decode(Auth::user()->staff->role->permissions)))
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">{{__('Products')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['brands.index', 'brands.create', 'brands.edit'])}}">
                                        <a class="nav-link" href="{{route('brands.index')}}">{{__('Brand')}}</a>
                                    </li> 
                                    <li class="{{ areActiveRoutes(['categories.index', 'categories.create', 'categories.edit'])}}">
                                        <a class="nav-link" href="{{route('categories.index')}}">Danh m???c</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['subcategories.index', 'subcategories.create', 'subcategories.edit'])}}">
                                        <a class="nav-link" href="{{route('subcategories.index')}}">Danh m???c c???p 2</a>
                                    </li> 
                                    <li class="{{ areActiveRoutes(['subsubcategories.index', 'subsubcategories.create', 'subsubcategories.edit'])}}">
                                        <a class="nav-link" href="{{route('subsubcategories.index')}}">Danh m???c c???p 3</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])}}">
                                        <a class="nav-link" href="{{route('products.admin')}}">S???n ph???m t??? ????ng</a>
                                    </li>
                                   <li class="{{ areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])}}">
                                       <a class="nav-link" href="{{route('session.create')}}">Ch????ng </a>
                                   </li>
                                   <li class="{{ areActiveRoutes(['products.admin', 'products.create', 'products.admin.edit'])}}">
                                       <a class="nav-link" href="{{route('lesson.create')}}"> B??i h???c</a>
                                   </li>

                                    @if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                        <li class="{{ areActiveRoutes(['products.seller', 'products.seller.edit'])}}">
                                            <a class="nav-link" href="{{route('products.seller')}}">S???n ph???m c???a kh??ch h??ng</a>
                                        </li>
                                    @endif
                                    <li class="{{ areActiveRoutes(['reviews.index'])}}">
                                        <a class="nav-link" href="{{route('reviews.index')}}">????nh gi?? c???a kh??ch</a>
                                    </li>
                                </ul>
                            </li>
                        @endif --}}
                    <!-- Hoa h???ng  -->
                        {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li class="">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title">Hoa H???ng</span>
                                    <i class="arrow"></i>
                                </a>

                                <ul class="collapse">
                                    @if(Auth::user()->user_type == 'admin')
                                        <li class="{{ areActiveRoutes(['khoahoc.userCourse'])}}">
                                            <a class="nav-link" href="{{route('khoahoc.userCourse')}}">K??ch ho???t kh??a
                                                h???c</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['commission.index'])}}">
                                            <a class="nav-link" href="{{route('commission.index')}}">
                                                <i class="fa fa-bolt"></i>
                                                <span class="menu-title">Hoa h???ng c???a ?????i l??</span>
                                            </a>
                                        </li>
                                    @endif
                                    @if(Auth::user()->user_type == 'staff')
                                        <li class="{{ areActiveRoutes(['commission.staffCommission'])}}">
                                            <a class="nav-link"
                                               href="{{route('commission.staffCommission',Auth::user()->id)}}">
                                                <i class="fa fa-bolt"></i>
                                                <span class="menu-title">Hoa h???ng c???a b???n</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif --}}

                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('2', json_decode(Auth::user()->staff->role->permissions)))
                        <li class="{{ areActiveRoutes(['flash_deals.index', 'flash_deals.create', 'flash_deals.edit'])}}">
                            <a class="nav-link" href="{{ route('flash_deals.index') }}">
                                <i class="fa fa-bolt"></i>
                                <span class="menu-title">{{__('Flash Deal')}}</span>
                            </a>
                        </li>
                        @endif --}}

{{--                        @if(Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))--}}
                            {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            @php
                                $orders = DB::table('orders')
                                            ->orderBy('code', 'desc')
                                            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                                           // ->where('order_details.seller_id', Auth::user()->id)
                                            ->where('orders.viewed', 0)
                                            ->select('orders.id')
                                            ->distinct()
                                            ->count();
                            @endphp
                            <li class="{{ areActiveRoutes(['orders.index.admin', 'orders.show'])}}">
                                <a class="nav-link" href="{{ route('orders.index.admin') }}">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="menu-title">{{__('H??a ????n')}} @if($orders > 0)<span
                                            class="pull-right badge badge-info">{{ $orders }}</span>@endif</span>
                                </a>
                            </li>
                        @endif --}}

                          {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                        <li class="{{ areActiveRoutes(['sales.index', 'sales.show'])}}">
                            <a class="nav-link" href="{{ route('sales.index') }}">
                                <i class="fa fa-money"></i>
                                <span class="menu-title">{{__('Total sales')}}</span>
                            </a>
                        </li>
                        @endif --}}

                            {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li>
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span class="menu-title">{{__('Sellers')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['sellers.index', 'sellers.create', 'sellers.edit'])}}">
                                    @php
                                        $sellers = \App\Seller::where('verification_status', 0)->where('verification_info', '!=', null)->count();
                                    @endphp
                                    <a class="nav-link" href="{{route('sellers.index')}}">{{__('Seller list')}} @if($sellers > 0)<span class="pull-right badge badge-info">{{ $sellers }}</span> @endif</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_verification_form.index'])}}">
                                    <a class="nav-link" href="{{route('seller_verification_form.index')}}">{{__('Seller verification form')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['business_settings.vendor_commission'])}}">
                                    <a class="nav-link" href="{{ route('business_settings.vendor_commission') }}">{{__('Seller Commission')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}

                            {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li>
                                <a href="#">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="menu-title">{{__('Customers')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['customers.index'])}}">
                                        <a class="nav-link"
                                           href="{{ route('customers.index') }}">{{__('Customer list')}}</a>
                                    </li>
                                </ul>
                            </li>
                            @endif --}}

                         {{-- <li>
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span class="menu-title">{{__('Reports')}}</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['stock_report.index'])}}">
                                    <a class="nav-link" href="{{ route('stock_report.index') }}">{{__('Stock Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['in_house_sale_report.index'])}}">
                                    <a class="nav-link" href="{{ route('in_house_sale_report.index') }}">{{__('In House Sale Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_report.index'])}}">
                                    <a class="nav-link" href="{{ route('seller_report.index') }}">{{__('Seller Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['seller_sale_report.index'])}}">
                                    <a class="nav-link" href="{{ route('seller_sale_report.index') }}">{{__('Seller Based Selling Report')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['wish_report.index'])}}">
                                    <a class="nav-link" href="{{ route('wish_report.index') }}">{{__('Product Wish Report')}}</a>
                                </li>
                            </ul>
                        </li> --}}

{{--                        @if(Auth::user()->user_type == 'admin' || in_array('7', json_decode(Auth::user()->staff->role->permissions)))--}}
                            @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span class="menu-title">{{__('Messaging')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['newsletters.index'])}}">
                                        <a class="nav-link"
                                           href="{{route('newsletters.index')}}">{{__('Newsletters')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['contacts.index'])}}">
                                        <a class="nav-link"
                                           href="{{route('contacts.index')}}">{{__('Kh??ch li??n h???')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    <!-- Widget Menu -->
{{--                        @if(Auth::user()->user_type == 'admin' || in_array('2', json_decode(Auth::user()->staff->role->permissions)))--}}
                            @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li class="{{ areActiveRoutes(['widgets', 'widget.create','widget.edit'])}}">
                                <a class="nav-link" href="{{ route('widgets') }}">
                                    <i class="fa fa-bolt"></i>
                                    <span class="menu-title">{{__('Widget')}}</span>
                                </a>
                            </li>
                        @endif
                        {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                        <li>
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title">{{__('Business Settings')}}</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['activation.index'])}}">
                                    <a class="nav-link" href="{{route('activation.index')}}">{{__('Activation')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['payment_method.index'])}}">
                                    <a class="nav-link" href="{{ route('payment_method.index') }}">{{__('Payment method')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['smtp_settings.index'])}}">
                                    <a class="nav-link" href="{{ route('smtp_settings.index') }}">{{__('SMTP Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['google_analytics.index'])}}">
                                    <a class="nav-link" href="{{ route('google_analytics.index') }}">{{__('Google Analytics')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['facebook_chat.index'])}}">
                                    <a class="nav-link" href="{{ route('facebook_chat.index') }}">{{__('Facebook Chat')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['social_login.index'])}}">
                                    <a class="nav-link" href="{{ route('social_login.index') }}">{{__('Social Media Login')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['currency.index'])}}">
                                    <a class="nav-link" href="{{route('currency.index')}}">{{__('Currency')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['languages.index', 'languages.create', 'languages.store', 'languages.show', 'languages.edit'])}}">
                                    <a class="nav-link" href="{{route('languages.index')}}">{{__('Languages')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}
                        @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span class="menu-title">{{__('Frontend Settings')}}</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li class="{{ areActiveRoutes(['home_settings.index', 'home_banners.index', 'sliders.index', 'home_categories.index', 'home_banners.create', 'home_categories.create', 'home_categories.edit', 'sliders.create'])}}">
                                    <a class="nav-link" href="{{route('home_settings.index')}}">{{__('Home')}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-title">{{__('Policy Pages')}}</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <ul class="collapse">

                                        <li class="{{ areActiveRoutes(['sellerpolicy.index'])}}">
                                            <a class="nav-link" href="{{route('sellerpolicy.index', 'seller_policy')}}">{{__('Seller Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['returnpolicy.index'])}}">
                                            <a class="nav-link" href="{{route('returnpolicy.index', 'return_policy')}}">{{__('Return Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['supportpolicy.index'])}}">
                                            <a class="nav-link" href="{{route('supportpolicy.index', 'support_policy')}}">{{__('Support Policy')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['terms.index'])}}">
                                            <a class="nav-link" href="{{route('terms.index', 'terms')}}">{{__('Terms & Conditions')}}</a>
                                        </li>
                                        <li class="{{ areActiveRoutes(['privacypolicy.index'])}}">
                                            <a class="nav-link" href="{{route('privacypolicy.index', 'privacy_policy')}}">{{__('Privacy Policy')}}</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="{{ areActiveRoutes(['links.index', 'links.create', 'links.edit'])}}">
                                    <a class="nav-link" href="{{route('links.index')}}">{{__('Useful Link')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.index'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.index')}}">{{__('General Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.logo'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.logo')}}">{{__('Logo Settings')}}</a>
                                </li>
                                <li class="{{ areActiveRoutes(['generalsettings.color'])}}">
                                    <a class="nav-link" href="{{route('generalsettings.color')}}">{{__('Color Settings')}}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                            {{-- @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li>
                                <a href="#">
                                    <i class="fa fa-desktop"></i>
                                    <span class="menu-title">{{__('E-commerce Setup')}}</span>
                                    <i class="arrow"></i>
                                </a>
                                <ul class="collapse">
                                    <li>
                                        <li class="{{ areActiveRoutes(['coupon.index','coupon.create','coupon.edit',])}}">
                                            <a class="nav-link" href="{{route('coupon.index')}}">{{__('Coupon')}}</a>
                                        </li>
                                    </li>
                                </ul>
                            </li>
                            @endif --}}
                        @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            @php
                                $support_ticket = DB::table('tickets')
                                            ->where('viewed', 0)
                                            ->select('id')
                                            ->count();
                            @endphp
                        <li class="{{ areActiveRoutes(['support_ticket.admin_index'])}}">
                            <a class="nav-link" href="{{ route('support_ticket.admin_index') }}">
                                <i class="fa fa-support"></i>
                                <span class="menu-title">{{__('Suppot Ticket')}} @if($support_ticket > 0)<span class="pull-right badge badge-info">{{ $support_ticket }}</span>@endif</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->user_type == 'admin'||Auth::user()->user_type=='staff')
                            <li class="{{ areActiveRoutes(['seosetting.index'])}}">
                                <a class="nav-link" href="{{ route('seosetting.index') }}">
                                    <i class="fa fa-search"></i>
                                    <span class="menu-title">{{__('SEO Setting')}}</span>
                                </a>
                            </li>
                        @endif

                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('10', json_decode(Auth::user()->staff->role->permissions)))
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span class="menu-title">{{__('Staffs')}}</span>
                                    <i class="arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse">
                                    <li class="{{ areActiveRoutes(['staffs.index', 'staffs.create', 'staffs.edit'])}}">
                                        <a class="nav-link" href="{{ route('staffs.index') }}">{{__('All staffs')}}</a>
                                    </li>
                                    <li class="{{ areActiveRoutes(['roles.index', 'roles.create', 'roles.edit'])}}">
                                        <a class="nav-link"
                                           href="{{route('roles.index')}}">{{__('Staff permissions')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endif --}}
                        {{-- @if(Auth::user()->user_type == 'admin' || in_array('16', json_decode(Auth::user()->staff->role->permissions)))
                            @if(Auth::user()->user_type == 'admin')
                                <li class="{{ areActiveRoutes(['staffs.index'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">Qu???n l?? ?????i l??</a>
                                </li>
                            @endif
                            @if(Auth::user()->user_type == 'staff')
                                <li class="{{ areActiveRoutes(['staffs.index'])}}">
                                    <a class="nav-link" href="{{ route('staffs.index') }}">Qu???n l?? h???c vi??n</a>
                                </li>
                            @endif
                        @endif --}}
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
