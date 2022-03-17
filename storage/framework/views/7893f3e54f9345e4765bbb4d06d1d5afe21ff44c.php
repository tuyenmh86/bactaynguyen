<?php $__env->startSection('content'); ?>
<?php
    $info= \App\GeneralSetting::first();
?>

<section class="" >
   <div class="home-index">
      <div class="row">
      <div class="col-md-6 col-12">
         <img class="" style="max-width:100%" src="<?php echo e(asset('img/baiviet-h-1.jpg')); ?>" alt="" />
         <h5>Chính phủ ban hành Nghị định quy định danh mục chi tiết nhóm hàng vật tư, thiết bị y tế dự trữ quốc gia</h5>
      </div>
      <div class="col-md-6 col-12">
         <ul>
            <li>Bộ trưởng Bộ Tài chính tặng Danh hiệu “Tập thể Lao động xuất sắc” cho 111 đơn vị thuộc Tổng cục Dự trữ Nhà nước (27/05/2021)</li>
            <li>Xuất cấp không thu tiền vắc xin, hóa chất từ nguồn dự trữ quốc gia hỗ trợ các tỉnh Sơn La, Tuyên Quang và Quảng Nam phòng chống dịch bệnh động vật (17/05/2021)</li>
            <li>Đề xuất chính sách trợ cấp gạo trồng rừng thay thế nương rẫy (16/05/2021)</li>
            <li>Tổng cục Dự trữ Nhà nước tăng cường kỷ luật, kỷ cương thực thi công vụ (07/05/2021)</li>
            <li>Kỷ niệm 67 năm chiến thắng Điện biên phủ 7/5/1954 – 7/5/2021: Ngành Dự trữ Nhà nước góp phần làm nên thắng lợi của các cuộc kháng chiến (07/05/2021)</li>
         </ul>
      </div>
   </div>
   </div>
   
  
</section>




<section class="">
      <?php $__currentLoopData = \App\Slider::where('published', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <img class="img-responsive w-100" src="<?php echo e(asset($slider->photo)); ?>" alt="Slider Image">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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





<?php $__currentLoopData = \App\CategoriesPost::where('published',1)->where('featured',1)->where('homepage',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="ftco-section bg-light">
   <div class="container">
   
        
         <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
               <h2 class="mb-4"><span>Bản tin </span> DTNN KV Bắc Tây Nguyên</h2>
               
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
                    <h3 class="heading"><a href="<?php echo e($item->link()); ?>"><?php echo e($item->name); ?></a></h3>
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
<?php $__env->startSection('col-right'); ?>

<div class="box-thongbao">
   <div class="title">Thông báo</div>
   <div class="content">
       <marquee onmouseout="this.start();" onmouseover="this.stop();" with="178" scrollamount="1" scrolldelay="30" direction="up" height="115px">
       <ul>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8764">
               Cục DTNN khu vực Hà Nam Ninh thông báo kết quả lựa chọn nhà thầu Cải tạo, sửa chữa khối văn phòng điểm kho Đức Lý – Chi cục DTNN Lý Nhân
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8765">
               Cục DTNN khu vực Hà Nam Ninh thông báo kết quả lựa chọn nhà thầu Cải tạo, sửa chữa khối văn phòng điểm kho Tam Tòa – Chi cục DTNN Nghĩa Hưng
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8759">
               Cục DTNN khu vực Nghĩa Bình thông báo kết quả lựa chọn nhà thầu Thẩm tra thiết kế, dự toán xây dựng công trình Chi cục Dự trữ Nhà nước Tây Sơn: Cải tạo, sửa chữa khối văn phòng điểm kho Bình Nghi; Cải tạo, sửa chữa khối văn phòng điểm kho Nhơn Hòa
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8760">
               Cục DTNN khu vực Nghĩa Bình thông báo kết quả lựa chọn nhà thầu Thẩm tra thiết kế, dự toán xây dựng công trình Chi cục Dự trữ Nhà nước Quảng Ngãi: Cải tạo, sửa chữa khối văn phòng điểm kho Dung Quất
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8761">
               Cục DTNN khu vực Nghĩa Bình thông báo kết quả lựa chọn nhà thầu Thẩm tra thiết kế, dự toán xây dựng công trình Chi cục Dự trữ Nhà nước Tây Sơn: Cải tạo, sửa chữa điểm kho Bình Nghi; Cải tạo, sửa chữa điểm kho Nhơn Hòa
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8757">
               Chi cục DTNN Vĩnh Tiên thông báo kết quả lựa chọn nhà thầu Cung cấp dịch vụ bốc xếp 800 tấn thóc nhập kho năm 2021
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8763">
               Cục DTNN khu vực Nghĩa Bình thông báo kết quả lựa chọn nhà thầu Lập Báo cáo kinh tế kỹ thuật xây dựng công trình Chi cuc DTNN Tây Sơn: Cải tạo, sửa chữa khối văn phòng điểm kho Bình Nghi; Cải tạo, sửa chữa khối văn phòng điểm kho Nhơn Hòa
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8755">
               Cục DTNN khu vực Đà Nẵng thông báo nội dung kế hoạch lựa chọn nhà thầu, gói thầu “Mua khí Nitơ phục vụ công tác bảo quản ban đầu thóc nhập kho dự trữ quốc gia năm 2021”
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8756">
               Chi cục DTNN Thủy Nguyên thông báo kế hoạch lựa chọn nhà thầu Cung cấp dịch vụ bốc xếp 1.000 tấn thóc nhập kho năm 2021
           </a></li>
           
           <li><a href="/noidung/tintuc/Lists/ThongBao/View_detail.aspx?ItemID=8748">
               Cục DTNN khu vực Nghĩa Bình thông báo kế hoạch lựa chọn nhà thầu Lập Báo cáo kinh tế kỹ thuật xây dựng công trình Chi cục DTNN Tây Sơn: Cải tạo, sửa chữa điểm kho Bình Nghi; Cải tạo sửa chữa điểm kho Nhơn Hòa
           </a></li>
           
       </ul>
       </marquee>
   </div>
</div>

<div class="box-thongbao ">
   <div class="title">Lãnh đạo Cục</div>
   <div class="content">
       <marquee onmouseout="this.start();" onmouseover="this.stop();" with="178" scrollamount="1" scrolldelay="-1" direction="up" height="150px">
       <ul>
           
           <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Cục trưởng - Lưu Văn Quân</a>
         </li>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Phó Cục trưởng - Nguyễn Thị Hiếu (2015-2018)</a>
         </li>
           
           
       </ul>
       </marquee>
   </div>
</div>
<div class="box-thongbao">
   <div class="title">Lãnh đạo qua các thời kỳ</div>
   <div class="content">
       <marquee onmouseout="this.start();" onmouseover="this.stop();" with="178" scrollamount="1" scrolldelay="-1" direction="up" height="150px">
       <ul>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Chú Phong - Nguyên Cục trưởng</a>
         </li>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Anh Nguyên - Phó Cục trưởng</a>
         </li>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Chú Vân - nguyên phó cục trưởng</a>
         </li>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Cô Vân - Chi cục trưởng CC Gia Lai</a>
         </li>
         <li><img src="<?php echo e(asset('img/anhdd.png')); ?>" />
            <a href="">Chú Bạn - Chi cục trưởng CC Gia Lai</a>
         </li>
       </ul>
       </marquee>
   </div>
</div>
  
   <div class="box">
      <h3 class="">Liên kết phần mềm</h3>
      <div class="contain">
         <ul class="">
            <li>
               <a href="">Edoctc - Quản lý văn bản điều hành</a>
            </li>
            <li>
               <a href="">Email công vụ</a>
            </li>
            <li>
               <a href="">Email tỉnh Gia Lai</a>
            </li>
            <li>
               <a href="">Kế toán nội bộ phiên bản 8002</a>
            </li>
            <li>
               <a href="">Quản lý tài sản tài chính</a>
            </li>
            <li>
               <a href="">Dịch vụ công trực tuyến</a>
            </li>
            <li>
               <a href="">Thuế điện tử</a>
            </li>
            <li>
               <a href="">Quản lý vật tư hàng hóa</a>
            </li>
            <li>
               <a href="">Quản lý mạng lưới kho </a>
            </li>
            <li>
               <a href="">Thông tin báo cáo - Nhập liệu</a>
            </li>
            <li>
               <a href="">Thông tin báo cáo - Khai thác BI</a>
            </li>
            <li>
               <a href="">Thi đua khen thưởng</a>
            </li>
            <li>
               <a href="">Quản lý cán bộ</a>
            </li>
            <li>
               <a href="">Quản lý đoàn viên công đoàn </a>
            </li>
            
         </ul>
      </div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$(function(){
        $('.marquee').marquee({
           direction: 'up'
        });   
      });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp73\htdocs\mamnonhoahong\resources\views/frontend/edu/index.blade.php ENDPATH**/ ?>