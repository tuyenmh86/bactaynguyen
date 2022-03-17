<?php $__env->startSection('content'); ?>


      <section class="search-sec p-4">
        <div class="container">
            <form action="<?php echo e(route('resultAdvanceSearch')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                                <select class="form-control selectpicker" name="provice" id="province_id" data-placeholder="Chọn Tỉnh">
                                    <option value="" selected>Chọn thành phố </option>
                                    <?php $__currentLoopData = \App\Province::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($provice->id); ?>"><?php echo e(__($provice->name)); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                                <select class="form-control mb-3 selectpicker" data-placeholder="Chọn TP/Quận/Huyện" id="district_id" name="district_id">

                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                                <select class="form-control mb-3 selectpicker" data-placeholder="Chọn phường xã" id="ward_id" name="ward_id">
                                    <option value="" selected>Chọn Phường xã </option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                                <select class="form-control mb-3 selectpicker" data-placeholder="Chọn hướng đất" id="huongdat" name="huongdat">
                                    <option value="" selected>Hướng đất </option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                                <input class='form-control' type="text" aria-label="Giá từ" id="min_price" name="min_price"
                                placeholder="Giá từ: 500.000.000 ..." autocomplete="off" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                                <input class='form-control' type="text" aria-label="Giá đến" id="max_price" name="max_price"
                            placeholder="Giá đến: 700.000.000 ..." autocomplete="off" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 p-3">
                                <input class='form-control' type="text" aria-label="Search" id="search" name="q"
                            placeholder="từ khóa tìm kiếm: ..." autocomplete="off" />
                            </div>
                        </div>
                            
                            <div class="input-group-append p-3 mr-3">
                                <button class="btn btn-orange" type="submit">Tìm kiếm</button>
                            </div>
                            <div class="listsuggest stylebar">
                            </div>
                            <div class="typed-search-box d-none">
                                <div class="search-preloader">
                                    <div class="loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="search-nothing d-none">
        
                                </div>
                                <div id="search-content">
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $( ".bt-sharea" ).click(function() {
            var box = $('.sharea').find('.box');
            if (box.hasClass('open')) {
                $(this).parent().find('.box').removeClass('open');
            } else {
                $(this).parent().find('.box').addClass('open');
            }
        });

        $('#province_id').on('change', function() {
            get_district_by_provice();
	    });
        function get_district_by_provice(){
            var province_id = $('#province_id').val();
            $.post('<?php echo e(route('province.get_district')); ?>',{_token:'<?php echo e(csrf_token()); ?>', province_id:province_id}, function(data){
		    $('#district_id').html(null);
            $('#district_id').append('<option> Quận/Huyện<option>');
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
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/advance_search.blade.php ENDPATH**/ ?>