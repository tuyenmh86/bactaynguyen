<?php $__env->startSection('content'); ?>

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo e(__('General Settings')); ?></h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="<?php echo e(route('generalsettings.update',$generalsetting->id )); ?>" method="POST" enctype="multipart/form-data">
            	<?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name"><?php echo e(__('Site Name')); ?></label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" value="<?php echo e($generalsetting->site_name); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name"><?php echo e(__('Site Url')); ?></label>
                        <div class="col-sm-9">
                            <input type="text" id="site_url" name="site_url" value="<?php echo e($generalsetting->site_url); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="address"><?php echo e(__('Address')); ?></label>
                        <div class="col-sm-9">
                            <input type="text" id="address" name="address" value="<?php echo e($generalsetting->address); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="address">Sologun</label>
                        <div class="col-sm-9">
                            <input type="text" id="sologun" name="sologun" value="<?php echo e($generalsetting->sologun); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="address">M?? t??? sologun</label>
                        <div class="col-sm-9">
                            <input type="text" id="sologun_description" name="sologun_description" value="<?php echo e($generalsetting->sologun_description); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">V??n b???n ch??n trang</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" name="description" required><?php echo e($generalsetting->description); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="phone"><?php echo e(__('Phone')); ?></label>
                        <div class="col-sm-9">
                            <input type="text" id="phone" name="phone" value="<?php echo e($generalsetting->phone); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="phone">Zalo</label>
                        <div class="col-sm-9">
                            <input type="text" id="zalo" name="zalo" value="<?php echo e($generalsetting->zalo); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email"><?php echo e(__('Email')); ?></label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" value="<?php echo e($generalsetting->email); ?>" class="form-control" required>
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
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/general_settings/index.blade.php ENDPATH**/ ?>