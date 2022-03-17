
	  	 <div class="container">
	            <div class="p-0 bg-white">
	               
					<div class="responsive_slick_2row p-0">

	               <?php $__currentLoopData = \App\Category::where('id','>',76)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        <div class="product-card-2 card card-product m-1 shop-cards shop-tech p-1">
	                        	 <a href="<?php echo e($category->link()); ?>">
                    		<div class="card-body-1" style="min-height: 3em">
                    			

                                    <div class="">
                                    	<h2 class="product-title p-0 text-truncate-2 text-center" >
                                            <?php echo e($category->name); ?>

                                        </h2>
                                    </div>
                            </div>
                            </a>
                        </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </div>
	    </div>
	</div>
<?php /**PATH /home/u751835082/domains/chuoisaygion.com/public_html/resources/views/frontend/partials/categoryList.blade.php ENDPATH**/ ?>