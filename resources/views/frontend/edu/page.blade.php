

@extends('frontend.layouts.edu')
@section('style')

@endsection
@section('meta')
<meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
			<meta property="og:url"             content="https://tuthuchoahong.edu.vn"/> 
			<meta property="og:title"           content="{{$page->name}}" /> 
			<meta property="og:image"           content="{{asset('img/og-image.png')}}" /> 
			<meta property="og:image:alt"           content="Trường Mầm Non Tư Thục Hoa Hồng" /> 
			<meta property="og:description"    content="" />
@endsection
@section('content')
{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">{{$page->name}}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$page->name}} <i class="ion-ios-arrow-forward"></i></span></p>
         </div>
      </div>
   </div>
</section> --}}
<section class="ftco-section pt-2">
   <div class="container">
      <div class="row">
         <div class="order-md-last wrap-about py-5 wrap-about bg-light ban-lanh-dao">
            <div class="text px-4 ftco-animate">
               <h2 class="mb-4">{{$page->name}}</h2>
               <p>{!!$page->content!!}
               {{-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
               <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p> --}}
               {{-- <p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p> --}}
            </div>
         </div>
         {{-- <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">What We Offer</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                     <div class="text">
                        <h3>Safety First</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                     <div class="text">
                        <h3>Regular Classes</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                     <div class="text">
                        <h3>Certified Teachers</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                     <div class="text">
                        <h3>Sufficient Classrooms</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                     <div class="text">
                        <h3>Creative Lessons</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                     <div class="text">
                        <h3>Sports Facilities</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
      </div>
   </div>
</section>
@php
    $school = \App\GeneralSetting::find(1);
@endphp
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>Sau 10 Năm </span> thành lập chúng tôi có</h2>
            {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
         </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
         <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="50">0</strong>
                        <span>Cán bộ công chức người lao động</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="44">0</strong>
                        <span>Công chức</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="4">0</strong>
                        <span>Hợp đồng 68</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="2">0</strong>
                        <span>Người lao động</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
{{-- [phu-huynh-noi-ve-chung-toi-347] --}}
{{-- <section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Phụ huynh</span> nói về chúng tôi</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Tôi thực sự rất hài lòng - đây là môi trường học tập đạt chuẩn tiệm cận quốc tế </p>
                        <p class="name">Nguyễn văn tài</p>
                        <span class="position">Father</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Lớp học sạch sẽ, các cô chăm sóc bé rất kỹ từng bữa ăn giấc ngủ - đứa thứ 2 tôi cũng sẽ cho học ở đây</p>
                        <p class="name">Hằng Nguyễn</p>
                        <span class="position">Mother</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                <div class="testimony-wrap d-flex">
                   <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                   </div>
                   <div class="text ml-2 bg-light">
                      <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                      </span>
                      <p>Trường dạy các kỹ năng rất tốt để phát triển - Con tôi rất thích đi học</p>
                      <p class="name">Trang Nguyễn</p>
                      <span class="position">Mother</span>
                   </div>
                </div>
             </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}
{{-- <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 py-5 px-md-5 bg-primary">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.5795706539959!2d106.042473804077!3d20.93972961887059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a48affd85093%3A0xf77c4755b5213863!2zVHLGsOG7nW5nIE3huqdtIE5vbiBUxrAgVGjhu6VjIEhvYSBI4buTbmc!5e0!3m2!1svi!2s!4v1616507530783!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <span class="subheading">Yêu cầu</span>
               <h2 class="mb-4">Liên hệ tư vấn</h2>
               <p>Phụ huynh quan tâm vui lòng điền thông tin nhà trường sẽ liên hệ lại</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Họ tên">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <div class="form-field">
                        <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="" id="" class="form-control">
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
                     <input type="text" class="form-control" placeholder="Số điện thoại">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Câu hỏi dành cho nhà trường"></textarea>
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

{{-- <section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
         @foreach(\App\Slider::where('album_id',1)->get() as $item)
         <div class="col-md-3 ftco-animate">
            <a href="{{asset($item->photo)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset($item->photo)}});">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         @endforeach
         @foreach(\App\Slider::where('album_id',1)->take(1)->get() as $item)
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

{{-- <section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
         <div class="col-md-3 ftco-animate">
            <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
      </div>
   </div>
</section> --}}

@endsection

