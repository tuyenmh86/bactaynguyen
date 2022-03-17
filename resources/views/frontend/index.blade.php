

@extends('frontend.layouts.edu')
@section('content')

<section class="home-slider owl-carousel">

    <div class="container-fluit" style="background-color: rgb(239, 249, 255)">
       <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="false">
          <div class="col-md-6 text-center ftco-animate">
             <h1 class="mb-4 s-font">Chào mừng đến với môi trường <span>tốt nhất dành cho bé</span></h1>
             <p class="p-intro p-3">Chúng tôi cam kết, dành cho con của bạn một môi trường hoàn hảo để phát triển toàn diện</p>
             <p><a href="{{route('gioithieu')}}" class="btn btn-secondary px-4 py-3 mt-3">Xem thêm</a></p>
          </div>
          <div class="col-md-6 text-center ftco-animate">
            @foreach(\App\Slider::where('published',1)->get() as $key => $slider)
            <div class="slider-item" style="background-image:url({{asset($slider->photo)}});">
            @endforeach
         </div>
       </div>
    </div>
</section>
{{-- [gioi-thieu-trang-chu-197] --}}
<section class="ftco-services">
   <div class="container">
      <div class="row">
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/ibg1.png')}};background-repeat: no-repeat;)">
                  <img src="{{asset('frontend/images/cake.png')}}" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé học</h3>
                  <p>100% cán bộ, giáo viên có trình độ chuyên môn đạt chuẩn, trong đó trình độ trên chuẩn đạt 54% </p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/ibg1.png')}};background-repeat: no-repeat;)">
                  <img src="{{asset('frontend/images/cake.png')}}" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé chơi</h3>
                  <p>Được cập nhật với mục tiêu đem đến sự phát triển toàn diện cho trẻ.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/ibg1.png')}};background-repeat: no-repeat;)">
                  <img src="{{asset('frontend/images/cake.png')}}" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé trải nghiệm</h3>
                  <p>Sạch sẽ, thoáng mát, sân chơi rộng rãi, đa dạng đồ chơi phù hợp cho trẻ.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/ibg1.png')}};background-repeat: no-repeat;)">
                  <img src="{{asset('frontend/images/cake.png')}}" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé tập làm </h3>
                  <p>Nhà trường luôn tổ chức các hoạt động vô cùng bổ ích cho các con nâng cao trải nghiệm</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
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
            <img src="{{asset($gioithieu->featured_image)}}" alt="" style="max-width:100%;">
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
         </div>
      </div>
   </div>
</section>
<section class="ftco-intro" style="background-image:url({{asset('frontend/images/bg_3.jpg')}}" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <h2>Trao tin tưởng - Nhận yêu thương</h2>
            <p class="mb-0">Tại trường mầm non Hoa Hồng tập thể giáo viên luôn nhiệt tình chăm sóc trẻ, luôn cho trẻ cảm nhận được tình yêu thương của cô.</p>
         </div>
         <div class="col-md-3 d-flex align-items-center">
            <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Xem thêm</a></p>
         </div>
      </div>
   </div>
</section>
{{-- 
<section class="ftco-section ftco-no-pb">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Teachers</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
               <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image:url({{asset('frontend/images/teacher-1.jpg')}});"></div>
               </div>
               <div class="text pt-3 text-center">
                  <h3>Bianca Wilson</h3>
                  <span class="position mb-2">Teacher</span>
                  <div class="faded">
                     <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                     <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
               <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url({{asset('frontend/images/teacher-2.jpg')}});"></div>
               </div>
               <div class="text pt-3 text-center">
                  <h3>Mitch Parker</h3>
                  <span class="position mb-2">English Teacher</span>
                  <div class="faded">
                     <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                     <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
               <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url({{asset('frontend/images/teacher-3.jpg')}});"></div>
               </div>
               <div class="text pt-3 text-center">
                  <h3>Stella Smith</h3>
                  <span class="position mb-2">Art Teacher</span>
                  <div class="faded">
                     <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                     <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
               <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url({{asset('frontend/images/teacher-4.jpg')}});"></div>
               </div>
               <div class="text pt-3 text-center">
                  <h3>Monshe Henderson</h3>
                  <span class="position mb-2">Science Teacher</span>
                  <div class="faded">
                     <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                     <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
--}}
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
            {{-- <div class="img" style="background-image: url({{asset('frontend/images/course-1.jpg')}});"></div> --}}
            <div class="text bg-white p-4">
               <h3><a href="#">Bé Vẽ</a></h3>
               <p class="subheading"><span>Giờ học:</span> 9:00 - 10 </p>
               <p>Ở tiết học vẽ các bé được thỏa sức sáng tạo những bức tranh đáng yêu, những nét vẽ ngộ nghĩnh mà chỉ có trẻ thơ mới có. </p>
            </div>
         </div>
         {{-- 
         <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url({{asset('frontend/images/course-2.jpg')}});"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">Language Lesson</a></h3>
               <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
         </div>
         --}}
         <div class="col-md-6 course d-lg-flex ftco-animate">
            {{-- <div class="img" style="background-image: url({{asset('frontend/images/course-3.jpg')}});"></div> --}}
            <div class="text bg-white p-4">
               <h3><a href="#">Bé hát</a></h3>
               <p class="subheading"><span>Giờ học:</span> 10:00  - 10:50</p>
               <p>Âm nhạc là một trong những phương tiện tốt nhất thúc đẩy sự phát triển và khả năng nhận thức của bé ở những năm đầu đời. Hoạt động âm nhạc giúp các bé tưởng tượng ra thế giới xung quanh đầy màu sắc</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            {{-- <div class="img" style="background-image: url({{asset('frontend/images/course-4.jpg')}});"></div> --}}
            <div class="text bg-white p-4">
               <h3><a href="#">Bé chơi</a></h3>
               <p class="subheading"><span>Giờ học:</span> 13:00 - 14:00</p>
               <p>Hoạt động vui chơi là một trong những hoạt động mà trẻ hứng thú nhất, mang lại cho trẻ nhiều niềm vui và kiến thức cần thiết về thế giới xung quanh</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            {{-- <div class="img" style="background-image: url({{asset('frontend/images/course-4.jpg')}});"></div> --}}
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
</section>

<section class="ftco-gallery">
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
</section> 
{{-- 
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('frontend/images/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Years of</span> Experience</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
         <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="18">0</strong>
                        <span>Certified Teachers</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="351">0</strong>
                        <span>Successful Kids</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="564">0</strong>
                        <span>Happy Parents</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="300">0</strong>
                        <span>Awards Won</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
--}}
<section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Phụ huynh</span> nói gì</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url({{asset('frontend/images/si-hoang_1.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm.</p>
                        <p class="name">Phụ Huynh bé Trí Tâm</p>
                        <span class="position">Father</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url({{asset('frontend/images/kim-dung.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Mẹ Bé Hoàng Anh</p>
                        {{-- <span class="position">Mother</span> --}}
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image:url({{asset('frontend/images/teacher-3.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ huynh bé Tin Nguyễn</p>
                        {{-- <span class="position">Mother</span> --}}
                  </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url({{asset('frontend/images/teacher-3.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ Huynh bé Mai</p>
                        {{-- <span class="position">Mother</span> --}}
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url({{asset('frontend/images/teacher-1.jpg')}})">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ huynh bé Tâm Anh</p>
                        {{-- <span class="position"></span> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('frontend/images/dangky.jpg')}});" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <h2 class="mb-4">Đăng ký học</h2>
               <p>Phụ huynh vui lòng đăng ký thông tin lớp học</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
               <div class="d-md-flex">
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Họ tên">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <div class="form-field">
                        <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="" id="" class="form-control">
                              <option value="">Chọn khóa học</option>
                              <option value="">Lớp mầm</option>
                              <option value="">Lớp chồi</option>
                              <option value="">Lớp Lá</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Điện thoại">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Tin nhắn cho chúng tôi"></textarea>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="submit" value="Gửi yêu cầu" class="btn btn-secondary py-3 px-4">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
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
@foreach(\App\CategoriesPost::where('published',1)->where('featured',1)->where('homepage',1)->get() as $news)
<section class="ftco-section bg-light">
   <div class="container">
   
        
         <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
               <h2 class="mb-4"><span>Bản tin</span> Mầm non</h2>
               {{-- 
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
               --}}
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
                        {{-- <span class="day">27</span>
                        <span class="mos">January</span>
                        <span class="yr">2019</span> --}}
                        <span class="mos">{{$item->created_at->format('d.m.Y')}}</span>
                    </div>
                </a>
                <div class="text bg-white p-4">
                    <h3 class="heading"><a href="#">{{$item->name}}</a></h3>
                    <p>{{$item->description}}</p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="{{$item->link()}}" class="btn btn-secondary">Đọc tiếp <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                            <a href="#" class="mr-2">{{$item->user->name}}</a>
                            {{-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --}}
                        </p>
                    </div>
                </div>
                </div>
            </div>
          @endforeach
         </div>
   </div>
</section>
@endforeach


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

