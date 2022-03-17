@extends('frontend.layouts.app')

@section('content')
    <section class="home-banner-area bg-white">
        <div class="container-fluit">
            <div class="home-slide">
                <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
                    @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                        <div class="">
                            <img class="img-responsive w-100" src="{{ asset($slider->photo) }}" alt="Slider Image">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white mt-4">
        <div class="row">
            <div class="container">
                <div class="col-md-9 col-sm-12 col-xs-12 content-right pull-right">
                    {!! \App\Page::where('alias', 'gioi-thieu')->first()->content !!}

                </div>
                <div class="col-md-3 col-xs-12 pull-left content-left hidden-xs hidden-sm">
                    @foreach(App\Category::where('id',73)->get() as $category)
                        @foreach($category->subcategories as $subcategory)
                            <div class="box_left">
                                <h2 class="title-left">
                                    <a href="{{$subcategory->link()}}" title="{{$subcategory->name}}"><i class="fa fa-bullseye" aria-hidden="true"></i> {{$subcategory->name}}</a>
                                </h2>
                                <ul>
                                    @foreach($subcategory->subsubcategories as $subsubcategory)
                                        <li><h3 class="title_h3 transition"><a href="{{$subsubcategory->link()}}" title="{{$subsubcategory->name}}"><i class="fa fa-angle-right" aria-hidden="true"></i> {{$subsubcategory->name}}</a></h3></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

        </div>

    </section>

    <section class="bg-white">

        <div class="wapper wapper-new">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="title-new">Tin tức - sự kiện <a class="btn btn-primary" href="" title="Tin tức - sự kiện"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a></div>
                        @foreach(\App\Post::where('category_id',7)->limit(3)->orderBy('created_at','desc')->get() as $post)
                            <div class="tinright">
                                <a href="{{$post->link()}}" title="{{$post->name}}">
                                    <picture>
                                        <source media="(max-width: 1023px)" srcset="{{asset($post->featured_img)}}">
                                        <source media="(min-width: 1024px)" srcset="{{asset($post->featured_img)}}">
                                        <img class="img-responsive" src="{{asset($post->featured_img)}}" alt="{{$post->name}}">
                                    </picture>
                                </a>
                                <h5 class="title_h5"><a href="{{$post->link()}}" title="{{$post->name}}">{{$post->name}}</a></h5>
                                <div class="summany summany-home line-clamp">
                                    {{$post->description }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">

                        <div class="title-new">Dự án thực hiện <a class="btn btn-primary" href="" title="Dự án thực hiện"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a></div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach(\App\Post::where('category_id',7)->limit(10)->orderBy('created_at','desc')->get() as $key=>$value)
                                <div class="panel panel-default">
                                    <div id="collapse{{$key}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$key}}">
                                        <div class="panel-body">
                                            <a href="{{$value->link()}}" title="{{$value->name}}">
                                                <picture>
                                                    <source media="(min-width: 1024px)" srcset="{{asset($value->featured_img)}}">
                                                    <img class="img-responsive" src="{{asset($value->featured_img)}}" alt="{{$value->name}}">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-heading active" role="tab" id="heading{{$key}}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">{{$value->name}}</a>
                                        </h4>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <script>
                            $('.panel-collapse').on('show.bs.collapse', function () {
                                $(this).siblings('.panel-heading').addClass('active');
                            });
                            $('.panel-collapse').on('hide.bs.collapse', function () {
                                $(this).siblings('.panel-heading').removeClass('active');
                            });
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-9 col-xs-8 cskh">
                        <span>HOT LINE:</span> <a href="tel:{{\App\GeneralSetting::first()->phone}}" title="{{\App\GeneralSetting::first()->phone}}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>{{\App\GeneralSetting::first()->phone}}</a>
                        <a href="tel:" title=""><i class="fa fa-fax" aria-hidden="true"></i> </a>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
