<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <a href="<?php echo e(route('page.create')); ?>" class="btn btn-info pull-right"><?php echo e(__('Add New')); ?></a>
        </div>
    </div>
    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo e(__('Pages')); ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>name</th>
                        <th>alias</th>
                        <th>published</th>
                        <th width="10%"><?php echo e(__('Options')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($key+1); ?>

                            </td>
                            <td>
                                <?php echo e($page->id); ?>

                            </td>
                            <td>
                                <?php echo e($page->name); ?>

                            </td>
                            <td>
                                <?php echo e($page->alias); ?>

                            </td>
                            <td>
                                <label class="switch">
                                    <input onchange="update_featured(this)" value="<?php echo e($page->id); ?>"
                                           type="checkbox" <?php if ($page->published == 1) echo "checked";?> >
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

                                        <li><a href="<?php echo e(route('page.edit', $page->id)); ?>"><?php echo e(__('Edit')); ?></a></li>
                                        <li>
                                            <a onclick="confirm_modal('<?php echo e(route('page.destroy', $page->id)); ?>');"><?php echo e(__('Delete')); ?></a>
                                        </li>
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

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/page/index.blade.php ENDPATH**/ ?>