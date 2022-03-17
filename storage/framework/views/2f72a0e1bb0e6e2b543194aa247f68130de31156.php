<?php $__env->startSection('content'); ?>

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <!--Horizontal Form-->

            <form class="form-horizontal" action="<?php echo e(route('business_settings.vendor_commission.update')); ?>" method="POST" enctype="multipart/form-data">
            	<?php echo csrf_field(); ?>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="hidden" name="type" value="<?php echo e($business_settings->type); ?>">
                        <label class="col-lg-3 control-label"><?php echo e(__('Seller Commission')); ?></label>
                        <div class="col-lg-7">
                            <input type="number" min="0" step="0.01" value="<?php echo e($business_settings->value); ?>" placeholder="<?php echo e(__('Seller Commission')); ?>" name="value" class="form-control">
                        </div>
                        <div class="col-lg-1">
                            <option class="form-control">%</option>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/business_settings/vendor_commission.blade.php ENDPATH**/ ?>