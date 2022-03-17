@extends('frontend.layouts.edu')
@section('style')

@endsection
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="{{config('app.name')}}">

<meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
<meta property="og:url"             content="{{$post->link()}}"/> 
<meta property="og:title"           content="{{$post->name}}" /> 
<meta property="og:image"           content="{{asset($post->featured_img)}}" /> 
<meta property="og:image:alt"           content="{{$post->name}}" /> 
<meta property="og:description"    content="{{$post->description}}" />
@endsection
@section('content')


{{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset($post->category->banner)}}');">
    <div class="overlay"></div>
    <div class="container">
       <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
             <h1 class="mb-2 bread">{{$post->category->name}}</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$post->category->name}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
       </div>
    </div>
 </section> --}}

<section class="ftco-section">
   <div class="container">
      <div class="row">
         <div class="col-12 ftco-animate">
            <h2 class="mb-3">{{$post->name}}</h2>
            <p>Nội dung tin: {{$post->description}}</p>
            <div class="post-content">
               <p class="p-content">{!!$post->content!!}</p>
            </div>
            <p>Lượt xem: {{$post->view}}</p>
         </div>
         
         <div class="fb-share-button" 
         data-href="{{$post->link()}}" 
         data-layout="button_count">
         </div>
         <div class="zalo-share-button" data-href="{{$post->link()}}" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
      </div>
      <div class="row">
         <div class="col-12 ftco-animate">
            <h3>Tin tức khác</h3>
            <ul>
               @foreach (\App\Post::where('category_id',$post->category_id)->where('published',1)->orderBy('created_at','desc')->take(10)->get() as $oitem)
               <li class="">
                  <div class="row">
                     <div class="col-md-8 col-sm-12 col-xs-12 col-lg-8"><a href="{{$oitem->link()}}">{{$oitem->name}}</a></div>
                     <div class="col-md-4 col-lg-4">{{$oitem->created_at->format('d.m.Y')}}</div>
                  </div>
                </li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
</section>

@endsection

