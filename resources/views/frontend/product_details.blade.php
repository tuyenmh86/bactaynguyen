

@extends('frontend.layouts.app')
@section('meta_title'){{ $product->meta_title }}@stop
@section('meta_description'){{ $product->meta_description }}@stop
@section('meta_keywords'){{ $product->tags }}@stop
@section('meta')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $product->meta_title }}">
<meta itemprop="description" content="{{ $product->meta_description }}">
<meta itemprop="image" content="{{ asset($product->meta_img) }}">
<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="{{ $product->meta_title }}">
<meta name="twitter:description" content="{{ $product->meta_description }}">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image" content="{{ asset($product->meta_img) }}">
<meta name="twitter:data1" content="{{ single_price($product->unit_price) }}">
<meta name="twitter:label1" content="Price">
<!-- Open Graph data -->
<meta property="og:title" content="{{ $product->meta_title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ route('product', $product->slug) }}" />
<meta property="og:image" content="{{ asset($product->meta_img) }}" />
<meta property="og:description" content="{{ $product->meta_description }}" />
<meta property="og:site_name" content="{{ env('APP_NAME') }}" />
<meta property="og:price:amount" content="{{ single_price($product->unit_price) }}" />
@endsection
@section('content')
<!-- SHOP GRID WRAPPER -->
@php
$sitesetting = \App\GeneralSetting::first();
@endphp
<section class="bg-white">
    <div class="container">
        <div class="home-slide">
            <div class="caorusel-box">  
                <div class="slick-carousel" data-slick-items="3" data-slick-xl-items="3" data-slick-lg-items="3"  data-slick-md-items="3" data-slick-sm-items="2" data-slick-xs-items="1">
                   
            @foreach (json_decode($product->photos) as $key => $photo)
            <div class="product-photo">
                <picture>
                    <source media="(max-width: 1023px)" srcset="{{asset($photo)}}">
                    <source media="(min-width: 1024px)" srcset="{{asset($photo)}}">
                    <img class="img-responsive" src="{{asset($photo)}}" alt="">
                </picture>
            </div>
            @endforeach
        
                </div>
            </div>
        </div>
    </div>
    

    <div class="container w90 pt-4">
    <h1 class="titlehouse" id="house-89620">{{$product->name}}</h1>
    <p class="addresshouse"><i class="fas fa-map-marker-alt"></i>{{$product->address}} - {{\App\Ward::find($product->ward_id)->name}} - {{\App\District::find($product->district_id)->name}} - {{\App\Province::find($product->provice_id)->name}}</p>
    <p class="pricehouse">
        {{format_price(convert_price($product->unit_price)) }}
    </p>
    <div class="row">
        <div class="col-md-8">
            <div class="row" style="padding-top: 15px;">
                <div class="col-sm-12">
                <h5 class="headifhouse">Thông tin chính</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-6 col-sm-3">Diện tích</div>
                            <div class="col-6 col-sm-3"><b>{{$product->dientich}}</b></div>
                            <div class="col-6 col-sm-3">Mã BDS:</div>
                            <div class="col-6 col-sm-3"><b>{{$product->id}}</b></div>
                            <div class="col-6 col-sm-3">Phòng ngủ</div>
                            <div class="col-6 col-sm-3"><b>{{$product->bedroom}}</b></div>
                            <div class="col-6 col-sm-3">Giá</div>
                            <div class="col-6 col-sm-3"><b>{{format_price(convert_price($product->unit_price))}}</b></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <h5 class="headifhouse">Mô tả</h5>
                <div>
                    <p>{!!$product->description!!}</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="boxright">
                <div class="head">
                Liên hệ người bán
                </div>
                <div class="row itemagent">
                <div class="col-sm-4">
                    <a href="#">
                    <img src="https://images.cenhomes.vn/2019/09/1567563102-cenhomes.jpg" alt="null" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-sm-8">
                    <div class="info">
                        <a href="#">{{$product->user->name}}</a>
                        <p class="mobile">{{$product->user->phone}}</p>
                        <p class="email">{{$product->user->email}}</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="xem-bieu-gia">
            </div>
            <div class="boxright">
                <form action="{{route('gui-lien-he')}}" enctype="multipart/form-data"
                                  id="form-sec" method="post" accept-charset="utf-8">
                                @csrf
                <input type="hidden" value="{{$product->id}}" name="bds_id" id="bds_id">
                <input type="hidden" value="{{$product->link()}}" name="urlback" id="urlback">
                <div class="head">Liên hệ tư vấn</div>
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control " placeholder="Họ và tên *">
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control " placeholder="Số điện thoại *">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control " placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="title" class="form-control " placeholder="Tiêu đề *" value="{{$product->name}}" readonly="">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control " rows="5" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-orange btn-block">Gửi liên hệ</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container w90">
        <div class="my-4 bg-white">
            <div class="section-title-1">
                <h3 class="heading-5 strong-700 mb-0">
                    <span class="mr-4">Bất động sản cùng khu vực</span>
                </h3>
            </div>
            <div class="caorusel-box">
                <div class="responsive_slick_2row" data-slick-items="4" data-slick-xl-items="4" data-slick-lg-items="4"  data-slick-md-items="4" data-slick-sm-items="2" data-slick-xs-items="2"  data-slick-rows="1">
                    @foreach (filter_products(\App\Product::where('ward_id', $product->ward_id)->where('id', '!=', $product->id))->get() as $key => $related_product)
                       <div class="item-product p-0">
      
      <a href="{{ route('product', $related_product->slug) }}">
         <div class="img">
            <picture>
               <img class="lazyload img-responsive transition" src="{{ asset($related_product->thumbnail_img) }}" alt="{{$related_product->name}}" data-original="{{ asset($related_product->thumbnail_img) }}">
            </picture>
         </div>
         <figcaption>
            <h4 class="title-h2 line-clamp">{{$related_product->name}}</h4>
            <div class="price">
               @if($related_product->unit_price>0)
               @if($related_product->discount!='')
               {{format_price(convert_price($related_product->unit_price-$related_product->discount )) }} <del>{{format_price($related_product->unit_price)}}</del>
               @else
               {{format_price(convert_price($related_product->unit_price)) }}
               @endif
               @else
              <a href="http://zalo.me/{{\App\GeneralSetting::first()->zalo}}" class="zalo">
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                <span>Zalo: {{\App\GeneralSetting::first()->zalo}}</span>
              </a>
              @endif 
            </div>
      </figcaption>
      </a>
   </div>
                    @endforeach
                        {{-- @foreach (filter_products(\App\Product::where('category_id', $product->category_id)->where('id', '!=', $product->id))->get() as $key => $related_product)
                            <div class="col-md-3 col-lg-3 col-6">
                                <div class="item-product ">
                                    @if($related_product->discount!='')
                                        <div class="product-sale-tags">
                                            <span>{{number_format(100-((($related_product->unit_price-$related_product->discount)/$related_product->unit_price)*100),1)}}%</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('product', $related_product->slug) }}">
                                        <div class="img">
                                            <picture>
                                                <img class="lazyload img-responsive transition" src="{{ asset($related_product->thumbnail_img) }}" alt="{{$related_product->name}}" data-original="{{ asset($related_product->thumbnail_img) }}">
                                            </picture>
                                        </div>
                                        <figcaption>
                                            <h4 class="title-h2 line-clamp">{{$related_product->name}}</h4>
                                            <div class="price">
                                                @if($related_product->discount!='')
                                                    {{format_price(convert_price($related_product->unit_price-$related_product->discount )) }} <del>{{format_price($related_product->unit_price)}}</del>
                                                @else
                                                    {{format_price(convert_price($related_product->unit_price)) }}
                                                @endif
                                            </div>
                                        </figcaption>
                                    </a>
                                </div>
                            </div>

                        @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function() {
   
       getVariantPrice();
   
       $('#share').share({
           networks: ['facebook','twitter','linkedin'],
           theme: 'square'
       });
   });
   
</script>
@endsection

