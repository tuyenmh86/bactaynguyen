<?php $__env->startSection('content'); ?>

<div class="row">
	<form class="form form-horizontal mar-top" action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data" id="choice_form">
		<input name="_method" type="hidden" value="POST">
		<input type="hidden" name="id" value="<?php echo e($product->id); ?>">
		<?php echo csrf_field(); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo e(__('Product Information')); ?></h3>
			</div>
			<div class="panel-body">
				<div class="tab-base tab-stacked-left">
				    <!--Nav tabs-->
				    <ul class="nav nav-tabs">
						<li class="active">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true"><?php echo e(__('General')); ?></a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false"><?php echo e(__('Images')); ?></a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false"><?php echo e(__('Videos')); ?></a>
				        </li>
				        <li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-4" aria-expanded="false"><?php echo e(__('Meta Tags')); ?></a>
				        </li>
						
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-6" aria-expanded="false"><?php echo e(__('Price')); ?></a>
				        </li>
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-7" aria-expanded="false"><?php echo e(__('Description')); ?></a>
				        </li>
						
						
						<li class="">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-10" aria-expanded="false"><?php echo e(__('PDF Specification')); ?></a>
				        </li>
				    </ul>

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Product Name')); ?></label>
	                            <div class="col-lg-7">
	                                <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Product Name')); ?>" value="<?php echo e($product->name); ?>" required>
	                            </div>
	                        </div>
	                        <div class="form-group" id="category">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Category')); ?></label>
	                            <div class="col-lg-7">

                                    <select id="category_id" name="category_id" class="form-control demo-select2-placeholder" >
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>" <?php echo e($product->category->id==$category->id?'selected':''); ?>><?php echo e(__($category->name)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
	                            </div>
	                        </div>
	                        
							<div class="form-group">
								<label class="col-lg-2 control-label">Chọn tỉnh <span class="required-star">*</span></label>
							<div class="col-md-7">
								<select class="form-control demo-select2-placeholder" name="province" id="province_id" required>
									<?php $__currentLoopData = \App\Province::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($provice->id); ?>" <?php echo e($product->provice_id==$provice->id?'selected':''); ?>><?php echo e(__($provice->name)); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Thành phố/Quận/Huyện</label>
							<div class="col-md-7">
								<select class="form-control mb-3 demo-select2-placeholder" data-placeholder="Chọn TP/Quận/Huyện" id="district_id" name="district_id" required>
									<?php $__currentLoopData = \App\District::where('province_id',$product->provice_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($district->id); ?> <?php echo e($product->district_id==$district->id?'selected':''); ?>"><?php echo e(\App\District::find($district->id)->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Phường Xã</label>
							<div class="col-md-7">
								<select class="form-control mb-3 demo-select2-placeholder" data-placeholder="Chọn phường xã" id="ward_id" name="ward_id" required>
									<?php $__currentLoopData = \App\Ward::where('district_id',$product->district_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($ward->id); ?> <?php echo e($product->ward_id==$ward->id?'selected':''); ?>"><?php echo e(\App\Ward::find($product->ward_id)->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="address" placeholder="Địa chỉ bất động sản" value="<?php echo e($product->address); ?>" required>
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
									<input type="text" class="form-control" name="bedroom" value="<?php echo e($product->bedroom); ?>" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Số phòng vệ sinh</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="wc" value="<?php echo e($product->wc); ?>" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Diện tích</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="dientich" value="<?php echo e($product->dientich); ?>" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ Long google Map</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="Long google map" value="<?php echo e($product->long); ?>" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label">Địa chỉ Lat google Map</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="Lat google map"  value="<?php echo e($product->lat); ?>" placeholder="" >
								</div>
							</div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Unit')); ?></label>
	                            <div class="col-lg-7">
	                                <input type="text" class="form-control" name="unit" placeholder="Unit (e.g. KG, Pc etc)" value="<?php echo e($product->unit); ?>">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Tags')); ?></label>
	                            <div class="col-lg-7">
	                                <input type="text" class="form-control" name="tags[]" id="tags" value="<?php echo e($product->tags); ?>" placeholder="Type to add a tag" data-role="tagsinput">
	                            </div>
	                        </div>
				        </div>
				        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Main Images')); ?></label>
								<div class="col-lg-7">
									<div id="photos">
										<?php if(is_array(json_decode($product->photos))): ?>
											<?php $__currentLoopData = json_decode($product->photos); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="img-upload-preview">
														<img src="<?php echo e(asset($photo)); ?>" alt="" class="img-responsive">
														<input type="hidden" name="previous_photos[]" value="<?php echo e($photo); ?>">
														<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
													</div>
												</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Thumbnail Image')); ?> <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="thumbnail_img">
										<?php if($product->thumbnail_img != null): ?>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="img-upload-preview">
													<img src="<?php echo e(asset($product->thumbnail_img)); ?>" alt="" class="img-responsive">
													<input type="hidden" name="previous_thumbnail_img" value="<?php echo e($product->thumbnail_img); ?>">
													<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Featured')); ?> <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="featured_img">
										<?php if($product->featured_img != null): ?>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="img-upload-preview">
													<img src="<?php echo e(asset($product->featured_img)); ?>" alt="" class="img-responsive">
													<input type="hidden" name="previous_featured_img" value="<?php echo e($product->featured_img); ?>">
													<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Flash Deal')); ?> <small>(290x300)</small></label>
								<div class="col-lg-7">
									<div id="flash_deal_img">
										<?php if($product->flash_deal_img != null): ?>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="img-upload-preview">
													<img src="<?php echo e(asset($product->flash_deal_img)); ?>" alt="" class="img-responsive">
													<input type="hidden" name="previous_flash_deal_img" value="<?php echo e($product->flash_deal_img); ?>">
													<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
				        </div>
				        <div id="demo-stk-lft-tab-3" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Video Provider')); ?></label>
								<div class="col-lg-7">
									<select class="form-control demo-select2-placeholder" name="video_provider" id="video_provider">
										<option value="youtube" <?php if($product->video_provider == 'youtube') echo "selected";?> ><?php echo e(__('Youtube')); ?></option>
										<option value="dailymotion" <?php if($product->video_provider == 'dailymotion') echo "selected";?> ><?php echo e(__('Dailymotion')); ?></option>
										<option value="vimeo" <?php if($product->video_provider == 'vimeo') echo "selected";?> ><?php echo e(__('Vimeo')); ?></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Video Link')); ?></label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="video_link" value="<?php echo e($product->video_link); ?>" placeholder="Video Link">
								</div>
							</div>
				        </div>
						<div id="demo-stk-lft-tab-4" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Meta Title')); ?></label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="meta_title" value="<?php echo e($product->meta_title); ?>" placeholder="<?php echo e(__('Meta Title')); ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Description')); ?></label>
								<div class="col-lg-7">
									<textarea name="meta_description" rows="8" class="form-control"><?php echo e($product->meta_description); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Meta Image')); ?></label>
								<div class="col-lg-7">
									<div id="meta_photo">
										<?php if($product->meta_img != null): ?>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="img-upload-preview">
													<img src="<?php echo e(asset($product->meta_img)); ?>" alt="" class="img-responsive">
													<input type="hidden" name="previous_meta_img" value="<?php echo e($product->meta_img); ?>">
													<button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
				        </div>
						
						<div id="demo-stk-lft-tab-6" class="tab-pane fade">
							<div class="form-group">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Unit price')); ?></label>
	                            <div class="col-lg-7">
	                                *<input type="text" placeholder="<?php echo e(__('Unit price')); ?>" name="unit_price" class="form-control" value="<?php echo e($product->unit_price); ?>" required>
	                            </div>
	                        </div>
	                        
				        </div>
						<div id="demo-stk-lft-tab-7" class="tab-pane fade">
							<div class="form-group">
	                            <label class="col-lg-2 control-label"><?php echo e(__('Description')); ?></label>
	                            <div class="col-lg-9">
	                                <textarea class="myEditor" name="description"><?php echo e($product->description); ?></textarea>
	                            </div>
	                        </div>
				        </div>
						
						
						<div id="demo-stk-lft-tab-10" class="tab-pane fade">
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('PDF Specification')); ?></label>
								<div class="col-lg-7">
									<input type="file" class="form-control" placeholder="<?php echo e(__('PDF')); ?>" name="pdf" accept="application/pdf">
								</div>
							</div>
				        </div>
				    </div>
				</div>
			</div>
			<div class="panel-footer text-right">
				<button type="submit" name="button" class="btn btn-info"><?php echo e(__('Save')); ?></button>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>

	<script type="text/javascript">

		// $('#lfm').filemanager('image');

		$('[class*="lfm"]').each(function() {

			$(this).filemanager('image');

		});
	</script>

    <script type="text/javascript">

        var i = $('input[name="choice_no[]"').last().val();
        if(isNaN(i)){
            i =0;
        }

        function add_more_customer_choice_option(){
            i++;
            $('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div><div class="col-lg-2"><button onclick="delete_row(this)" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></button></div></div>');
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

        function delete_row(em){
            $(em).closest('.form-group').remove();
            update_sku();
        }

        function update_sku(){
            $.ajax({
                type:"POST",
                url:'<?php echo e(route('products.sku_combination_edit')); ?>',
                data:$('#choice_form').serialize(),
                success: function(data){
                    $('#sku_combination').html(data);
                }
            });
        }

		$('#province_id').on('change', function() {
            get_district_by_provice();
	    });
		function get_district_by_provice(){
            var province_id = $('#province_id').val();
            $.post('<?php echo e(route('province.get_district')); ?>',{_token:'<?php echo e(csrf_token()); ?>', province_id:province_id}, function(data){
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
            $.post('<?php echo e(route('district.getWards')); ?>',{_token:'<?php echo e(csrf_token()); ?>', district_id:district_id}, function(data){
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
            $.post('<?php echo e(route('subcategories.get_subcategories_by_category')); ?>',{_token:'<?php echo e(csrf_token()); ?>', category_id:category_id}, function(data){
                $('#subcategory_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#subcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#subcategory_id > option").each(function() {
                    if(this.value == '<?php echo e($product->subcategory_id); ?>'){
                        $("#subcategory_id").val(this.value).change();
                    }
                });

                $('.demo-select2').select2();

                get_subsubcategories_by_subcategory();
            });
        }

        function get_subsubcategories_by_subcategory(){
            var subcategory_id = $('#subcategory_id').val();
            $.post('<?php echo e(route('subsubcategories.get_subsubcategories_by_subcategory')); ?>',{_token:'<?php echo e(csrf_token()); ?>', subcategory_id:subcategory_id}, function(data){
                $('#subsubcategory_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#subsubcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#subsubcategory_id > option").each(function() {
                    if(this.value == '<?php echo e($product->subsubcategory_id); ?>'){
                        $("#subsubcategory_id").val(this.value).change();
                    }
                });

                $('.demo-select2').select2();

                get_brands_by_subsubcategory();
            });
        }

        function get_brands_by_subsubcategory(){
            var subsubcategory_id = $('#subsubcategory_id').val();
            $.post('<?php echo e(route('subsubcategories.get_brands_by_subsubcategory')); ?>',{_token:'<?php echo e(csrf_token()); ?>', subsubcategory_id:subsubcategory_id}, function(data){
                $('#brand_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#brand_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#brand_id > option").each(function() {
                    if(this.value == '<?php echo e($product->brand_id); ?>'){
                        $("#brand_id").val(this.value).change();
                    }
                });

                $('.demo-select2').select2();

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

            $('.remove-files').on('click', function(){
                $(this).parents(".col-md-4").remove();
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/products/edit.blade.php ENDPATH**/ ?>