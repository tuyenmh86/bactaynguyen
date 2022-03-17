<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
			<meta property="og:url"             content="https://tuthuchoahong.edu.vn"/> 
			<meta property="og:title"           content="<?php echo e($page->name); ?>" /> 
			<meta property="og:image"           content="<?php echo e(asset('img/og-image.png')); ?>" /> 
			<meta property="og:image:alt"           content="Trường Mầm Non Tư Thục Hoa Hồng" /> 
			<meta property="og:description"    content="" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="ftco-section pt-2">
   <div class="container">
      <div class="row">
         <div class="order-md-last wrap-about py-5 wrap-about bg-light ban-lanh-dao">
            <div class="text px-4 ftco-animate">
               <h2 class="mb-4"><?php echo e($page->name); ?></h2>
               <p><?php echo $page->content; ?>

               
               
            </div>
         </div>
         
      </div>
   </div>
</section>
<?php
    $school = \App\GeneralSetting::find(1);
?>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>Sau 10 Năm </span> thành lập chúng tôi có</h2>
            
         </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
         <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="50">0</strong>
                        <span>Cán bộ công chức người lao động</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="44">0</strong>
                        <span>Công chức</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="4">0</strong>
                        <span>Hợp đồng 68</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="2">0</strong>
                        <span>Người lao động</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>








<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/page.blade.php ENDPATH**/ ?>