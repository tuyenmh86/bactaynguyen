

@extends('frontend.layouts.edu')
@section('content')
@php
    $info= \App\GeneralSetting::first();
@endphp
<section class="" >
   <div class="home-index">
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               @foreach ($categoryFeature as $category)
                  @foreach(\App\Post::where('category_id',$category->id)->where('featured',1)->take(1)->orderBy('created_at','desc')->get() as $post)
                     <div class="item">
                        <a href="{{$post->link()}}">
                           <img class="img-responsive w-100" style="max-width:100%" src="{{ asset($post->featured_img) }}" alt="{{$post->name}}">
                        </a> 
                        <h5> <a href="{{$post->link()}}">{{$post->name}}</a></h5>
                        {{-- <p>{{$post->description}}</p> --}}
                     </div>
                  @endforeach
               @endforeach
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               @foreach ($categoryFeature as $category)
                  @foreach(\App\Post::where('category_id',$category->id)->where('featured',1)->take(1)->orderBy('created_at','desc')->get() as $post)
                  <li class=""><a href="{{$post->link()}}">{{$post->name}}</a></li>
                  @endforeach
               @endforeach
              
            </ul>
         </div>
   </div>
   </div>
</section>

{{-- <section class="" >
   <div class="home-index">
      <div class="row">
         <div class="col-md-12 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
            @foreach (\App\Post::where('category_id',34)->where('published',1)->where('featured',1)->orderBy('created_at')->take(1)->get() as $tinnoibat )
               <div class="">
                  <img class="" style="width:100%" src="{{asset($tinnoibat->featured_img)}}" alt="" />
                  
                  <h5><a href="{{$tinnoibat->link()}}">{{$tinnoibat->name}}</a></h5>
               </div>
             @endforeach
            </div>
         </div>
         </div>
   </div>
</section> --}}

<section class="">
   <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
      @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
          <div class="">
              <img class="img-responsive w-100" src="{{ asset($slider->photo) }}" alt="Slider Image">
          </div>
      @endforeach
   </div>
</section>

@foreach ($categoryFeature as $category)
<section class="" >
   <div class="home-index">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news">{{$category->name}}</h3>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               @foreach(\App\Post::where('category_id',$category->id)->where('featured',1)->take(8)->orderBy('created_at','desc')->get() as $post)
                  <div class="item">
                     <a href="{{$post->link()}}"><img class="img-responsive w-100" style="max-width:100%" src="{{ asset($post->featured_img) }}" alt="{{$post->name}}"></a> 
                     <a href="{{$post->link()}}"><h5>{{$post->name}}</h5></a>
                  </div>
               @endforeach
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               @foreach(\App\Post::where('category_id',$category->id)->where('featured',1)->take(8)->orderBy('created_at','desc')->get() as $post)
               <li class=""><a href="{{$post->link()}}">{{$post->name}}</a></li>
               @endforeach
              
            </ul>
         </div>
   </div>
   </div>
</section>
@endforeach
{{-- 

@php
$huongdan = \App\Post::where('category_id',38)->take(6)->get();
@endphp
<section class="" >
   <div class="home-index">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news">Hướng dẫn</h3>
        </div>
      <div class="col-md-6 col-12">
         <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
            @foreach ($huongdan as $key => $hdan)
            <div class="item">
                  <a href="{{$hdan->link()}}"><img class="img-responsive w-100" style="max-width:100%" src="{{ asset($hdan->featured_img) }}" alt="{{$hdan->name}}"></a> 
                  <a href="{{$hdan->link()}}"><h5>{{$hdan->name}}</h5></a>
            </div>
            @endforeach
         </div>
      </div>
      <div class="col-md-6 col-12">
         <ul class="">
            @foreach ($huongdan as $key => $hdan)
               <li class=""><a href="{{$hdan->link()}}">{{$hdan->name}}</li>
            @endforeach
         </ul>
      </div>
   </div>
   </div>
</section>

@php
$doans = \App\Post::where('category_id',35)->take(6)->get();
@endphp
<section class="" >
   <div class="home-index">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news">Hoạt động Công Đoàn</h3>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               @foreach ($doans as $key => $doan)
               <div class="item">
                     <a href="{{$doan->link()}}"><img class="img-responsive w-100" style="max-width:100%" src="{{ asset($doan->featured_img) }}" alt="{{$doan->name}}"></a> 
                     <a href="{{$doan->link()}}"><h5>{{$doan->name}}</h5></a>
               </div>
               @endforeach
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               @foreach ($doans as $key => $doan)
               <li class=""><a href="{{$doan->link()}}">{{$doan->name}}</li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
</section>

@php
$doans = \App\Post::where('category_id',36)->take(6)->get();
@endphp
<section class="" >
   <div class="hd-doan">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news">Hoạt động Đoàn</h3>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
               @foreach ($doans as $key => $doan)
               <div class="item">
                     <a href="{{$doan->link()}}"><img class="img-responsive w-100" style="max-width:100%" src="{{ asset($doan->featured_img) }}" alt="{{$doan->name}}"></a> 
                     <a href="{{$doan->link()}}"><h5>{{$doan->name}}</h5></a>
               </div>
               @endforeach
            </div>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               @foreach ($doans as $key => $doan)
               <li class=""><a href="{{$doan->link()}}">{{$doan->name}}</li>
               @endforeach
            </ul>
         </div>
      </div>
      
   </div>
</section> --}}


{{-- <section class="" >
   <div class="home-index">
      <div class="row">
        <div class="col-md-12">
           <h3 class="title-news">Phổ biến pháp luật</h3>
        </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-12">
            <img class="" style="max-width:100%" src="{{asset('img/bi-mat.png')}}" alt="" />
            <h5>Tổ chức phổ kiến văn bản pháp luật ngành DTNN về bảo vệ bí mật nhà nước tại Cục</h5>
         </div>
         <div class="col-md-6 col-12">
            <ul class="">
               <li class="">Hành trình về nguồn tới Căn cứ địa cách mạng Khu 10 tại làng Sơ Lam, xã Krong, huyện Kbang, tỉnh Gia Lai .</li>
               <li class="">Hiến Máu Tình Nguyện năm 2021</li>
               <li class="">Sinh hoạt Đoàn - Chúc mừng sinh nhật  </li>
               <li class="">Hưởng ứng chương trình "Tiếp bước đến trường"</li>
               <li class="">Chi Đoàn Cục DTNN KV Bắc Tây Nguyên tổ chức Đại hội thành công </li>
            </ul>
         </div>
      </div>
   </div>
</section> --}}
{{-- 
<section class="">
   <div class="slick-carousel-khenthuong" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true" style="height:250px">
         <div class="">
              <img class="img-responsive w-100" src="{{asset('img/phoi-giay-khen-01.png')}}" alt="Slider Image">
          </div>
          <div class="">
            <img class="img-responsive w-100" src="{{asset('img/co-thi-dua.jpg')}}" alt="Slider Image">
        </div>
        <div class="">
         <img class="img-responsive w-100" src="{{asset('img/xuat-sac.jpg')}}" alt="Slider Image">
         </div>
         <div class="">
            <img class="img-responsive w-100" src="{{asset('img/xuat-sac.jpg')}}" alt="Slider Image">
         </div>
         <div class="">
            <img class="img-responsive w-100" src="{{asset('img/xuat-sac.jpg')}}" alt="Slider Image">
         </div>
   </div>
</section> --}}
{{-- [gioi-thieu-trang-chu-197] --}}
{{-- <section class="ftco-services pt-4">
   <div class="container">
      <div class="row">
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
         
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Góp ý dự thảo </h3>
                  <p>Góp ý các dự thảo văn bản pháp luật</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
               
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Phổ biến pháp luật</h3>
                  <p>Phổ biến kiến thức pháp luật ngành DTNN </p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              
               <div class="media-body p-2 mt-3">
                  <h3 class="heading"> Hoạt động Cục</h3>
                  <p>Hoạt động Đảng - Đoàn thể</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Thi đua khen thưởng</h3>
                  <P>Phát động phong trào thi đua tại Cục</P>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}
{{-- <section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="row">
         @php
            $gioithieu = \App\Page::find(12);
         @endphp
         <div class="col-md-5 order-md-last py-5 bg-light">
            <div class="text px-4 ftco-animate">
              
               <h2 class="mb-4 s-font">{{$gioithieu->name}}</h2>
               <p>
                  {!!$gioithieu->description!!}
               </p>
               <p><a href="{{$gioithieu->link()}}" class="btn btn-secondary px-4 py-3">Đọc thêm</a></p>
            </div>
         </div>
         <div class="col-md-7 py-5 pr-md-4 ftco-animate">
		 {{-- <iframe style="width:100% !important" width="560" height="315" src="https://www.youtube.com/embed/Mi5ZYfE8VP4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
		 
            {{--<img src="{{asset($gioithieu->featured_image)}}" alt="" style="max-width:100%;"> --}}
            {{-- <h2 class="mb-4">Mầm non Hoa Hồng</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                     <div class="text">
                        <h3>Giáo viên tận tình, chuyên nghiệp</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                     <div class="text">
                        <h3>Thực đơn bốn mùa phong phú</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                     <div class="text">
                        <h3>Chương trình học tuyệt vời</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                     <div class="text">
                        <h3>Hoạt động ngoại khóa vui vẻ bổ ích</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div> --}}
         {{-- </div>
      </div>
   </div>
</section> --}}
{{-- <section class="ftco-intro" style="background-image:url({{asset('frontend/images/bg_3.jpg')}}" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <h2>Trao tin tưởng - Nhận yêu thương</h2>
            <p class="mb-0">Tại trường mầm non Hoa Hồng tập thể giáo viên luôn nhiệt tình chăm sóc trẻ, luôn cho trẻ cảm nhận được tình yêu thương của cô.</p>
         </div>
         <div class="col-md-3 d-flex align-items-center">
            <p class="mb-0"><a href="https://tuthuchoahong.edu.vn/page/loi-ngo" class="btn btn-secondary px-4 py-3">Xem thêm</a></p>
         </div>
      </div>
   </div>
</section> --}}
   {{-- 
   <section class="ftco-section bg-light">
      <div class="container">
         <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
               <h2 class="mb-4"><span>Chương trình </span> cho Bé </h2>
               <p>Lịch hoạt động của bé lớp mẫu giáo tại trường mầm non </p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 course d-lg-flex ftco-animate">
               <div class="text bg-white p-4">
                  <h3><a href="#">Bé Vẽ</a></h3>
                  <p class="subheading"><span>Giờ học:</span> 9:00 - 10 </p>
                  <p>Ở tiết học vẽ các bé được thỏa sức sáng tạo những bức tranh đáng yêu, những nét vẽ ngộ nghĩnh mà chỉ có trẻ thơ mới có. </p>
               </div>
            </div>
      
            <div class="col-md-6 course d-lg-flex ftco-animate">
               <div class="text bg-white p-4">
                  <h3><a href="#">Bé hát</a></h3>
                  <p class="subheading"><span>Giờ học:</span> 10:00  - 10:50</p>
                  <p>Âm nhạc là một trong những phương tiện tốt nhất thúc đẩy sự phát triển và khả năng nhận thức của bé ở những năm đầu đời. Hoạt động âm nhạc giúp các bé tưởng tượng ra thế giới xung quanh đầy màu sắc</p>
               </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
               <div class="text bg-white p-4">
                  <h3><a href="#">Bé chơi</a></h3>
                  <p class="subheading"><span>Giờ học:</span> 13:00 - 14:00</p>
                  <p>Hoạt động vui chơi là một trong những hoạt động mà trẻ hứng thú nhất, mang lại cho trẻ nhiều niềm vui và kiến thức cần thiết về thế giới xung quanh</p>
               </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
               <div class="text bg-white p-4">
                  <h3><a href="#">Bé tập </a></h3>
                  <p class="subheading"><span>Giờ học:</span> 14:00 - 15:00</p>
                  <p>
                     Vận động phát triển thể chất, trò chơi dân gian
                     Quan sát các hiện tượng tự nhiên và thiên nhiên
               </p>
               </div>
            </div>
         </div>
      </div>
   </section> --}}

{{-- <section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
         @foreach(\App\Photo::where('album_id',4)->take(4)->orderBy('created_at','desc')->get() as $item)
         <div class="col-md-3 ftco-animate">
            <a href="{{asset($item->photo)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset($item->photo)}});">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         @endforeach
        
      </div>
   </div>
</section>  --}}

{{-- <section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Phụ huynh</span> nói gì</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               @php
               $phuhuynhnoi = \App\Post::where('category_id',33)->where('published',1)->orderBy('created_at','desc')->take(3)->get();
               @endphp
               @foreach ($phuhuynhnoi as $item)
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url({{asset('frontend/images/si-hoang_1.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>{{$item->name}}</p>
                        <p class="name">{{$item->description}}</p>
                     </div>
                  </div>
               </div>
               @endforeach

            </div>
         </div>
      </div>
   </div>
</section> --}}

{{-- <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('frontend/images/dangky.jpg')}});" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
		<div class="col-md-6 py-5 px-md-5 bg-primary">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.5795706539959!2d106.042473804077!3d20.93972961887059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a48affd85093%3A0xf77c4755b5213863!2zVHLGsOG7nW5nIE3huqdtIE5vbiBUxrAgVGjhu6VjIEhvYSBI4buTbmc!5e0!3m2!1svi!2s!4v1616507530783!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <h2 class="mb-4">Liên hệ tư vấn</h2>
               <p>Phụ huynh vui lòng điền thông</p>
            </div>
			 <form action="{{route('gui-lien-he')}}" method="POST" class="appointment-form ftco-animate">
            @csrf
                        <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
                                    .then(function(token) {
                                        document.getElementById("_token").value = token
                                    });
                            });
                        </script>   
            <div class="d-md-flex">
                   <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Họ tên">
                   </div>
                </div>
                <div class="d-md-flex">
                   <div class="form-group">
                      <div class="form-field">
                         <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="class" id="" class="form-control">
                               <option value="">Lựa chọn lớp học</option>
                               <option value="">Lớp mầm</option>
                               <option value="">Lớp chồi</option>
                               <option value="">Lớp lá</option>
                               <option value="">Lớp khác</option>
                            </select>
                         </div>
                      </div>
                   </div>
                   <div class="form-group ml-md-4">
                      <input type="text" name="phone" class="form-control" placeholder="Điện thoại">
                   </div>
                </div>
                <div class="d-md-flex">
                   <div class="form-group">
                      <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Câu hỏi dành cho nhà trường"></textarea>
                   </div>
                   <div class="form-group ml-md-4">
                      <input type="submit" value="Gửi yêu cầu" class="btn btn-secondary py-3 px-4">
                   </div>
                </div>
             </form>
            
         </div>
      </div>
   </div>
</section> --}}
{{-- 
<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Học</span> Phí</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="pricing-entry bg-light pb-4 text-center">
               <div>
                  <h3 class="mb-3">Basic</h3>
                  <p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
               </div>
               <div class="img" style="background-image: url(images/bg_1.jpg);"></div>
               <div class="px-4">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
               <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="pricing-entry bg-light pb-4 text-center">
               <div>
                  <h3 class="mb-3">Standard</h3>
                  <p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
               </div>
               <div class="img" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});"></div>
               <div class="px-4">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
               <p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="pricing-entry bg-light active pb-4 text-center">
               <div>
                  <h3 class="mb-3">Premium</h3>
                  <p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
               </div>
               <div class="img" style="background-image: url({{asset('frontend/images/bg_3.jpg')}});"></div>
               <div class="px-4">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
               <p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="pricing-entry bg-light pb-4 text-center">
               <div>
                  <h3 class="mb-3">Platinum</h3>
                  <p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
               </div>
               <div class="img" style="background-image: url({{asset('frontend/images/bg_5.jpg')}});"></div>
               <div class="px-4">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
               <p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
--}}
{{-- @foreach(\App\CategoriesPost::where('published',1)->where('featured',1)->where('homepage',1)->get() as $news)
<section class="ftco-section bg-light">
   <div class="container">
   
        
         <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
               <h2 class="mb-4"><span>Bản tin </span> DTNN KV Bắc Tây Nguyên</h2>
            </div>
         </div>
         <div class="row">
            @php
                $posts = \App\Post::where('category_id',32)->where('published',1)->orderBy('created_at','desc')->take(3)->get();
            @endphp
            @foreach ($posts as $item)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                <a href="{{$item->link()}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset($item->featured_img)}});">
                    <div class="meta-date text-center p-2">
                        <span class="mos">{{$item->created_at->format('d.m.Y')}}</span>
                    </div>
                </a>
                <div class="text bg-white p-4">
                    <h3 class="heading"><a href="{{$item->link()}}">{{$item->name}}</a></h3>
                    <p>{{$item->description}}</p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="{{$item->link()}}" class="btn btn-secondary">Đọc tiếp <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                            <a href="#" class="mr-2">{{$item->user->name}}</a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
          @endforeach
         </div>
   </div>
</section>
@endforeach --}}


{{-- @include('frontend.inc.seachbds') --}}
{{-- @include('frontend.partials.news') --}}
{{-- @include('frontend.partials.slideCarol') --}}
{{-- @include('frontend.partials.categoryList') --}}
{{-- @include('frontend.partials.flashDeal') --}}
{{-- @include('frontend.partials.banner') --}}
{{-- @include('frontend.partials.best_selling') --}}
{{-- @include('frontend.partials.homeCategory') --}}
{{-- @include('frontend.partials.vip1') --}}
{{-- @include('frontend.partials.vip2') --}}
{{-- @include('frontend.partials.featured') --}}
{{-- 
<section class="bg-white mt-4">
   <div class="row">
      <div class="container">
         <div class="col-md-9 col-sm-12 col-xs-12 content-right pull-right">
            @include('frontend.partials.featured')
         </div>
         <div class="col-md-3 col-xs-12 pull-left content-left hidden-xs hidden-sm">
            @include('frontend.partials.leftBox')
         </div>
      </div>
   </div>
</section>
--}}
@endsection

@section('script')
<script>
$(function(){
        $('.marquee').marquee({
           direction: 'up'
        });   
      });

$('.slick-carousel').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
   autoplay: true,
  autoplaySpeed: 1000,
});
$('.slick-carousel-khenthuong').slick({
   autoplay: true,
   infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
   autoplaySpeed: 500,
})
</script>

@endsection