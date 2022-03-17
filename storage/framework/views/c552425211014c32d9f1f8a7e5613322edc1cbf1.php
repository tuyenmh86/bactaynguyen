
<div class="container">
    <div class="row">
            <div class="pt-4">
                <img src="<?php echo e(asset('img/banner_top.png')); ?>" alt="">
            </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                
                <div class="row">
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                          </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="/" class="nav-link pl-0">Trang chủ</a></li>
                            <li class="nav-item dropdown">
                                
                                <a class="nav-link  dropdown-toggle" href="<?php echo e(route('gioithieu')); ?>" class="nav-link">Giới thiệu</a>
                                <ul class="dropdown-menu">  
                                    <li><a class="dropdown-item" href="<?php echo e(route('page','ban-lanh-dao')); ?>">Ban lãnh đạo</a></li>   
                                    <li><a class="dropdown-item" href="<?php echo e(route('page','ban-lanh-dao')); ?>">Lịch sử hình thành</a></li>  
                                    <li><a class="dropdown-item" href="<?php echo e(route('page','ban-lanh-dao')); ?>">Cơ cấu tổ chức</a></li>  
                                    <li><a class="dropdown-item" href="<?php echo e(route('page','co-so-vat-chat')); ?>">Danh bạ điện thoại</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Tin tức - Hoạt động</a></li>
                            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Phổ biến pháp luật</a></li>
                            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Thư viện</a></li>
                            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Tài liệu biểu mẫu</a></li>
                            
                          
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
             
            </div>
          </nav>
        <!-- END nav -->
    </div>
</div>
<?php /**PATH D:\xampp73\htdocs\mamnonhoahong\resources\views/frontend/edu/header.blade.php ENDPATH**/ ?>