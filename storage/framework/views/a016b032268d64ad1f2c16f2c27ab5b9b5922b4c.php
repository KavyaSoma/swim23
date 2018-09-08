<?php $__env->startSection('content'); ?>
 <script src='https://www.google.com/recaptcha/api.js'></script>

        <div class="container">
       <div class="row1">
          <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin-left:13px;text-align: center">
    <?php echo session('message.content'); ?>

    </div>
<?php endif; ?>
</div>
<div class="container" id="main-code">
    <h5 style="background-color:#46A6EA;color:#fff;"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button>Contact Us</h5>
    <div class="col-sm-12">
    <div class="form-horizontal">
    	<div class="col-sm-offset-1 col-sm-10">
    <div class="form-horizontal">
    <form action="<?php echo e(url('contactus')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label class="control-label col-sm-1" for="txt"> Name:  </label>
      <div class="col-sm-11">
        <?php if(Session::has('user_name')): ?>
        <input type="text" class="form-control" id="txt" name="name" value="<?php echo e(Session::get('user_name')); ?>"   readonly>
        <?php else: ?>
        <input type="text" class="form-control" id="txt" name="name" value="<?php echo e(old('name')); ?>"   >
        <?php endif; ?>

      </div>
      </div>
     <div class="form-group">
      <label class="control-label col-sm-1" for="txt">Email: </label>
      <div class="col-sm-11">
        <?php if(Session::has('user_email')): ?>
        <input type="text" class="form-control" id="txt" name="email" value="<?php echo e(Session::get('user_email')); ?>"   readonly>
        <?php else: ?>
        <input type="text" class="form-control" id="txt" name="email" value="<?php echo e(old('email')); ?>"  >
        <?php endif; ?>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-1" for="txt">Subject: </label>
      <div class="col-sm-11">
         <textarea class="form-control" rows="1" name="subject" required><?php echo e(old('subject')); ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="txt">Message: <span class="title-counter"></span></label>
      <div class="col-sm-11">
         <textarea class="form-control" id="message" rows="20" name="message" required><?php echo e(old('message')); ?></textarea>
      </div>
    </div>

 </div>
   <div class="form-group">
       <div class="col-sm-offset-10" >
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
   </div>

</form>
  </div>
</div>
</div>
</div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>