<form class="form-horizontal" action="<?php echo e(route('commissions.pay_to_seller')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo e(__('Pay to seller')); ?></h4>
    </div>

    <div class="modal-body">
        <div>
            <table class="table table-responsive">
                <tbody>
                    

                    <tr>
                        <td><?php echo e(__('Due to seller')); ?></td>
                        <td><?php echo e(single_price($seller->admin_to_pay)); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php if($seller->admin_to_pay > 0): ?>
            <input type="hidden" name="seller_id" value="<?php echo e($seller->id); ?>">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="amount"><?php echo e(__('Amount')); ?></label>
                <div class="col-sm-9">
                    <input type="number" min="0" step="0.01" name="amount" id="amount" value="<?php echo e($seller->admin_to_pay); ?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="payment_option"><?php echo e(__('Payment Method')); ?></label>
                <div class="col-sm-9">
                    <select name="payment_option" id="payment_option" class="form-control demo-select2-placeholder" required>
                        <option value=""><?php echo e(__('Select Payment Method')); ?></option>
                        <?php if($seller->cash_on_delivery_status == 1): ?>
                            <option value="cash"><?php echo e(__('Cash')); ?></option>
                        <?php endif; ?>
                        <?php if($seller->paypal_status == 1): ?>
                            <option value="paypal"><?php echo e(__('Paypal')); ?></option>
                        <?php endif; ?>
                        <?php if($seller->stripe_status == 1): ?>
                            <option value="stripe"><?php echo e(__('Stripe')); ?></option>
                        <?php endif; ?>
                        <?php if($seller->sslcommerz_status == 1): ?>
                            <option value="sslcommerz"><?php echo e(__('SSLCommerz')); ?></option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <div class="modal-footer">
        <div class="panel-footer text-right">
            <?php if($seller->admin_to_pay > 0): ?>
                <button class="btn btn-purple" type="submit"><?php echo e(__('Pay')); ?></button>
            <?php endif; ?>
            <button class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
        </div>
    </div>
</form>
<?php /**PATH D:\xampp72\htdocs\bds\resources\views/sellers/payment_modal.blade.php ENDPATH**/ ?>