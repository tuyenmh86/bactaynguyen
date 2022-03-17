<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <a href="<?php echo e(route('postcategory.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Category')); ?></a>
    </div>
</div>

<br>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e(__('Categories Post')); ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Alias')); ?></th>
                    
                    
                    
                    <th><?php echo e(__('published')); ?></th>
                    <th><?php echo e(__('Featured')); ?></th>
                    <th>Chân trang</th>
                    <th>Menu Top</th>
                    <th><?php echo e(__('Homepage')); ?></th>
                    <th><?php echo e(__('pos')); ?></th>
                    <th width="10%"><?php echo e(__('Options')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categoriespost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($category->id); ?></td>
                        <td><?php echo e(__($category->name)); ?></td>
                        <td><?php echo e(__($category->alias)); ?></td>
                        
                        
                        
                        
                        <td>
                            <label class="switch">
                            <input onchange="update_published(this)" value="<?php echo e($category->id); ?>" type="checkbox" <?php if($category->published == 1) echo "checked";?> >
                            <span class="slider round"></span></label>
                        </td>
                        <td>
                            <label class="switch">
                            <input onchange="update_featured(this)" value="<?php echo e($category->id); ?>" type="checkbox" <?php if($category->featured == 1) echo "checked";?> >
                            <span class="slider round"></span></label>
                        </td>
                        <td>
                            <label class="switch">
                                <input onchange="update_footer(this)" value="<?php echo e($category->id); ?>" type="checkbox" <?php if($category->footer == 1) echo "checked";?> >
                                <span class="slider round"></span></label>
                        </td>
                        <td>
                            <label class="switch">
                                <input onchange="update_headmenu(this)" value="<?php echo e($category->id); ?>" type="checkbox" <?php if($category->headmenu == 1) echo "checked";?> >
                                <span class="slider round"></span></label>
                        </td>
                        <td>
                            <label class="switch">
                                <input onchange="update_homepage(this)" value="<?php echo e($category->id); ?>" type="checkbox" <?php if($category->homepage == 1) echo "checked";?> >
                                <span class="slider round"></span></label>
                        </td>
                        <td><?php echo e(__($category->pos)); ?></td>
                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo e(route('postcategory.edit', $category->id)); ?>"><?php echo e(__('Edit')); ?></a></li>
                                    <li><a href="<?php echo e(route('postcategory.ImportProductByCategoryFolder', $category->id)); ?>"><?php echo e(__('Cập nhật thư mục ảnh')); ?></a></li>
                                    <li><a onclick="confirm_modal('<?php echo e(route('postcategory.destroy', $category->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
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
        function update_footer(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('postcategory.updateFooter')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Đã chọn hiển thị ở chân trang');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
        function update_headmenu(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('postcategory.updateHeadmenu')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured categories updated successfully');
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
            $.post('<?php echo e(route('postcategory.updateFeatured')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured categories updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('postcategory.updatePublished')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published categories updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
        function update_homepage(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('postcategory.updateHomepage')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Đã cho phép hiển thị trên trang chủ');
                }
                else{
                    showAlert('danger', 'Thất bại');
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp73\htdocs\mamnonhoahong\resources\views/categoriespost/index.blade.php ENDPATH**/ ?>