<?php $__env->startSection('content'); ?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm ảnh vào Album</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="<?php echo e(route('photos.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="control-label">Chọn Album</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-control" name="album_id" id="album_id">
                        <option value="0">Chọn album</option>
                        <?php $__currentLoopData = \App\Album::where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-lg-9">
                    <div id="photos">
                        
                    </div>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    // $('#album_id').on('change', function() {
    //     getPhotos();
    // });
    // function getPhotos(){
    //     var album_id = $('#album_id').val();
    //     $('#photos').html(null);
    //     $.get('<?php echo e(route('album.photo')); ?>',{_token:'<?php echo e(csrf_token()); ?>', album_id:album_id}, function(data){
    //         console.log(data);
    //             for (var i = 0; i < data.length; i++) {
    //             $('#photos').append(
    //                 "<div class='col-md-4 col-sm-4 col-xs-6'>"+
    //                 "<img src='<?php echo e(asset($item->photo)); ?>'' class='img-responsive'>"+
    //                 "<input type='hidden' name='previous_meta_img' value='"+ data[i].photo+"'>"+
    //                 "<button type='button' class='btn btn-danger close-btn remove-files'><i class='fa fa-times'></i></button>"+
    //                 "</div>"
    //             )};
    //     });
    // }
    $("#photos").spartanMultiImagePicker({
        fieldName:        'photos[]',
        maxCount:         10,
        rowHeight:        '200px',
        groupClassName:   'col-md-4 col-sm-9 col-xs-6',
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/photos/create.blade.php ENDPATH**/ ?>