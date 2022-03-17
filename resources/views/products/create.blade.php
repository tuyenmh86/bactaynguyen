@extends('layouts.app')

@section('content')

<div class="row">
	<form class="form form-horizontal mar-top" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
		@csrf
		<input type="hidden" name="added_by" value="admin">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">{{__('Product Information')}}</h3>
			</div>
			<div class="panel-body">
				<div class="tab-base tab-stacked-left">
				    <!--Nav tabs-->
				    <ul class="nav nav-tabs">
				        <li class="active">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">{{__('General')}}</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-7" aria-expanded="false">{{__('Description')}}</a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">{{__('Images')}}</a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">{{__('Videos')}}</a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-4" aria-expanded="false">{{__('Meta Tags')}}</a>
				        </li>
						{{-- <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-5" aria-expanded="false">{{__('Customer Choice')}}</a>
				        </li> --}}
						{{-- <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-6" aria-expanded="false">{{__('Price')}}</a>
				        </li> --}}
					
						{{-- <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-8" aria-expanded="false">Display Settings</a>
				        </li> --}}
						{{-- <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-9" aria-expanded="false">{{__('Shipping Info')}}</a>
				        </li> --}}
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-10" aria-expanded="false">{{__('PDF Specification')}}</a>
				        </li>
				    </ul>

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Product Name')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="name" placeholder="{{__('Product Name')}}" onchange="update_sku()" required>
								</div>
							</div>
							<div class="form-group" id="category">
								<label class="col-lg-2 control-label">{{__('Category')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{__($category->name)}}</option>
										@endforeach
									</select>
								</div>
                            {{--    <div class="col-lg-7">
                                            <select id="category_id" name="category_id" class="form-control" size="1">
                                                <option value="0">-- {{ trans('back-app.cate_parent') }} --</option>
                                                @if(isset($categories))
                                                    {{recursiveCategorys($categories)}}
                                                @endif
                                            </select>
                                        </div>--}}
                        </div>
							{{-- <div class="form-group" id="subcategory">
								<label class="col-lg-2 control-label">{{__('Subcategory')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id">

									</select>
								</div>
							</div>
							<div class="form-group" id="subsubcategory">
								<label class="col-lg-2 control-label">{{__('Sub Subcategory')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id">

									</select>
								</div>
							</div>
							<div class="form-group" id="brand">
								<label class="col-lg-2 control-label">{{__('Brand')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="brand_id" id="brand_id">

									</select>
								</div>
							</div> --}}
							<div class="form-group">
									<label class="col-lg-2 control-label">Chọn tỉnh <span class="required-star">*</span></label>
								<div class="col-md-7">
									<select class="form-control demo-select2-placeholder" name="province" id="province_id" required>
										@foreach(\App\Province::all() as $provice)
											<option value="{{$provice->id}}">{{__($provice->name)}} </option>
										@endforeach
									</select>
									{{-- <input type="text" class="form-control mb-3" name="name" placeholder="Gia Lai" required> --}}
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Thành phố/Quận/Huyện</label>
								<div class="col-md-7">
									<select class="form-control mb-3 demo-select2-placeholder" data-placeholder="Chọn TP/Quận/Huyện" id="district_id" name="district_id" required>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Phường Xã</label>
								<div class="col-md-7">
									<select class="form-control mb-3 demo-select2-placeholder" data-placeholder="Chọn phường xã" id="ward_id" name="ward_id" required>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="address" placeholder="Địa chỉ bất động sản" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Hướng đất</label>
								<div class="col-lg-7">
									<select id="huongdat" name="huongdat" class="demo-select2-placeholder" aria-describedby="huongdatHelpBlock">
										<option value="Đông">Đông</option>
										<option value="Đông Nam">Đông Nam</option>
										<option value="Đông Bắc">Đông Bắc</option>
										<option value="Tây">Tây</option>
										<option value="Tây Nam">Tây Nam</option>
										<option value="Tây Bắc">Tây Bắc</option>
										<option value="Nam">Nam</option>
										<option value="Bắc">Bắc</option>
									  </select> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-lg-2 control-label">Số phòng ngủ</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="bedroom" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Số phòng vệ sinh</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="wc" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Diện tích</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="dientich" placeholder="" >
								</div>
							</div>
							{{-- <div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ Long google Map</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="Long google map" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ Lat google Map</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="Lat google map" placeholder="" >
								</div>
							</div> --}}
							<div class="form-group">
								<label class="col-lg-2 control-label">Giá bán</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Unit price')}}" name="unit_price" class="form-control" required>
								</div>
							</div>
							{{-- <div class="form-group">
								<label class="col-lg-2 control-label">{{__('Unit')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" required>
								</div>
							</div> --}}
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Tags')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="tags[]" placeholder="Type to add a tag" data-role="tagsinput">
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-7" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Description')}}</label>
								<div class="col-lg-9">
									<textarea class="myEditor" name="description"></textarea>
								</div>
							</div>
				        </div>
				        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">Hình ảnh bất động sản</label>
								<div class="col-lg-7">
									<div id="photos">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Thumbnail Image')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="thumbnail_img">

									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Featured')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="featured_img">

									</div>
								</div>
							</div>
							{{-- <div class="form-group">
								<label class="col-lg-2 control-label">{{__('Flash Deal')}} <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="flash_deal_img">

									</div>
								</div>
							</div> --}}
				        </div>
				        <div id="demo-stk-lft-tab-3" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Video Provider')}}</label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="video_provider" id="video_provider">
										<option value="youtube">{{__('Youtube')}}</option>
										<option value="dailymotion">{{__('Dailymotion')}}</option>
										<option value="vimeo">{{__('Vimeo')}}</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Video Link')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="video_link" placeholder="{{__('Video Link')}}">
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-4" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Meta Title')}}</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="meta_title" placeholder="{{__('Meta Title')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Description')}}</label>
								<div class="col-lg-7">
									<textarea name="meta_description" rows="8" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{ __('Meta Image') }}</label>
								<div class="col-lg-7">
									<div id="meta_photo">

									</div>
								</div>
							</div>
				        </div>

						{{-- <div id="demo-stk-lft-tab-5" class="tab-pane fade">
							<div class="form-group">
								<div class="col-lg-2">
									<input type="text" class="form-control" value="{{__('Colors')}}" disabled>
								</div>
								<div class="col-lg-7">
									<select class="form-control color-var-select" name="colors[]" id="colors" multiple disabled>
										@foreach (\App\Color::orderBy('name', 'asc')->get() as $key => $color)
											<option value="{{ $color->code }}">{{ $color->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-2">
									<label class="switch" style="margin-top:5px;">
										<input value="1" type="checkbox" name="colors_active">
										<span class="slider round"></span>
									</label>
								</div>
							</div>

							<div class="customer_choice_options" id="customer_choice_options">

							</div>
							<div class="form-group">
								<div class="col-lg-2">
									<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">{{ __('Add more customer choice option') }}</button>
								</div>
							</div>
				        </div> --}}

						{{-- <div id="demo-stk-lft-tab-6" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Unit price')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Unit price')}}" name="unit_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Purchase price')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Purchase price')}}" name="purchase_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Tax')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Tax')}}" name="tax" class="form-control" required>
								</div>
								<div class="col-lg-1">
									<select class="demo-select2" name="tax_type">
										<option value="amount">$</option>
										<option value="percent">%</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('Discount')}}</label>
								<div class="col-lg-7">
									<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Discount')}}" name="discount" class="form-control" required>
								</div>
								<div class="col-lg-1">
									<select class="demo-select2" name="discount_type">
										<option value="amount">$</option>
										<option value="percent">%</option>
									</select>
								</div>
							</div>
							<br>
							<div class="sku_combination" id="sku_combination">

							</div>
				        </div> --}}
						

						{{-- <div id="demo-stk-lft-tab-8" class="tab-pane fade">

				        </div> --}}

						<div id="demo-stk-lft-tab-9" class="tab-pane fade">
							<div class="row bord-btm">
								<div class="col-md-2">
									<div class="panel-heading">
										<h3 class="panel-title">{{__('Free Shipping')}}</h3>
									</div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Status')}}</label>
										<div class="col-lg-7">
											<label class="switch" style="margin-top:5px;">
												<input type="radio" name="shipping_type" value="free" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row bord-btm">
								<div class="col-md-2">
									<div class="panel-heading">
										<h3 class="panel-title">{{__('Local Pickup')}}</h3>
									</div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Status')}}</label>
										<div class="col-lg-7">
											<label class="switch" style="margin-top:5px;">
												<input type="radio" name="shipping_type" value="local_pickup" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Shipping cost')}}</label>
										<div class="col-lg-7">
											<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Shipping cost')}}" name="local_pickup_shipping_cost" class="form-control" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="panel-heading">
										<h3 class="panel-title">{{__('Flat Rate')}}</h3>
									</div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Status')}}</label>
										<div class="col-lg-7">
											<label class="switch" style="margin-top:5px;">
												<input type="radio" name="shipping_type" value="flat_rate" checked>
												<span class="slider round"></span>
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">{{__('Shipping cost')}}</label>
										<div class="col-lg-7">
											<input type="number" min="0" value="0" step="0.01" placeholder="{{__('Shipping cost')}}" name="flat_shipping_cost" class="form-control" required>
										</div>
									</div>
								</div>
							</div>

				        </div>
						<div id="demo-stk-lft-tab-10" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label">{{__('PDF Specification')}}</label>
								<div class="col-lg-7">
									<input type="file" class="form-control" placeholder="{{__('PDF')}}" name="pdf" accept="application/pdf">
								</div>
							</div>
				        </div>
				    </div>
				</div>
			</div>
			<div class="panel-footer text-right">
				<button type="submit" name="button" class="btn btn-info">{{ __('Save') }}</button>
			</div>
		</div>
	</form>
</div>


@endsection

@section('script')
    {{-- // ****************** BEGIN:: FUNCTION FILES ***************** --}}

    <script src="{{asset('vendor/file-manager/js/file-manager.js')}}"></script>

    <script type="text/javascript">

        // $('#lfm').filemanager('image');

        $('[class*="lfm"]').each(function() {

            $(this).filemanager('image');

        });
    </script>
<script type="text/javascript">
	var i = 0;
	function add_more_customer_choice_option(){
		$('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div><div class="col-lg-2"><button onclick="delete_row(this)" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></button></div></div>');
		i++;
		$("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
	}

	$('input[name="colors_active"]').on('change', function() {
	    if(!$('input[name="colors_active"]').is(':checked')){
			$('#colors').prop('disabled', true);
		}
		else{
			$('#colors').prop('disabled', false);
		}
		update_sku();
	});

	$('#colors').on('change', function() {
	    update_sku();
	});

	$('input[name="unit_price"]').on('keyup', function() {
	    update_sku();
	});

	$('input[name="name"]').on('keyup', function() {
	    update_sku();
	});

	function delete_row(em){
		$(em).closest('.form-group').remove();
		update_sku();
	}

	// function update_sku(){
	// 	$.ajax({
	// 	   type:"POST",
	// 	   url:'{{ route('products.sku_combination') }}',
	// 	   data:$('#choice_form').serialize(),
	// 	   success: function(data){
	// 		   $('#sku_combination').html(data);
	// 	   }
	//    });
	// }
		$('#province_id').on('change', function() {
            get_district_by_provice();
	    });
		function get_district_by_provice(){
            var province_id = $('#province_id').val();
            $.post('{{ route('province.get_district') }}',{_token:'{{ csrf_token() }}', province_id:province_id}, function(data){
		    $('#district_id').html(null);
            $('#district_id').append('<option> Chọn Quận Huyện <option>');
		    for (var i = 0; i < data.length; i++) {
                $('#district_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    });
            
        }
        $('#district_id').on('change', function() {
            get_wards_by_district();
	    });
        function get_wards_by_district(){
            var district_id = $('#district_id').val();
            $.post('{{ route('district.getWards') }}',{_token:'{{ csrf_token() }}', district_id:district_id}, function(data){
		    $('#ward_id').html(null);
            $('#ward_id').append('<option> Chọn phường xã <option>');
		    for (var i = 0; i < data.length; i++) {
		        $('#ward_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    });
        }
	function get_subcategories_by_category(){
		var category_id = $('#category_id').val();
		$.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
		    $('#subcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		});
        // get_brands_by_subsubcategory(category_id);
	}

	function get_subsubcategories_by_subcategory(){
		var subcategory_id = $('#subcategory_id').val();
		$.post('{{ route('categories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
		    $('#subsubcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subsubcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    get_brands_by_subsubcategory(subcategory_id);
		});
	}
    function get_brands_by_subsubcategory(){
        var subsubcategory_id = $('#subsubcategory_id').val();
        $.post('{{ route('categories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
            $('#brand_id').html(null);

            for (var i = 0; i < data.length; i++) {
                $('#brand_id').append($('<option>', {
                    value: data[i].id,
                    text: data[i].name
                }));

                $('.demo-select2').select2();
            }
            $('#brand_id').append($('<option>  --- </option>'));
        });
    }
	function get_brands_by_subsubcategory(category_id){
	    if(!category_id){
            var category_id = $('#subsubcategory_id').val();
        }
		$.post('{{ route('categories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
            $('#brand_id').html(null);

		    for (var i = 0; i < data.length; i++) {
		        $('#brand_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
                }));

		        $('.demo-select2').select2();
            }
            $('#brand_id').append($('<option>  --- </option>'));
		});
	}

	$(document).ready(function(){
		$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
	    get_subcategories_by_category();
		$("#photos").spartanMultiImagePicker({
			fieldName:        'photos[]',
			maxCount:         10,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#thumbnail_img").spartanMultiImagePicker({
			fieldName:        'thumbnail_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#featured_img").spartanMultiImagePicker({
			fieldName:        'featured_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#flash_deal_img").spartanMultiImagePicker({
			fieldName:        'flash_deal_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#meta_photo").spartanMultiImagePicker({
			fieldName:        'meta_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
	});

	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
	    get_brands_by_subsubcategory();
	});


</script>

@endsection
