<?php $__env->startSection('content'); ?>
<form class="form-horizontal">
    <fieldset>
    
    <!-- Form Name -->
    <legend>LÝ LỊCH THIẾT BỊ</legend>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Đơn vị sử dụng</label>
      <div class="col-md-4">
        <select id="selectbasic" name="selectbasic" class="form-control">
          <option value="1">Văn phòng Cục</option>
          <option value="2">Phòng TCHC</option>
          <option value="3">Phòng TCKT</option>
          <option value="4">Phòng KH&amp;QLHDT</option>
          <option value="5">Phòng TT-KT</option>
          <option value="6">Phòng KTBQ</option>
          <option value="7">Chi cục DTNN Gia Lai</option>
          <option value="8">Chi cục DTNN Kon Tum</option>
        </select>
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Loại thiết bị</label>
      <div class="col-md-4">
        <select id="selectbasic" name="selectbasic" class="form-control">
          <option value="1">Option one</option>
          <option value="2">Option two</option>
        </select>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nguyên giá</label>  
      <div class="col-md-4">
      <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Năm đưa vào sử dụng</label>
      <div class="col-md-4">
        <select id="" name="" class="form-control">
          <option value="1">Option one</option>
          <option value="2">Option two</option>
        </select>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Thời hạn hết bảo hành</label>  
      <div class="col-md-4">
      <input id="" name="" type="text" placeholder="placeholder" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cbsudung">Công chức sử dụng</label>
      <div class="col-md-4">
        <select id="cbsudung" name="cbsudung" class="form-control">
          <option value="1">Option one</option>
          <option value="2">Option two</option>
        </select>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Cấu hình thiết bị</label>  
      <div class="col-md-4">
      <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
      <span class="help-block">help</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Cài đặt hiện tại</label>  
      <div class="col-md-4">
      <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
      <span class="help-block">help</span>  
      </div>
    </div>
    
    </fieldset>
    </form>
    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.edu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp73\htdocs\bactaynguyen\resources\views/iso/tchc/cntt/BM05-TCHC-01.blade.php ENDPATH**/ ?>