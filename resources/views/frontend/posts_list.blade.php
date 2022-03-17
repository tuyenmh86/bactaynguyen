
@extends('frontend.layouts.edu')

@section('content')
    <section class="bg-white p-4">
        
        <div class="container">
                <div class="row">
                <h3 class="news-h2 line-clamp">{{$categorypost->name}}</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                    @foreach ($posts as $item)
                    <div class="col-md-3">
                            <img class="img-thumbnail"  src="{{asset($item->featured_img)}}" alt="{{$item->name}}" style="object-fit: contain;">
                    </div>
                    <div class="col-md-9">
                        <a href="{{$item->link()}}"><h2 class="news-h2 line-clamp">  {{$item->name}} </h3></a>
                        <p class="dia_chi text-justify"> 
                            {{$item->description}}
                        </p>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection
