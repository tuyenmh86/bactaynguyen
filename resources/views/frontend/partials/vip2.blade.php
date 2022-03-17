@php
   $vip2 = \App\Product::where('vip2',1)->where('featured',1)->where('published',1)->get();
@endphp
@if(count(vip2))
<section class="mb-4">
    <div class="container">
       <div class="bg-white shadow-sm">
          <div class="row">
             <div class="container">
                <div class="title-new">
                     DANH SÁCH BẤT ĐỘNG SẢN DÀNH CHO BẠN
                </div>
             </div>
          </div>
          <div class="row">
             @foreach (\App\Product::where('vip2',1)->where('featured',1)->where('published',1)->get() as $product)
 
             <div class="col-md-3 col-lg-3 col-6">
                <div class="item-product p-0">
                   <a href="{{ route('product', $product->slug) }}">
                      <div class="img">
                         <picture>
                            <img class="lazyload img-responsive transition" src="{{ asset($product->thumbnail_img) }}" alt="{{$product->name}}" data-original="{{ asset($product->thumbnail_img) }}">
                         </picture>
                      </div>
                      <figcaption>
                         <h4 class="title-h2 line-clamp">{{$product->name}}</h4>
                         <div class="price">
                            @if($product->unit_price>0)
                                 {{format_price(convert_price($product->unit_price)) }}
                            @else
                                 Thương lượng
                                 {{-- <a href="http://zalo.me/{{\App\GeneralSetting::first()->zalo}}" class="zalo">
                                     <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                     <span>Zalo: {{\App\GeneralSetting::first()->zalo}}</span>
                                 </a> --}}
                             @endif 
                   </div>
                   <p class="dia_chi text-justify">
                   <i class="fas fa-map-marker-alt"></i>
                     {{$product->address}} - {{\App\Ward::find($product->ward_id)->name}} - {{\App\District::find($product->district_id)->name}} - {{\App\Province::find($product->provice_id)->name}}
                   </p>
                   <div class="hourseitem">
                   <p class="threemt bold500">
                   @isset($product->bedroom)
                   <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Phòng ngủ"> <i><img src="{{asset('img/bedroom.png')}}" style="max-height:15px;"></i> <i class="vti">{{$product->bedroom}}</i> </span>
                   @endisset
                   @isset($product->wc)
                   <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Số phòng WC">  <i><img src="{{asset('img/batroom.png')}}" style="max-height:15px;"></i> <i class="vti">{{$product->wc}}</i></span>
                   @endisset
                   @isset($product->huongdat)
                   <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Diện tích"> <i><img src="{{asset('img/huongdat.png')}}" style="max-height:15px;"></i> <i class="vti">{{$product->dientich}}</i> </span>
                   @endisset
                   @isset($product->huongdat)
                   <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Diện tích"> <i><img src="{{asset('img/compass.png')}}" style="max-height:15px;"></i> <i class="vti">{{$product->huongdat}}</i> </span>
                   @endisset 
                   </p>
                   </div>
                   </figcaption>
                   </a>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>
 