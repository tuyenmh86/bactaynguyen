<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('plugins/codemirror/lib/codemirror.css')); ?>" rel="stylesheet"/>
    <script src="<?php echo e(asset('plugins/codemirror/lib/codemirror.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/codemirror/addon/selection/active-line.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/codemirror/mode/css/css.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<form class="form form-horizontal mar-top" action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data" id="choice_form">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="added_by" value="admin">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo e(__('Post Information')); ?></h3>
			</div>
			<div class="panel-body">
				<div class="tab-base tab-stacked-left">
				    <!--Nav tabs-->
				    <ul class="nav nav-tabs">
				        <li class="active">
				            <a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true"><?php echo e(__('General')); ?></a>
				        </li>
                        <li class="">
                            <a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="true"><?php echo e(__('SEO')); ?></a>
                        </li>
				    </ul>

				    <!--Tabs Content-->
				    <div class="tab-content">
				        <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
							<div class="form-group">
								<label class="col-lg-2 control-label"><?php echo e(__('Post Name')); ?></label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Product Name')); ?>" onchange="update_sku()" required>
								</div>
							</div>
							<div class="form-group" id="category">
								<label class="col-lg-2 control-label"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-9">
                                    <select id="category_id" name="category_id" class="form-control" size="1">
                                        <?php if(isset($categories)): ?>
                                            <?php echo e(recursiveCategorys($categories)); ?>

                                        <?php endif; ?>
                                    </select>
                                </div>
							</div>
                            <div class="form-group">
								<label class="col-lg-2 control-label">Ảnh đại diện </label>
								<div class="col-lg-7">
									<div id="featured_img">

									</div>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Description')); ?></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="description" placeholder="<?php echo e(__('Description')); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Content')); ?></label>
                                <div class="col-lg-9">
                                    <textarea class="myEditor" name="content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Code')); ?></label>
                                <div class="col-lg-9">
                                    <textarea id="code" name="code" class="myEditor"></textarea>
                                </div>
                            </div>
				        </div>
                        <div id="demo-stk-lft-tab-2" class="tab-pane fade">
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Tags')); ?></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="tags[]" placeholder="Type to add a tag" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Meta Title')); ?></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="meta_title" placeholder="<?php echo e(__('Meta Title')); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Description')); ?></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?php echo e(__('Featured')); ?> <small>(290x300)</small></label>
                                <div class="col-lg-7">
                                    <div id="featured_img">

                                    </div>
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






































<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/posts/create.blade.php ENDPATH**/ ?>