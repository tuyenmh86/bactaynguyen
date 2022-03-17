<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<form class="form form-horizontal mar-top" action="<?php echo e(route('page.store')); ?>" method="POST" enctype="multipart/form-data" id="choice_form">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="added_by" value="admin">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Thông tin trang</h3>
			</div>
			<div class="panel-body">
				<div class="tab-base">
				    <!--Nav tabs-->
				    

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tên Page</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="name" placeholder="Tên trang con" required>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Mô tả trang</label>
                                <div class="col-lg-9">
                                    <textarea class="myEditor" class="form-control" name="description" placeholder="Mô tả trang"> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Nội dung</label>
                                <div class="col-lg-9">
                                    <textarea class="myEditor" id="content" name="content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Mã CSS</label>
                                <div class="col-lg-9">
                                    <textarea class="editor" id="style" name="style"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Mã Javascript</label>
                                <div class="col-lg-9">
                                    <textarea class="editor" id="script" name="script"></textarea>
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
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
            extraKeys: {"Ctrl-Space": "autocomplete"}
        });
        var editor2= CodeMirror.fromTextArea(document.getElementById("style"), {
            extraKeys: {"Ctrl-Space": "autocomplete"}
        });
        var editor3 = CodeMirror.fromTextArea(document.getElementById("script"), {
            extraKeys: {"Ctrl-Space": "autocomplete"}
        });
    </script>

<script type="text/javascript">
	var i = 0;

	$(document).ready(function(){
		$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');

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

	});



</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\hoahong\resources\views/page/create.blade.php ENDPATH**/ ?>