<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e(__('Home Categories')); ?></h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="<?php echo e(route('home_categories.update', $homeCategory->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="PATCH">
        <div class="panel-body">
            <div class="form-group" id="category">
                <label class="col-lg-2 control-label"><?php echo e(__('Category')); ?></label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
                        <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if($homeCategory->category_id == $category->id) echo "selected"; ?>><?php echo e(__($category->name)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group" id="subcategory">
                <label class="col-lg-2 control-label"><?php echo e(__('Subcategory')); ?></label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-max-7" name="subcategories[]" id="subcategory_id" data-placeholder="Choose Options (max 7)" multiple required>

                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-purple" type="submit"><?php echo e(__('Save')); ?></button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>

<script type="text/javascript">

    $(document).ready(function(){

        get_edit_subcategories_by_category();

        $('#category_id').on('change', function() {
            get_edit_subcategories_by_category();
        });

        function get_edit_subcategories_by_category(){
            var category_id = $('#category_id').val();
            $.post('<?php echo e(route('home_categories.get_subcategories_by_category')); ?>',{_token:'<?php echo e(csrf_token()); ?>', category_id:category_id}, function(data){
                $('#subcategory_id').html(null);
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    $('#subcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name +' ('+data[i].number_of_products+' products)'
                    }));
                }

                $("#subcategory_id > option").each(function() {

                    <?php $__currentLoopData = json_decode($homeCategory->subcategories); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        if(this.value == '<?php echo e($id); ?>'){
                            $(this).prop('selected', true);
                        }
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                });
                $(".demo-select2-max-7").select2({
                    maximumSelectionLength: 7
                });
            	$(".demo-select2-max-7").on("select2:select", function (evt) {
            		  var element = evt.params.data.element;
            		  var $element = $(element);

            		  $element.detach();
            		  $(this).append($element);
            		  $(this).trigger("change");
            	});
            });
        }
    });
</script>
<?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/home_categories/edit.blade.php ENDPATH**/ ?>