
<div class="container">
    <div class="row">
            <div class="pt-4">
                <img src="<?php echo e(asset('img/banner_top.png')); ?>" alt="" style="max-width: 100%">
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
                            <li class="nav-item"><a href="<?php echo e(route('page','ban-lanh-dao')); ?>" class="nav-link">Ban lãnh đạo</a></li>
                            <li class="nav-item"><a href="<?php echo e(route('thuvienanh')); ?>" class="nav-link">Thư viện</a></li>
                            
                            
                            
                            
                          

                            <?php $__currentLoopData = \App\CategoriesPost::where('published',1)->where('featured',1)->get()->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item"><a href="<?php echo e($category->link()); ?>" class="nav-link"><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                            
                            
                      </div> 
                      <div class="frmSearch">
                        <form action="<?php echo e(route('edu_seach')); ?>" method="get">
                            <input type="text" placeholder="Bạn cần tìm" name="key" id="search"/>
                            <button><span class="oi oi-magnifying-glass"></span></button>   
                    </div>
                </div>
             
            </div>
          </nav>
        <!-- END nav -->
    </div>
</div>
<?php /**PATH D:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/header.blade.php ENDPATH**/ ?>