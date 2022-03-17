 <div class="container">
   <div class="row">
      <div class="col-sm-3">
         <p><a href=""><img src="<?php echo e(asset($sitesetting->logo)); ?>" style="max-height:60px"></a></p>
               <p><i class="fas fa-map-marker-alt"></i>   <?php echo e($sitesetting->address); ?></p>
               <p>
                  <i class="fas fa-phone-square"></i> 
                  Hotline: <br/>
                  <a href="tel:<?php echo e($sitesetting->phone); ?>"><?php echo e($sitesetting->phone); ?></a><br/>
                  <a href="tel:<?php echo e($sitesetting->zalo); ?>"><?php echo e($sitesetting->zalo); ?></a>
               </p>
               <p><i class="fas fa-envelope"></i> Email <a href="mailto:<?php echo e($sitesetting->email); ?>"><?php echo e($sitesetting->email); ?></a></p>
      </div>
      <div class="col-sm-9 padtop10">
         <div class="row">
            <?php $__currentLoopData = \App\CategoriesPost::where('published',1)->where('footer',1)->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mfooter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-sm-4">
                  <div class="menufooter">
                     <h4><?php echo e($mfooter->name); ?></h4>
                     <ul>
                        <?php $__currentLoopData = \App\Post::where('published',1)->where('category_id','=',$mfooter->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li>
                                 <a href="<?php echo e($news->link()); ?>"><?php echo e($news->name); ?></a>
                              </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
         </div>
      </div>
   </div>
   <div class="row copyright">
      <div class="col-sm-12">
         <p class="text-center"></p>
         <center>
            bdstoanphat.com là sản phẩm công nghệ của <?php echo e($sitesetting->site_name); ?><br>
            <center>
               <p></p>
            </center>
         </center>
      </div>
   </div>
</div>

<?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/partials/footer.blade.php ENDPATH**/ ?>