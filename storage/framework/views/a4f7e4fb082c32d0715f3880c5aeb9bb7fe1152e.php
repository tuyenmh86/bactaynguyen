<?php
    $info= \App\GeneralSetting::first();
?>

<section class="mobile_chat hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-3 chat-item">
				<a href="tel:0985231499 " class="chat-item-url">
					<div class="chat-item-image">
						<img alt="goi-dien" src="<?php echo e(asset('frontend/images/icon-phone2.png')); ?>" class="img-responsive" alt="goi-dien"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="sms:0985231499" class="chat-item-url">
					<div class="chat-item-image">
						<img alt="nhan-tin" src="<?php echo e(asset('frontend/images/icon-sms2.png')); ?>" class="img-responsive lazyloaded" alt="nhan-tin"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="http://zalo.me/0985231499" class="chat-item-url">
					<div class="chat-item-image">
						<img alt="chat-zalo" src="<?php echo e(asset('frontend/images/icon-zalo2.png')); ?>" class="img-responsive" alt="chat-zalo"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-M%E1%BA%A7m-non-Hoa-H%E1%BB%93ng-292827164821466/">
					<div class="chat-item-image">
						<img alt="facebook" src="<?php echo e(asset('frontend/images/icon-mesenger2.png')); ?>" class="img-responsive lazyloaded" alt="facebook"></noscript>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
       <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Về chúng tôi</h2>
                <p class="p-footer">
                   <?php echo e($info->description); ?>

                </p>
             </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-5 ml-md-4">
                <h2 class="ftco-heading-2">Liên kết</h2>
                <ul class="list-unstyled">
                    <li class="nav-item active"><a href="/" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Trang chủ</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('gioithieu')); ?>" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Giới thiệu</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('course')); ?>" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Chương trình học</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('tuyensinh')); ?>" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Tuyển sinh</a></li>
                    <li class="nav-item"><a href="#" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Thư viện</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('tintuc')); ?>" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Tin tức</a></li>
                <li class="nav-item"><a href="<?php echo e(route('lienhe')); ?>" class="nav-link pl-0"><span class="ion-ios-arrow-round-forward mr-2"></span>Liên hệ</a></li>
                </ul>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
               <h2 class="ftco-heading-2">Thông tin trường</h2>
               <ul class="list-unstyled" style="color:rgba(255, 255, 255, 0.7);">
                   <li class="nav-item" ><?php echo e($info->address); ?></li>
                   <li class="nav-item"><?php echo e($info->Phone); ?></li>
                   <li class="nav-item"><?php echo e($info->email); ?></li>
               </ul>
            </div>
         </div>
          <div class="col-md-6 col-lg-3">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=169231053723159&autoLogAppEvents=1" nonce="al3lhBZA"></script>
             <div class="fb-page" data-href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-M%E1%BA%A7m-non-Hoa-H%E1%BB%93ng-292827164821466/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-M%E1%BA%A7m-non-Hoa-H%E1%BB%93ng-292827164821466/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-M%E1%BA%A7m-non-Hoa-H%E1%BB%93ng-292827164821466/">Trường Mầm non Hoa Hồng</a></blockquote></div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 text-center">
             <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
             </p>
          </div>
       </div>
    </div>
 </footer>
 <?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/edu/footer.blade.php ENDPATH**/ ?>