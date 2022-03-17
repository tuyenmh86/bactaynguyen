

@extends('frontend.layouts.edu')
@section('style')

@endsection
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="{{config('app.name')}}">
@endsection
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset($category->banner)}}');">
    <div class="overlay"></div>
    <div class="container">
       <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
             <h1 class="mb-2 bread">{{$category->name}}</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$category->name}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
       </div>
    </div>
 </section>
<section class="ftco-section">

    <div class="container">
       {{-- <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
             <h2 class="mb-4">{{$category->name}} </h2>
             <p>{{$category->description}}</p>
          </div>
       </div> --}}
       <div class="row">
           @foreach ($posts as $course)
           <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url({{asset($course->featured_img)}});"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">{{$course->name}}</a></h3>
               {{-- <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
               <p>{{$course->description}}</p>
            </div>
            </div>
           @endforeach
          
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
          {{-- <div class="col-md-6 course d-lg-flex ftco-animate">
             <div class="img" style="background-image: url({{asset('frontend/images/course-3.jpg')}});"></div>
             <div class="text bg-light p-4">
                <h3><a href="#">Bé hát</a></h3>
                <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
             </div>
          </div>
          <div class="col-md-6 course d-lg-flex ftco-animate">
             <div class="img" style="background-image: url({{asset('frontend/images/course-4.jpg')}});"></div>
             <div class="text bg-light p-4">
                <h3><a href="#">Bé chơi</a></h3>
                <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
             </div>
          </div>
          <div class="col-md-6 course d-lg-flex ftco-animate">
             <div class="img" style="background-image: url({{asset('frontend/images/course-4.jpg')}});"></div>
             <div class="text bg-light p-4">
                <h3><a href="#">Bé tập </a></h3>
                <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
             </div>
          </div> --}}
       </div>
    </div>
 </section>

 
@endsection

