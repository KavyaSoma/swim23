<?php $__env->startSection('content'); ?>


     <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- login code starts here -->
<div class="container" style="background:#fff" id="main-code">
  <div class="container" id="user-form">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 login_form">
  <form method="post" action="<?php echo e(url('login')); ?>">
    <?php echo e(csrf_field()); ?>

      <div class="form-group">
                        <label for="txt">Email:</label>
                        <input type="text" class="form-control" id="txt" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary butn col-xs-12 col-sm-11 login_button">Log In</button><br><br><br>
                  </div>
                  <p>New to SWIMMIQ? <a href="<?php echo e(url('register')); ?>" style="color:#46A6EA"><b>Register Here</b></a> <span>|</span> <a href="<?php echo e(url('forgotpassword')); ?>" style="color:#ff6600"><b>Forgot Password</b></a></p>
                </form>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div>
          <a href="<?php echo e(url('/facebooklogin')); ?>"><button class="btn btn-default butn col-xs-12 col-sm-12 col-md-12 col-lg-12 facebook"><i class="fa fa-facebook-square"></i> Sign In with facebook</button></a>
        </div><hr class="mob-none">
                  <center><p class="mob-none"style="text-align:center"><b>OR</b></p>
                      <div>
                   <a href="<?php echo e(url('/googlelogin')); ?>"> <button class="btn btn-default butn col-xs-12 col-sm-12 col-md-12 col-lg-12 google"><i class="fa fa-google-plus"></i> Sign In with google</button></a>
                  </div><hr class="mob-none">
                  <center><p class="mob-none" style="text-align:center"><b>OR</b></p>
                  <div>
                <a href="<?php echo e(url('/twitterlogin')); ?>"><button class="btn btn-default butn col-xs-12 col-sm-12 col-md-12 col-lg-12 twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button></a>
              </div>
        </div>
      </div>
    </div>
  <!-- login code ends here -->


   </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>