

@if(\App\Category::where('featured',1)->count()>0)
    @foreach(\App\Category::where('featured',1)->get() as $home_category)
         <section class="mb-4">
            <div class="container">
               <div class="bg-white shadow-sm">
                  <div class="row">
                     <div class="container">
                        <div class="title-new">
                           {{$home_category->name}}
                           <a class="" style="float: right;" href="{{$home_category->link()}}" title="{{$home_category->name}}">
                           <i class="fa fa-angle-double-right" aria-hidden="true"></i> Xem thêm</a>
                        </div>
                     </div>                     
                  </div>
                  <div class="row">
                     @foreach (\App\Product::where('published', 1)->where('featured', '1')->where('category_id',$home_category->id)->limit(12)->get() as $key => $product)
                        <div class="col-md-3 col-lg-3 col-6">
                           <div class="item-product p-0">
                  {{-- 
                  <div class="product-btns">
                     <button class="btn add-wishlist" title="Add to Wishlist"
                        onclick="addToWishList({{ $product->id }})">
                     <i class="la la-heart-o"></i>
                     </button>
                     <button class="btn add-compare" title="Add to Compare"
                        onclick="addToCompare({{ $product->id }})">
                     <i class="la la-refresh"></i>
                     </button>
                     <button class="btn quick-view" title="Quick view"
                        onclick="showAddToCartModal({{ $product->id }})">
                     <i class="la la-eye"></i>
                     </button>
                  </div>
                  --}}
                  @if($product->discount>0)
                  <div class="product-sale-tags">
                     <span>{{number_format(100-((($product->unit_price-$product->discount)/$product->unit_price)*100),1)}}%</span>
                  </div>
                  @endif
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
                              @if($product->discount!='')
                                 {{format_price(convert_price($product->unit_price-$product->discount )) }} <del>{{format_price($product->unit_price)}}</del>
                              @else
                                 {{format_price(convert_price($product->unit_price)) }}
                              @endif
                           @else
                          <a href="http://zalo.me/{{\App\GeneralSetting::first()->zalo}}" class="zalo">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                            <span>Zalo: {{\App\GeneralSetting::first()->zalo}}</span>
                          </a>
                          @endif 
                        </div>

                        <p class="dia_chi text-justify">
                           <i class="fas fa-map-marker-alt"></i>
                           {{-- {{$product->address}} - {{\App\Ward::find($product->ward_id)->name}} - {{\App\District::find($product->district_id)->name}} - {{\App\Province::find($product->provice_id)->name}} --}}
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
                          {{--  <div class="item-product ">
                              @if($product->discount>0)
                              <div class="product-sale-tags">
                                 <span>{{number_format(100-((($product->unit_price-$product->discount)/$product->unit_price)*100),1)}}%</span>
                              </div>
                              @endif
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
                                       @if($product->discount!='')
                                       {{format_price(convert_price($product->unit_price-$product->discount )) }} <del>{{format_price($product->unit_price)}}</del>
                                       @else
                                       {{format_price(convert_price($product->unit_price)) }}
                                       @endif
                                       @else
                              <a href="http://zalo.me/{{\App\GeneralSetting::first()->zalo}}" class="zalo">
                              <i class="fa fa-commenting-o" aria-hidden="true"></i>
                              <span>Đặt hàng zalo: {{\App\GeneralSetting::first()->zalo}}</span>
                              </a>
                              @endif
                              </div>
                              </figcaption>
                              </a>
                           </div> --}}
                        </div>
                     @endforeach
                  </div>
               </div>
            
            </div>
         </section>
   @endforeach
@endif

