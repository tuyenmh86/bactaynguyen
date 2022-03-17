<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <a href="<?php echo e(route('album.create')); ?>" class="btn btn-info pull-right"><?php echo e(__('Add New')); ?></a>
        </div>
    </div>
    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Albums</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>name</th>
                        <th>alias</th>
                        <th>position</th>
                        <th>published</th>
                        <th width="10%"><?php echo e(__('Options')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($key+1); ?>

                            </td>
                            <td>
                                <?php echo e($album->id); ?>

                            </td>
                            <td>
                                <?php echo e($album->name); ?>

                            </td>
                            <td>
                                <?php echo e($album->alias); ?>

                            </td>
                            <td>
                                <?php
                                    switch($album->position){
                                        case 1:
                                            echo('Trang chủ');  
                                            break;
                                        case 2:
                                            echo('Giới thiệu');  
                                            break;
                                        case 3:
                                            echo('Thư viện');  
                                            break;
                                    }
                                ?>
                            </td>
                           
                            <td>
                                <label class="switch">
                                    <input onchange="update_published(this)" value="<?php echo e($album->id); ?>"
                                           type="checkbox" <?php if ($album->published == 1) echo "checked";?> >
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon"
                                            data-toggle="dropdown" type="button">
                                        <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">

                                        
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });

        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('album.updatePublished')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published album updated successfully');
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
            $.post('<?php echo e(route('album.updateFeatured')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured Album updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp73\htdocs\mamnonhoahong\resources\views/album/index.blade.php ENDPATH**/ ?>