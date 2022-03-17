
@if(isset($category))
<div class="container">
    <div class="p-0 bg-white">
           {{--  <div class="section-title-1 clearfix">
                <h3 class="heading-5 strong-700 mb-0 float-left">
                    <span class="mr-4">Danh mục</span>
                </h3>
            </div> --}}
			<div class="responsive_slick_2row p-0">

	           @foreach(\App\SubCategory ::where('category_id','=',$category->id)->get() as $subcategory)
	                    <div class="product-card-2 card card-product m-1 shop-cards shop-tech p-1">
	                    	 <a href="{{ $subcategory->link() }}">
	            		<div class="card-body p-2">
	            			<div class="card-image">
	                                <a href="{{$category->link()}}" class="d-block" style="background-color:#{{ substr(uniqid(),-6)}}">
	                                </a>
	                            </div>

	                            <div class="p-2">
	                            	<h2 class="product-title p-0 text-truncate-2 text-center" >
	                                    {{ $subcategory->name }}
	                                </h2>
	                            </div>
	                    </div>
	                    </a>
	                </div>
	            @endforeach
    		</div>
    </div>
</div>

@endif

