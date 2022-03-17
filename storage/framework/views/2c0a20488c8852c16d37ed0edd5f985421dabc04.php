
<?php if(isset($category)): ?>
<div class="container">
    <div class="p-0 bg-white">
           
			<div class="responsive_slick_2row p-0">

	           <?php $__currentLoopData = \App\SubCategory ::where('category_id','=',$category->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <div class="product-card-2 card card-product m-1 shop-cards shop-tech p-1">
	                    	 <a href="<?php echo e($subcategory->link()); ?>">
	            		<div class="card-body p-2">
	            			<div class="card-image">
	                                <a href="<?php echo e($category->link()); ?>" class="d-block" style="background-color:#<?php echo e(substr(uniqid(),-6)); ?>">
	                                </a>
	                            </div>

	                            <div class="p-2">
	                            	<h2 class="product-title p-0 text-truncate-2 text-center" >
	                                    <?php echo e($subcategory->name); ?>

	                                </h2>
	                            </div>
	                    </div>
	                    </a>
	                </div>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</div>
    </div>
</div>

<?php endif; ?>

<?php /**PATH D:\xampp72\htdocs\mekendy\resources\views/frontend/partials/subCategoryList.blade.php ENDPATH**/ ?>