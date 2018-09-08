  
<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
      <!-- Registration code starts here -->
        <div class="container" id="main-code">
     <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id=kin_photo>
        <?php if($users[0]->Image=="NA"): ?>
     <div class="fb-profile"  style="margin-top:21%">
 <img class="thumbnail user_image" width="200px" height="190px"  src="<?php echo e(url('public/images/profile.png')); ?>" alt="Profile image"/>
 <button class="btn btn-default" style="margin-top:-100px" onclick="imgupload()"><i class="fa fa-edit" aria-hidden="true" title="Edit Picture" id="fa_edit"></i></button>
</div>
<?php else: ?>
<div class="fb-profile"  style="margin-top:21%">
 <img class="thumbnail user_image" width="200px" height="190px"  src="<?php echo e($users[0]->Image); ?>" alt="Profile image"/>
 <button class="btn btn-default" style="margin-top:-100px" onclick="imgupload()"><i class="fa fa-edit" aria-hidden="true" title="Edit Picture" id="fa_edit"></i></button>
</div>
<?php endif; ?>
</div>
<div class="col-xs-12 col-sm-6 col-md-10" id="kin_info">
 <div class="well" style="background:#fff">
         <div class="container">
         <div class="row" style="width:73%">
             <?php if(Session::get('user_type') == "User"): ?>
          <ul class="nav nav-tabs preview_tabs">
               <li class="active"><a href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
               <li><a href="<?php echo e(url('kindetails')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Kin Details</a></li>
               <a href="<?php echo e(url('changeemail')); ?>"><button class="btn btn-primary" style="padding:9px"><i class="fa fa-edit" aria-hidden="true" id="info_fa"></i> change Password</button></a>
              </ul>
             <?php else: ?>
       <ul class="nav nav-tabs preview_tabs">
               <li class="active"><a href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
                  <a href="<?php echo e(url('changeemail')); ?>"><button class="btn btn-primary" style="padding:9px"><i class="fa fa-edit" aria-hidden="true" id="info_fa"></i> change Password</button></a>
             </ul>
             <?php endif; ?>
         <div class="tab-content preview_details">
<div id="myfavourites" class="tab-pane fade in active">
 <div class="container" id="user-form" style="margin-top: 80px">
  <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-6 col-lg-offset-2 col-lg-6 register_form">
     <div id="accountsettings" class="tab-pane fade in active" style="margin-top:5px">
    <center><h4 style="color:#46A6EA">Change Email</h4></center>
                    <form method="post" action="<?php echo e(url('changeemail')); ?>">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                          <label for="pwd">Email:</label>
                          <input type="text" name="newemail" class="form-control" id="pwd" value="<?php echo e($users[0]->Email); ?>" placeholder="Create Password">
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary butn col-xs-8 col-sm-11">Change Email</button><br><br>
                    </div><hr>
                  </form>
                  <form method="post" action="<?php echo e(url('changepassword')); ?>">
                    <?php echo e(csrf_field()); ?>

                      <center><h4 style="color:#46A6EA">Change Password</h4></center>
                      <div class="form-group">
                          <label for="pwd">Current Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Create Password" name="currentpassword">
                      </div>
                    <div class="form-group">
                        <label for="pwd">New Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Create Password" name="newpassword">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Create Password" name="cpassword">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary butn col-xs-8 col-sm-11">Change Password</button><br><br>
                  </div>
               </form>
                </div>
              </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
      <!-- Registration code ends here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>