<?php
    $seosetting = \App\SeoSetting::first();
    $sitesetting = \App\GeneralSetting::first();
?>
<!DOCTYPE html>

        <html>
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=1">
            <title><?php echo e($sitesetting->site_name); ?></title>
            <meta name="keywords" content="<?php echo e($seosetting->keyword); ?>">
            <meta name="description" content="<?php echo e($seosetting->description); ?>">
            <meta name="geo.region" content="VN">
            <meta name="geo.placename" content="Gia lai (Gia Lai)">
            <meta name="geo.position" content="21.027437;105.774425">
            <meta name="ICBM" content="21.027437, 105.774425">
            <meta name="DC.title" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.identifier" content="<?php echo e($sitesetting->site_address); ?>">
            <meta name="DC.description" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.subject" content="<?php echo e($seosetting->description); ?>">
            <meta name="DC.language" scheme="ISO639-1" content="vi-VN">
            <meta name="DC.date" content="2014-07-07">
            <meta http-equiv="expires" content="0">
            <meta name="resource-type" content="document">
            <meta name="distribution" content="global">
            <meta http-equiv="Refresh" content="3600">
            <meta name="robots" content="index, follow">
            <meta name="revisit-after" content="1 days">
            <meta name="rating" content="general">
            <meta name="copyright" content="toanphat">
            <meta itemprop="name" content="<?php echo e($seosetting->description); ?>">
            <meta itemprop="inlanguage" content="vi-VN">
            <meta itemprop="description" content="<?php echo e($seosetting->description); ?>">
            <link rel="canonical" href="index.html">
            <meta name="geo.position" content="21;105">
            <meta name="geo.region" content="">
            <meta name="geo.country" content="VIET NAM">
            <meta name="ICBM" content="15;107">

            <meta name="description" content="<?php echo $__env->yieldContent('meta_description', $seosetting->description); ?>" />
            <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', $seosetting->keyword); ?>">
            <meta name="author" content="<?php echo e($seosetting->author); ?>">
            <meta name="sitemap_link" content="<?php echo e($seosetting->sitemap_link); ?>">
            <?php echo $__env->yieldContent('meta'); ?>
			
			
            
            <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            
          
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/open-iconic-bootstrap.min.css')); ?>">
            <link type="text/css" href="<?php echo e(asset('frontend/css/slick.css')); ?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/slick-theme.css')); ?>"/>
            
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/fancybox.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
        
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/aos.css')); ?>">
        
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/ionicons.min.css')); ?>">
            
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/flaticon.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/icomoon.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">

        <!-- Favicon -->
            <link name="favicon" type="image/x-icon" href="<?php echo e(asset(\App\GeneralSetting::first()->favicon)); ?>" rel="shortcut icon" />

            <title><?php echo $__env->yieldContent('meta_title', config('app.name', env('APP_NAME'))); ?></title>

            <!-- Bootstrap -->

        <!-- Facebook Chat style -->
            <?php if(\App\BusinessSetting::where('type', 'facebook_chat')->first()->value == 1): ?>
                <link href="<?php echo e(asset('frontend/css/fb-style.css')); ?>" rel="stylesheet">
            <?php endif; ?>
          
            <!-- jQuery -->
            <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(asset('frontend/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
            <?php echo $__env->yieldContent('style'); ?>
            

        </head>
        <body>
           <?php echo $__env->make('frontend.edu.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="col-md-3">
                    <div class="box-thongbao mb-4 thongbao">
                        <div class="title">Th??ng b??o</div>
                            <div class="content">
                                <marquee onmouseout="this.start();" onmouseover="this.stop();" with="178" scrollamount="1" scrolldelay="30" direction="up" height="180px">
                                <ul>
                                    <?php $__currentLoopData = \App\Post::where('category_id',33)->where('published',1)->orderBy('created_at','desc')->take(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thongbao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($thongbao->link()); ?>">
                                                <?php echo e($thongbao->name); ?> 
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                </marquee>
                            </div>
                        </div>
                    <div class="box-thongbao mb-4 ldCuc">
                        <div class="title">L??nh ?????o C???c</div>
                        <div class="content">
                            <div class="slick-carousel" data-slick-arrows="true" data-slick-dots="true" data-slick-autoplay="true">
                                    <div class="">
                                        <img class="img-responsive w-100" src="<?php echo e(asset('img/ld/quanlv.jpg')); ?>" alt="Slider Image">
                                        <p class="text-center">C???c tr?????ng - L??u V??n Qu??n </p>
                                    </div>
                                    <div class="">
                                    <img class="img-responsive w-100" src="<?php echo e(asset('img/ld/hieunt2.jpg')); ?>" alt="Slider Image">
                                    <p class="text-center">Ph?? C???c tr?????ng - Nguy???n Th??? Hi???u </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box-thongbao mb-4 ldCuc">
                        <div class="title">L???ch c??ng t??c c???a l??nh ?????o</div>
                        <div class="content">
                            
                            
                        </div>
                    </div>
                    <div class="box-thongbao mb-4">
                        <div class="title">Li??n k???t ph???n m???m</div>
                        <div class="content">
                            <ul class="list-group list-group-flush">
                                <?php $__currentLoopData = \App\Link::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item">
                                    <a href="<?php echo e($link->url); ?>" target="_blank"><?php echo e($link->name); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                        </div>
                    </div>
                    <?php echo $__env->yieldContent('col-right'); ?>
                    
                </div>
            </div>
            

           </div>
           

            
            <a href="#" class="back-to-top btn-back-to-top"><span class="oi oi-arrow-thick-top"></span></a>

            <?php echo $__env->make('frontend.edu.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            

        </div><!-- END: body-wrap -->

        <!-- SCRIPTS -->
        <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/slick.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.marquee.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.easing.1.3.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.stellar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.fancybox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/aos.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/jquery.animateNumber.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/scrollax.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/js/webfont.js')); ?>"></script>
        
        
        
        <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
        
        <?php echo $__env->yieldContent('script'); ?>

        </body>
        </html>
<?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/frontend/layouts/edu.blade.php ENDPATH**/ ?>