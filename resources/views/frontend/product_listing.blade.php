@extends('frontend.layouts.app')

@section('content')
{{-- @include('frontend.partials.subCategoryList') --}}
    <section class="bg-white mt-4">
        
            <div class="container bg-white pb-4">
                <div class="row">
                    @isset($category)
                        {{-- <div class="col-md-2 col-lg-2 col-12 side-bar-left" style="float: left;">
                            <ul class="navbar-nav">
                                @foreach(\App\SubCategory ::where('category_id','=',$category->id)->get() as $subcategory)
                                <li class="nav-item"> <a class="nav-link" href="{{$subcategory->link()}}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}
                        <div class="title-new">
                            {{$category->name}}
                            <a class="" style="float: right;" href="{{$category->link()}}" title="{{$category->name}}">
                         </div>
                    @endisset
                {{-- @if (isset($category))
                    <div class="col-md-10 col-lg-10 col-12 side-bar-right" style="float: right">
                @else --}}
                    <div class="container">
                {{-- @endif --}}
                    <div class="row sm-no-gutters gutters-5">
                        @foreach ($products as $key => $product)
                            <div class="col-md-2 col-lg-2 col-6">
                                <div class="item-product ">
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
                                                @if($product->discount!='')
                                                    {{format_price(convert_price($product->unit_price-$product->discount )) }} <del>{{format_price($product->unit_price)}}</del>
                                                @else
                                                    @if($product->unit_price>0)
                                                    {{format_price(convert_price($product->unit_price)) }}
                                                    @else
                                                        Liên Hệ
                                                    @endif
                                                @endif
                                            </div>
                                        </figcaption>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav aria-label="Center aligned pagination">
                        <ul class="pagination justify-content-center">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
                
                   
            </div>
            <hr/>
        </div>
    </section>
    
    <section class="bg-white mt-4">
        <div class="container">
            @isset($category)
                <p class="p-3">{!! $category->description !!}</p>
            @endisset
        </div>
    </section>
@endsection
