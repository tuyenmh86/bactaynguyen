<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-info pull-right"><?php echo e(__('Danh sách khách hàng liên hệ')); ?></a>
        </div>
    </div>

    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo e(__('Contact')); ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Contact')); ?></th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Email')); ?></th>
                    <th><?php echo e(__('Phone')); ?></th>
                    <th><?php echo e(__('Message')); ?></th>
                    <th><?php echo e(__('Published')); ?></th>
                    <th><?php echo e(__('Created_at')); ?></th>
                    <th><?php echo e(__('updated_at')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($value->id); ?></td>
                        <td><a href="" target="_blank"><?php echo e(__($value->name)); ?></a></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->message); ?></td>
                        <td><?php echo e($value->created_at); ?></td>
                        <td><?php echo e($value->updated_at); ?></td>
                        <td>
                            <label class="switch">
                                <input onchange="update_published(this)" value="<?php echo e($value->id); ?>" type="checkbox" <?php if($value->published == 1) echo "checked";?> >
                                <span class="slider round"></span></label>
                        </td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href=""><?php echo e(__('Edit')); ?></a></li>
                                    <li><a onclick="confirm_modal('route déstroy');"><?php echo e(__('Delete')); ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script type="text/javascript">

        $(document).ready(function(){
            //$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });


        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('posts.updatePublished')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published post updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function update_featured(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('posts.updateFeatured')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured products updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\hoahong\resources\views/contacts/index.blade.php ENDPATH**/ ?>