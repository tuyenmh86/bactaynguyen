<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>
<meta property="og:type"            content="Trường mầm non tư thục Hoa Hồng" /> 
			<meta property="og:url"             content="https://tuthuchoahong.edu.vn"/> 
			<meta property="og:title"           content="<?php echo e($page->name); ?>" /> 
			<meta property="og:image"           content="<?php echo e(asset('img/og-image.png')); ?>" /> 
			<meta property="og:image:alt"           content="Trường Mầm Non Tư Thục Hoa Hồng" /> 
			<meta property="og:description"    content="<?php echo e($sitesetting->sologun); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php echo e($page->name); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo e($page->name); ?> <i class="ion-ios-arrow-forward"></i></span></p>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section pt-2">
   <div class="container">
      <div class="row">
         <div class="order-md-last wrap-about py-5 wrap-about bg-light ban-lanh-dao text-center">
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
            <h2 class="mb-4"><span>Sau 14 Năm </span> thành lập trường chúng tôi có</h2>
            
         </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
         <div class="col-lg-10">
            <div class="row d-md-flex align-items-center">
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="38">0</strong>
                        <span>Giáo viên</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="430">0</strong>
                        <span>Học sinh</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="1450">0</strong>
                        <span>Trẻ được chăm sóc</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                     <div class="icon"><span class="flaticon-doctor"></span></div>
                     <div class="text">
                        <strong class="number" data-number="1000">0</strong>
                        <span>Trẻ tốt nghiệp</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
[phu-huynh-noi-ve-chung-toi-347]

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 py-5 px-md-5 bg-primary">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.5795706539959!2d106.042473804077!3d20.93972961887059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a48affd85093%3A0xf77c4755b5213863!2zVHLGsOG7nW5nIE3huqdtIE5vbiBUxrAgVGjhu6VjIEhvYSBI4buTbmc!5e0!3m2!1svi!2s!4v1616507530783!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <span class="subheading">Yêu cầu</span>
               <h2 class="mb-4">Liên hệ tư vấn</h2>
               <p>Phụ huynh quan tâm vui lòng điền thông tin nhà trường sẽ liên hệ lại</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Họ tên">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <div class="form-field">
                        <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="" id="" class="form-control">
                              <option value="">Lựa chọn lớp học</option>
                              <option value="">Lớp mầm</option>
                              <option value="">Lớp chồi</option>
                              <option value="">Lớp lá</option>
                              <option value="">Lớp khác</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Số điện thoại">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Câu hỏi dành cho nhà trường"></textarea>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="submit" value="Gửi yêu cầu" class="btn btn-secondary py-3 px-4">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp73\htdocs\mamnonhoahong\resources\views/frontend/edu/page.blade.php ENDPATH**/ ?>