
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="/"><img src="<?php echo e(asset($sitesetting->logo)); ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link pl-0">Trang chủ</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="<?php echo e(route('gioithieu')); ?>" class="nav-link">Giới thiệu</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('page','loi-ngo')); ?>">Lời ngỏ</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','ban-lanh-dao')); ?>">Ban lãnh đạo</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','doi-ngu-giao-vien')); ?>">Đội ngũ giáo viên</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','tam-nhin-su-menh')); ?>">Tầm nhìn - Sứ mệnh</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','moi-truong-cham-soc-va-nuoi-day-tre')); ?>">Môi trường chăm sóc và nuôi dạy trẻ</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','co-so-vat-chat')); ?>">Cơ sở vật chất</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link  dropdown-toggle">Chương trình học</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('page','tu-van-giao-duc')); ?>">Tư vấn giáo dục</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','phuong-phap-giao-duc')); ?>">Phương pháp giáo dục</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','chuong-trinh-giao-duc')); ?>">Chương trình giáo dục</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link  dropdown-toggle">Tuyển sinh</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('tuyensinh')); ?>">Tin tuyển sinh</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page','hoc-phi')); ?>">Học phí</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Thư viện</a></li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link  dropdown-toggle">Tin tức</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('tintuc')); ?>">Tin mầm non</a></li>
                    <li><a class="dropdown-item" href="">Thông báo</a></li>
                </ul>
            </li>
          <li class="nav-item"><a href="<?php echo e(route('lienhe')); ?>" class="nav-link">Liên hệ</a></li>
        </ul>
            
            <form class="d-lg-block d-md-block d-sm-none d-none" action="<?php echo e(route('edu_seach')); ?>" method="get">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                  <input class="search_input" type="text" name="q" placeholder="Tìm kiếm...">
                  <a href="#" class="search_icon"><i class="oi oi-magnifying-glass"></i></a>
                </div>
              </div>
            </form>
      </div>
    </div>
  </nav>
<!-- END nav --><?php /**PATH D:\xampp72\htdocs\mamnonhoahong\resources\views/frontend/edu/header.blade.php ENDPATH**/ ?>