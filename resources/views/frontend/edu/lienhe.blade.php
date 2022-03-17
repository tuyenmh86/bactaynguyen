@extends('frontend.layouts.edu')
@section('style')
@endsection
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="{{config('app.name')}}">
@endsection
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Liên hệ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Liên hệ <i class="ion-ios-arrow-forward"></i></span></p>
         </div>
      </div>
   </div>
</section>
@php
    $info = \App\GeneralSetting::first();
@endphp
<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Địa chỉ</h3>
              <p>{{$info->address}}</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Điện thoại liên hệ</h3>
              <p><a href="tel://{{$info->phone}}">{{$info->phone}}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Địa chỉ Email</h3>
              <p><a href="mailto:{{$info->email}}">{{$info->email}}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Website</h3>
              <p><a href="http://{{$info->site_url}}">{{$info->site_url}}</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
      
  
  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('frontend/images/dangky.jpg')}});" data-stellar-background-ratio="0.5">
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
</section>
      @endsection