{{-- <div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">
                           {{$sitesetting->address}}
                        </span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">{{$sitesetting->email}}</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">{{$sitesetting->phone}}</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div> --}}
<div class="container">
    <div class="row">
            <div class="pt-4">
                <img src="{{asset('img/banner_top.png')}}" alt="" style="max-width: 100%">
            </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                
                <div class="row">
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                          </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="/" class="nav-link pl-0">Trang ch???</a></li>
                            <li class="nav-item"><a href="{{route('page','ban-lanh-dao')}}" class="nav-link">Ban l??nh ?????o</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Th?? vi???n</a></li>
                            {{-- <li class="nav-item drwopdown">
                                
                                <a class="nav-link  dropdown-toggle" href="{{route('gioithieu')}}" class="nav-link">Gi???i thi???u</a>
                                <ul class="dropdown-menu">  
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Ban l??nh ?????o</a></li>   
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">L???ch s??? h??nh th??nh</a></li>  
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">C?? c???u t??? ch???c</a></li>  
                                    <li><a class="dropdown-item" href="{{route('page','co-so-vat-chat')}}">Danh b??? ??i???n tho???i</a></li>
                                </ul>
                            </li>  --}}
                            {{-- <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Tin t???c - Ho???t ?????ng</a></li> --}}
                            {{-- <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Ph??? bi???n ph??p lu???t</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Th?? vi???n</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">T??i li???u bi???u m???u</a></li> --}}
                            {{-- <li class="nav-item dropdown">
                                
                                <a class="nav-link  dropdown-toggle" href="{{route('gioithieu')}}" class="nav-link">Gi???i thi???u</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('page','loi-ngo')}}">L???i ng???</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Ban l??nh ?????o</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','doi-ngu-giao-vien')}}">?????i ng?? gi??o vi??n</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','tam-nhin-su-menh')}}">T???m nh??n - S??? m???nh</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','moi-truong-cham-soc-va-nuoi-day-tre')}}">M??i tr?????ng ch??m s??c v?? nu??i d???y tr???</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','co-so-vat-chat')}}">C?? s??? v???t ch???t</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link  dropdown-toggle">Ch????ng tr??nh h???c</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('tu-van-giao-duc')}}">T?? v???n gi??o d???c</a></li>
                                    <li><a class="dropdown-item" href="{{route('phuong-phap-giao-duc')}}">Ph????ng ph??p gi??o d???c</a></li>
                                    <li><a class="dropdown-item" href="{{route('chuong-trinh-giao-duc')}}">Ch????ng tr??nh gi??o d???c</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link  dropdown-toggle">Tuy???n sinh</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('tuyensinh')}}">Tin tuy???n sinh</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','hoc-phi')}}">H???c ph??</a></li>
                                </ul>
                            </li>
                            --}}
                          

                            @foreach (\App\CategoriesPost::where('published',1)->where('featured',1)->get()->take(3) as $category)
                            <li class="nav-item"><a href="{{$category->link()}}" class="nav-link">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                            
                            {{-- <form class="d-lg-block d-md-block d-sm-none d-none" action="{{route('edu_seach')}}" method="get">
                            <div class="d-flex justify-content-center h-100">
                                <div class="searchbar">
                                  <input class="search_input" type="text" name="q" placeholder="T??m ki???m...">
                                  <a href="#" class="search_icon"><i class="oi oi-magnifying-glass"></i></a>
                                </div>
                              </div>
                            </form> --}}
                      </div> 
                      <div class="frmSearch">
                        <form action="{{route('edu_seach')}}" method="get">
                            <input type="text" placeholder="B???n c???n t??m" name="key" id="search"/>
                            <button><span class="oi oi-magnifying-glass"></span></button>   
                    </div>
                </div>
             
            </div>
          </nav>
        <!-- END nav -->
    </div>
</div>
