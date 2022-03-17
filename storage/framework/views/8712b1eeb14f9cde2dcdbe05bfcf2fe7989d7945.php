<?php $__env->startSection('content'); ?>

<section class="home-slider owl-carousel">
  <?php $__currentLoopData = \App\Slider::where('published',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="slider-item" style="background-image:url(<?php echo e(asset($slider->photo)); ?>);">
    <div class="overlay"></div>
    <div class="container">
       <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
             <h1 class="mb-4">Chào mừng đến với môi trường <span>tốt nhất dành cho bé</span></h1>
             <p class="p-intro p-3">Chúng tôi cam kết, dành cho con của bạn một môi trường hoàn hảo để phát triển toàn diện</p>
             <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
       </div>
    </div>
 </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
[gioi-thieu-trang-chu-197]

<section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container">
      <div class="row">
         <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
            <div class="text px-4 ftco-animate">
               <?php
                  $gioithieu = \App\Page::find(12);
               ?>
               <h2 class="mb-4"><?php echo e($gioithieu->name); ?></h2>
               <p>
                  <?php echo $gioithieu->description; ?>

               </p>
               <p><a href="<?php echo e($gioithieu->link()); ?>" class="btn btn-secondary px-4 py-3">Đọc thêm</a></p>
            </div>
         </div>
         <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Mầm non Hoa Hồng</h2>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
            <div class="row mt-5">
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                     <div class="text">
                        <h3>Giáo viên tận tình, chuyên nghiệp</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                     <div class="text">
                        <h3>Thực đơn bốn mùa phong phú</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                     <div class="text">
                        <h3>Chương trình học tuyệt vời</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="services-2 d-flex">
                     <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                     <div class="text">
                        <h3>Hoạt động ngoại khóa vui vẻ bổ ích</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                     </div>
                  </div>
               </div>
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
            <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
         </div>
         <div class="col-md-3 d-flex align-items-center">
            <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Chương trình </span> cho Bé </h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url(<?php echo e(asset('frontend/images/course-1.jpg')); ?>);"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">Bé Vẽ</a></h3>
               <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
         </div>
         
         <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url(<?php echo e(asset('frontend/images/course-3.jpg')); ?>);"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">Bé hát</a></h3>
               <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url(<?php echo e(asset('frontend/images/course-4.jpg')); ?>);"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">Bé chơi</a></h3>
               <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
         </div>
         <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url(<?php echo e(asset('frontend/images/course-4.jpg')); ?>);"></div>
            <div class="text bg-light p-4">
               <h3><a href="#">Bé tập </a></h3>
               <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
               <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-gallery">
   <div class="container-wrap">
      <div class="row no-gutters">
         <div class="col-md-3 ftco-animate">
            <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/course_1.jpg')); ?>);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/image_2.jpg')); ?>);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/image_3.jpg')); ?>);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-3 ftco-animate">
            <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo e(asset('frontend/images/image_4.jpg')); ?>);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Cha mẹ</span> nói về chúng tôi</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/teacher-1.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Father</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/teacher-2.jpg')); ?>)">
                     </div>
                     <div class="text ml-2 bg-light">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Henry Dee</p>
                        <span class="position">Mother</span>
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
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Mother</span>
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
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Rodel Golez</p>
                        <span class="position">Mother</span>
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
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Ken Bosh</p>
                        <span class="position">Mother</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo e(asset('frontend/images/bg_5.jpg')); ?>);" data-stellar-background-ratio="0.5">
   <div class="container">
      <div class="row justify-content-end">
         <div class="col-md-6 py-5 px-md-5 bg-primary">
            <div class="heading-section heading-section-white ftco-animate mb-5">
               <h2 class="mb-4">Đăng ký học</h2>
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="First Name">
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Last Name">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <div class="form-field">
                        <div class="select-wrap">
                           <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                           <select name="" id="" class="form-control">
                              <option value="">Select Your Course</option>
                              <option value="">Art Lesson</option>
                              <option value="">Language Lesson</option>
                              <option value="">Music Lesson</option>
                              <option value="">Sports</option>
                              <option value="">Other Services</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="text" class="form-control" placeholder="Phone">
                  </div>
               </div>
               <div class="d-md-flex">
                  <div class="form-group">
                     <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group ml-md-4">
                     <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
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
               <h2 class="mb-4"><span>Bản tin</span> Hoa Hồng</h2>
               
            </div>
         </div>
         <div class="row">
            <?php $__currentLoopData = $news->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-lg-4 ftco-animate">
               <div class="blog-entry">
                  <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo e(asset('frontend/images/image_1.jpg')); ?>);">
                     <div class="meta-date text-center p-2">
                        <span class="day"><?php echo e($item->created_at->toDateString()); ?></span>
                        <span class="mos"><?php echo e($item->created_at->toDateString()); ?></span>
                        <span class="yr">2019</span>
                     </div>
                  </a>
                  <div class="text bg-white p-4">
                     <h3 class="heading"><a href="#">Tuyển sinh khóa học 2020 - 2021</a></h3>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                           <a href="#" class="mr-2">Admin</a>
                           <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
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

<footer class="ftco-footer ftco-bg-dark ftco-section">
   <div class="container">
      <div class="row mb-5">
         <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
               <h2 class="ftco-heading-2">Have a Questions?</h2>
               <div class="block-23 mb-3">
                  <ul>
                     <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                     <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                     <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
               <h2 class="ftco-heading-2">Recent Blog</h2>
               <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/image_1.jpg')); ?>);"></a>
                  <div class="text">
                     <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                     <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                     </div>
                  </div>
               </div>
               <div class="block-21 mb-5 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(<?php echo e(asset('frontend/images/image_2.jpg')); ?>);"></a>
                  <div class="text">
                     <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                     <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
               <h2 class="ftco-heading-2">Links</h2>
               <ul class="list-unstyled">
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
               <h2 class="ftco-heading-2">Subscribe Us!</h2>
               <form action="#" class="subscribe-form">
                  <div class="form-group">
                     <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                     <input type="submit" value="Subscribe" class="form-control submit px-3">
                  </div>
               </form>
            </div>
            <div class="ftco-footer-widget mb-5">
               <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <p>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
         </div>
      </div>
   </div>
</footer>












<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp72\htdocs\hoahong\resources\views/frontend/index.blade.php ENDPATH**/ ?>