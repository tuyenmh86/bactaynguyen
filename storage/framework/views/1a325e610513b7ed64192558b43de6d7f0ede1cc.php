<?php
    $info= \App\GeneralSetting::first();
?>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
       <div class="row mb-5">
             <div class="ftco-footer-widget mb-5">
                <p class="p-footer">
                   <?php echo e($info->description); ?>

                </p>
             </div>
       </div>
       
    </div>
 </footer>
 <?php /**PATH D:\xampp73\htdocs\bactaynguyen\resources\views/frontend/edu/footer.blade.php ENDPATH**/ ?>