<?php $__env->startSection('content'); ?>

<?php if($type != 'Seller'): ?>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-rounded btn-info pull-right"><?php echo e(__('Add New Product')); ?></a>
        </div>
    </div>
<?php endif; ?>

<br>

<div class="col-lg-12">
    <div class="panel">
        <!--Panel heading-->
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo e(__($type.' Products')); ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="20%">Tên khách đăng tin</th>
                        <th width="20%"><?php echo e(__('Name')); ?></th>
                        <th width="10%"><?php echo e(__('Photo')); ?></th>
                        <th width="15%">DM lv1</th>
                        
                        
                        <th width="10%">Phát hành</th>


                        <th width="10%"><?php echo e(__('Options')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?>

                            </td>
                            <td>
                                <?php echo e($product->user->name); ?>

                            </td>
                            <td>
                                <?php echo e($product->id); ?> -
                                <a href="<?php echo e(route('product', $product->slug)); ?>" target="_blank"><?php echo e(__($product->name)); ?></a><br/>
                                <?php if($product->discount>0): ?>
                                    <?php echo e(format_price(convert_price($product->unit_price-$product->discount ))); ?> <del><?php echo e(format_price($product->unit_price)); ?></del>
                                <?php else: ?>
                                    <?php echo e(format_price(convert_price($product->unit_price))); ?>

                                <?php endif; ?>
                            </td>
                            <td><img class="img-md" src="<?php echo e(asset($product->thumbnail_img)); ?>" alt="Image"></td>
                            <td><?php echo e($product->category->name); ?></td>
                            
                            
                           
                            
                            <td>
                                Phát hành:<label class="switch"> 
                                     <input onchange="update_published(this)" value="<?php echo e($product->id); ?>" type="checkbox" <?php if($product->published == 1) echo "checked";?> >
                                   <span class="slider round"></span></label>
                                   <br/>
                                Nổi bật:<label class="switch">
                                   <input onchange="update_featured(this)" value="<?php echo e($product->id); ?>" type="checkbox" <?php if($product->featured == 1) echo "checked";?> >
                                     <span class="slider round"></span>
                                    </label> <br/>
                                    VIP 1:<label class="switch"> 
                                <input onchange="update_vip1(this)" value="<?php echo e($product->id); ?>" type="checkbox" <?php if($product->vip1 == 1) echo "checked";?> >
                                    <span class="slider round"></span></label>
                                    <br/>
                                    VIP 2:<label class="switch">
                                    <input onchange="update_vip2(this)" value="<?php echo e($product->id); ?>" type="checkbox" <?php if($product->vip2 == 1) echo "checked";?> >
                                        <span class="slider round"></span></label>
                                        <br/>
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                        <?php echo e(__('Actions')); ?> <i class="dropdown-caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <?php if($type == 'Seller'): ?>
                                            <li><a href="<?php echo e(route('products.seller.edit', $product->id)); ?>"><?php echo e(__('Edit')); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="<?php echo e(route('products.admin.edit', $product->id)); ?>"><?php echo e(__('Edit')); ?></a></li>
                                        <?php endif; ?>
                                        <li><a onclick="confirm_modal('<?php echo e(route('products.destroy', $product->id)); ?>');"><?php echo e(__('Delete')); ?></a></li>
                                        <li><a href="<?php echo e(route('products.duplicate', $product->id)); ?>"><?php echo e(__('Duplicate')); ?></a></li>
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
            //$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });

        function update_todays_deal(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('products.todays_deal')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Todays Deal updated successfully');
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
            $.post('<?php echo e(route('products.published')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published products updated successfully');
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
            $.post('<?php echo e(route('products.featured')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured products updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function update_vip1(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('products.vip1')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured products updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
        function update_vip2(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('<?php echo e(route('products.vip2')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:el.value, status:status}, function(data){
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\bds\resources\views/products/index.blade.php ENDPATH**/ ?>