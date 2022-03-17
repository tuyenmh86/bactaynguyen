@extends('frontend.layouts.edu')
@section('style')

@endsection
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="{{config('app.name')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="main-content">

        <div class="container-fluid photos">

        <div class="row pt-4 mb-5 text-center">
            <div class="col-12">
            <h2 class="mb-4">Album {{$photos[0]->album->name}}</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            @foreach ($photos as $key=>$item)
                <div class="" data-aos="fade-up" style="padding:5px;">
                    <a href="{{asset($item->photo)}}" class="d-block photo-item" data-fancybox="gallery">
                        <img src="{{asset($item->photo)}}" alt="Image" class="img-fluid">
                        <div class="photo-text-more">
                        <span class="icon icon-search"></span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        </div>
    </div>
    </div>
</div>
   
  @endsection
