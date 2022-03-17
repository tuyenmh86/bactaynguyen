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
                            <li class="nav-item active"><a href="/" class="nav-link pl-0">Trang chủ</a></li>
                            <li class="nav-item"><a href="{{route('page','ban-lanh-dao')}}" class="nav-link">Ban lãnh đạo</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Thư viện</a></li>
                            {{-- <li class="nav-item drwopdown">
                                
                                <a class="nav-link  dropdown-toggle" href="{{route('gioithieu')}}" class="nav-link">Giới thiệu</a>
                                <ul class="dropdown-menu">  
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Ban lãnh đạo</a></li>   
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Lịch sử hình thành</a></li>  
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Cơ cấu tổ chức</a></li>  
                                    <li><a class="dropdown-item" href="{{route('page','co-so-vat-chat')}}">Danh bạ điện thoại</a></li>
                                </ul>
                            </li>  --}}
                            {{-- <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Tin tức - Hoạt động</a></li> --}}
                            {{-- <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Phổ biến pháp luật</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Thư viện</a></li>
                            <li class="nav-item"><a href="{{route('thuvienanh')}}" class="nav-link">Tài liệu biểu mẫu</a></li> --}}
                            {{-- <li class="nav-item dropdown">
                                
                                <a class="nav-link  dropdown-toggle" href="{{route('gioithieu')}}" class="nav-link">Giới thiệu</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('page','loi-ngo')}}">Lời ngỏ</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','ban-lanh-dao')}}">Ban lãnh đạo</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','doi-ngu-giao-vien')}}">Đội ngũ giáo viên</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','tam-nhin-su-menh')}}">Tầm nhìn - Sứ mệnh</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','moi-truong-cham-soc-va-nuoi-day-tre')}}">Môi trường chăm sóc và nuôi dạy trẻ</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','co-so-vat-chat')}}">Cơ sở vật chất</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link  dropdown-toggle">Chương trình học</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('tu-van-giao-duc')}}">Tư vấn giáo dục</a></li>
                                    <li><a class="dropdown-item" href="{{route('phuong-phap-giao-duc')}}">Phương pháp giáo dục</a></li>
                                    <li><a class="dropdown-item" href="{{route('chuong-trinh-giao-duc')}}">Chương trình giáo dục</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link  dropdown-toggle">Tuyển sinh</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('tuyensinh')}}">Tin tuyển sinh</a></li>
                                    <li><a class="dropdown-item" href="{{route('page','hoc-phi')}}">Học phí</a></li>
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
                                  <input class="search_input" type="text" name="q" placeholder="Tìm kiếm...">
                                  <a href="#" class="search_icon"><i class="oi oi-magnifying-glass"></i></a>
                                </div>
                              </div>
                            </form> --}}
                      </div> 
                      <div class="frmSearch">
                        <form action="{{route('edu_seach')}}" method="get">
                            <input type="text" placeholder="Bạn cần tìm" name="key" id="search"/>
                            <button><span class="oi oi-magnifying-glass"></span></button>   
                    </div>
                </div>
             
            </div>
          </nav>
        <!-- END nav -->
    </div>
</div>
