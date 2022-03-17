

@extends('frontend.layouts.edu')
@section('style')
@endsection
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="{{config('app.name')}}">
@endsection
@section('content')
{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset($category->banner)}}');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">{{$category->name}}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$category->name}} <i class="ion-ios-arrow-forward"></i></span></p>
         </div>
      </div>
   </div>
</section> --}}

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         {{-- <div class="col col-md-8"> --}}
            <div class="row">
                @if(count($posts))
               @foreach ($posts as $item)
               <div class="col-md-6 col-lg-4 ftco-animate">
                  <div class="blog-entry">
                  <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url({{asset($item->featured_img)}});">
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
                      {{-- <div class="d-flex align-items-center mt-4">
                          <p class="mb-0"><a href="{{$item->link()}}" class="btn btn-secondary">Đọc tiếp <span class="ion-ios-arrow-round-forward"></span></a></p>
                          <p class="ml-auto mb-0">
                              <a href="#" class="mr-2">{{$item->user->name}}</a>
                          </p>
                      </div> --}}
                  </div>
                  </div>
              </div>
                @endforeach
                @endif
            </div>
            <div class="row no-gutters my-5">
               <div class="col text-center">
                  <div class="d-flex justify-content-center">
                        {{ $posts->links()}}
                  </div>
               </div>
            </div>
            
         {{-- </div> --}}
          
      </div>
   </div>
</section>
@endsection

