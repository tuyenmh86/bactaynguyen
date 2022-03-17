
<section class="bg-white">
    <div class="wapper wapper-new">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-12">
                    
                    <div class="title-new">Sự kiện nổi bật <a class="btn btn-primary" href="" title="Tin tức - sự kiện"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a></div>
                    <div class="caorusel-box">  
                        <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="3" data-slick-lg-items="3"  data-slick-md-items="3" data-slick-sm-items="2" data-slick-xs-items="2">
                        
                    @foreach(\App\Post::where('category_id',7)->where('published',1)->where('featured',1)->orderBy('created_at','desc')->get() as $post)
                    <div class="tinright">
                        <a href="{{$post->link()}}" title="{{$post->name}}">
                            <picture>
                                <source media="(max-width: 1023px)" srcset="{{asset($post->featured_img)}}">
                                <source media="(min-width: 1024px)" srcset="{{asset($post->featured_img)}}">
                                <img class="img-responsive" src="{{asset($post->featured_img)}}" alt="{{$post->name}}">
                            </picture>
                        </a>
                        <h5 class="title_h5"><a href="{{$post->link()}}" title="{{$post->name}}">{{$post->name}}</a></h5>
                        {{-- <div class="summany summany-home line-clamp">
                            {{$post->description }}
                        </div> --}}
                    </div>
                    
                    @endforeach
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</section>