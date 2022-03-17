<?php $__env->startSection('content'); ?>

<section class="home-slider owl-carousel">

    <div class="container-fluit" style="background-color: rgb(239, 249, 255)">
       <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="false">
          <div class="col-md-6 text-center ftco-animate">
             <h1 class="mb-4 s-font">Chào mừng đến với môi trường <span>tốt nhất dành cho bé</span></h1>
             <p class="p-intro p-3">Chúng tôi cam kết, dành cho con của bạn một môi trường hoàn hảo để phát triển toàn diện</p>
             <p><a href="<?php echo e(route('gioithieu')); ?>" class="btn btn-secondary px-4 py-3 mt-3">Xem thêm</a></p>
          </div>
          <div class="col-md-6 text-center ftco-animate">
            <?php $__currentLoopData = \App\Slider::where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="slider-item" style="background-image:url(<?php echo e(asset($slider->photo)); ?>);">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
       </div>
    </div>
</section>

<section class="ftco-services">
   <div class="container">
      <div class="row">
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/ibg1.png')); ?>;background-repeat: no-repeat;)">
                  <img src="<?php echo e(asset('frontend/images/cake.png')); ?>" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé học</h3>
                  <p>100% cán bộ, giáo viên có trình độ chuyên môn đạt chuẩn, trong đó trình độ trên chuẩn đạt 54% </p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/ibg1.png')); ?>;background-repeat: no-repeat;)">
                  <img src="<?php echo e(asset('frontend/images/cake.png')); ?>" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé chơi</h3>
                  <p>Được cập nhật với mục tiêu đem đến sự phát triển toàn diện cho trẻ.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/ibg1.png')); ?>;background-repeat: no-repeat;)">
                  <img src="<?php echo e(asset('frontend/images/cake.png')); ?>" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé trải nghiệm</h3>
                  <p>Sạch sẽ, thoáng mát, sân chơi rộng rãi, đa dạng đồ chơi phù hợp cho trẻ.</p>
               </div>
            </div>
         </div>
         <div class="col-md-3 services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
               <div class="icon justify-content-center align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/ibg1.png')); ?>;background-repeat: no-repeat;)">
                  <img src="<?php echo e(asset('frontend/images/cake.png')); ?>" style="max-width: 100%; width: 90px;padding:10px;"/>
               </div>
               <div class="media-body p-2 mt-3">
                  <h3 class="heading">Bé tập làm </h3>
                  <p>Nhà trường luôn tổ chức các hoạt động vô cùng bổ ích cho các con nâng cao trải nghiệm</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="row">
         <?php
            $gioithieu = \App\Page::find(12);
         ?>
         <div class="col-md-5 order-md-last py-5 bg-light">
            <div class="text px-4 ftco-animate">
              
               <h2 class="mb-4 s-font"><?php echo e($gioithieu->name); ?></h2>
               <p>
                  <?php echo $gioithieu->description; ?>

               </p>
               <p><a href="<?php echo e($gioithieu->link()); ?>" class="btn btn-secondary px-4 py-3">Đọc thêm</a></p>
            </div>
         </div>
         <div class="col-md-7 py-5 pr-md-4 ftco-animate">
            <img src="<?php echo e(asset($gioithieu->featured_image)); ?>" alt="" style="max-width:100%;">
            
         </div>
      </div>
   </div>
</section>
<section class="ftco-intro" style="background-image:url(<?php echo e(asset('frontend/images/bg_3.jpg')); ?>" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <h2>Trao tin tưởng - Nhận yêu thương</h2>
            <p class="mb-0">Tại trường mầm non Hoa Hồng tập thể giáo viên luôn nhiệt tình chăm sóc trẻ, luôn cho trẻ cảm nhận được tình yêu thương của cô.</p>
         </div>
         <div class="col-md-3 d-flex align-items-center">
            <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Xem thêm</a></p>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Chương trình </span> cho Bé </h2>
            <p>Lịch hoạt động của bé lớp mẫu giáo tại trường mầm non </p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 course d-lg-flex ftco-animate">
            
            <div class="text bg-white p-4">
               <h3><a href="#">Bé Vẽ</a></h3>
               <p class="subheading"><span>Giờ học:</span> 9:00 - 10 </p>
               <p>Ở tiết học vẽ các bé được thỏa sức sáng tạo những bức tranh đáng yêu, những nét vẽ ngộ nghĩnh mà chỉ có trẻ thơ mới có. </p>
            </div>
         </div>
         
         <div class="col-md-6 course d-lg-flex ftco-animate">
            
            <div class="text bg-white p-4">
               <h3><a href="#">Bé hát</a></h3>
               <p class="subheading"><span>Giờ học:</span> 10:00  - 10:50</p>
               <p>Âm nhạc là một trong những phương tiện tốt nhất thúc đẩy sự phát triển và khả năng nhận thức của bé ở những năm đầu đời. Hoạt động âm nhạc giúp các bé tưởng tượng ra thế giới xung quanh đầy màu sắc</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            
            <div class="text bg-white p-4">
               <h3><a href="#">Bé chơi</a></h3>
               <p class="subheading"><span>Giờ học:</span> 13:00 - 14:00</p>
               <p>Hoạt động vui chơi là một trong những hoạt động mà trẻ hứng thú nhất, mang lại cho trẻ nhiều niềm vui và kiến thức cần thiết về thế giới xung quanh</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            
            <div class="text bg-white p-4">
               <h3><a href="#">Bé tập </a></h3>
               <p class="subheading"><span>Giờ học:</span> 14:00 - 15:00</p>
               <p>
                  Vận động phát triển thể chất, trò chơi dân gian
                  Quan sát các hiện tượng tự nhiên và thiên nhiên
              </p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
         <?php $__currentLoopData = \App\Photo::where('album_id',4)->take(4)->orderBy('created_at','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-3 ftco-animate">
            <a href="<?php echo e(asset($item->photo)); ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(asset($item->photo)); ?>);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
   </div>
</section> 

<section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Phụ huynh</span> nói gì</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/si-hoang_1.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm.</p>
                        <p class="name">Phụ Huynh bé Trí Tâm</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/kim-dung.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Mẹ Bé Hoàng Anh</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image:url(<?php echo e(asset('frontend/images/teacher-3.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ huynh bé Tin Nguyễn</p>
                  </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/teacher-3.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ Huynh bé Mai</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/teacher-1.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm</p>
                        <p class="name">Phụ huynh bé Tâm Anh</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo e(asset('frontend/images/dangky.jpg')); ?>);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <h2 class="mb-4">Đăng ký học</h2>
               <p>Phụ huynh vui lòng đăng ký thông tin lớp học</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
               <div class="d-md-flex">
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Họ tên">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <div class="form-field">
                        <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="" id="" class="form-control">
                              <option value="">Chọn khóa học</option>
                              <option value="">Lớp mầm</option>
                              <option value="">Lớp chồi</option>
                              <option value="">Lớp Lá</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Điện thoại">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Tin nhắn cho chúng tôi"></textarea>
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

<?php $__currentLoopData = \App\CategoriesPost::where('published',1)->where('featured',1)->where('homepage',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="ftco-section bg-light">
   <div class="container">
   
        
         <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
               <h2 class="mb-4"><span>Bản tin</span> Mầm non</h2>
               
            </div>
         </div>
         <div class="row">
            <?php
                $posts = \App\Post::where('category_id',32)->where('published',1)->orderBy('created_at','desc')->take(3)->get();
            ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                <a href="<?php echo e($item->link()); ?>" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo e(asset($item->featured_img)); ?>);">
                    <div class="meta-date text-center p-2">
                        
                        <span class="mos"><?php echo e($item->created_at->format('d.m.Y')); ?></span>
                    </div>
                </a>
                <div class="text bg-white p-4">
                    <h3 class="heading"><a href="#"><?php echo e($item->name); ?></a></h3>
                    <p><?php echo e($item->description); ?></p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="<?php echo e($item->link()); ?>" class="btn btn-secondary">Đọc tiếp <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                            <a href="#" class="mr-2"><?php echo e($item->user->name); ?></a>
                            
                        </p>
                    </div>
                </div>
                </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
   </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>














<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/index.blade.php ENDPATH**/ ?>