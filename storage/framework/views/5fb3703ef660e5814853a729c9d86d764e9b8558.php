<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
  <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
  <?php echo session('message.content'); ?>

  </div>
  <?php endif; ?>
<!-- settings information code starts here -->
<div class="container" id="main-code">
   <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id=kin_photo>
    <?php if($users[0]->Image == "NA"): ?>
   <div class="fb-profile"  style="margin-top:21%">
<img class="thumbnail user_image"  src="<?php echo e(url('public/images/profile.png')); ?>" width="200px" height="190px" alt="Profile image"/>
</div>
<?php else: ?>
<div class="fb-profile"  style="margin-top:21%">
<img class="thumbnail user_image"  src="<?php echo e($users[0]->Image); ?>" width="200px" height="190px" alt="Profile image"/>
</div>
<?php endif; ?>
<a href="<?php echo e(url('editprofile')); ?>"><button class="btn btn-primary">Edit</button></a>
</div>
<div class="col-xs-12 col-sm-6 col-md-10" id="kin_info">
<form class="form-horizontal kin_info">

     <div class="well" style="background:#fff">
       <div class="container">
       <div class="row" style="width:73%">
         <?php if($users[0]->UserType == "user"): ?>
        <ul class="nav nav-tabs preview_tabs">
             <li class="active"><a href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
            <button class="btn btn-primary" style="padding:9px"><a href="<?php echo e(url('kindetails')); ?>"><i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Kin Details</a></button>
            </ul>
           <?php else: ?>
     <ul class="nav nav-tabs preview_tabs">
             <li class="active"><a data-toggle="tab" href="#accountsettings"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
           </ul>
           <?php endif; ?>

       <div class="tab-content preview_details">

        <div id="accountsettings" class="tab-pane fade in active">
           <form class="form-horizontal">
            <?php if(count($users)>0): ?>
              <div class="col xs-12 col-sm-6 col-md-4 col-lg-4">
                <div>
                 <h4 class="field_names">UserName</h4></div>
                 <p><?php echo e($users[0]->UserName); ?></p>
                <br>
              <div>
                 <h4 class="field_names">Email</h4></div>
                     <p><?php echo e($users[0]->Email); ?></p>
                    <br>

                   <div>
                        <h4 class="field_names">User Type</h4></div>
                        <p><?php echo e($users[0]->UserType); ?></p>
                       <br>
                <div>
                  <h4 class="field_names">Mobile</h4></div>
                  <p><?php echo e($users[0]->DayTimePhone); ?></p>
                 <br>
                 <div>
                     <h4 class="field_names">Facebook</h4></div>
                     <p><?php echo e($users[0]->Facebook); ?></p><br>

                       <div>
                          <h4 class="field_names">Landline</h4></div>
                          <p><?php echo e($users[0]->EveningPhone); ?></p>
                         <br>
                </div>
                   <?php else: ?>
                     <div class="col xs-12 col-sm-6 col-md-4 col-lg-4">
                <div>
                 <h4 class="field_names">User Name</h4></div>
                 <p>NA</p>
                <br>
              <div>
                 <h4 class="field_names">Email</h4></div>
                     <p>NA</p>
                    <br>

                   <div>
                        <h4 class="field_names">User Type</h4></div>
                        <p>NA</p>
                       <br>
                <div>
                  <h4 class="field_names">Mobile</h4></div>
                  <p>NA</p>
                 <br>
                 <div>
                     <h4 class="field_names">Facebook</h4></div>
                     <p>NA</p><br>

                       <div>
                          <h4 class="field_names">Landline</h4></div>
                          <p>NA</p>
                         <br>
                </div>
                <?php endif; ?>
                <?php if(count($address)>0): ?>
                   <div class="col xs-12 col-sm-6 col-md-4 col-lg-4">

                           <div>
                   <h4 class="field_names">Address</h4></div>
                   <p><?php echo e($address[0]->AddressLine1); ?></p>
                  <br>
                  <div>
                    <h4 class="field_names">Country</h4></div>
                    <p><?php echo e($address[0]->Country); ?></p>
                   <br>
                         <div>
                            <h4 class="field_names">City</h4></div>
                            <p><?php echo e($address[0]->City); ?></p>
                           <br>
                     <div>
                       <h4 class="field_names">Postcode</h4></div>
                       <p><?php echo e($address[0]->PostCode); ?></p>
                      <br>
                      <div>
                        <h4 class="field_names">Twitter</h4></div>
                        <p><?php echo e($address[0]->Twitter); ?></p><br>
                        <div>
                          <h4 class="field_names">Website</h4></div>
                          <p><?php echo e($address[0]->Website); ?></p><br>
                        </div>
                        <?php else: ?>
                        <div class="col xs-12 col-sm-6 col-md-4 col-lg-4">

                           <div>
                   <h4 class="field_names">Address</h4></div>
                   <p>NA</p>
                  <br>
                  <div>
                    <h4 class="field_names">Country</h4></div>
                    <p>NA</p>
                   <br>
                         <div>
                            <h4 class="field_names">City</h4></div>
                            <p>NA</p>
                           <br>
                     <div>
                       <h4 class="field_names">Postcode</h4></div>
                       <p>NA</p>
                      <br>
                      <div>
                        <h4 class="field_names">Twitter</h4></div>
                        <p>NA</p><br>
                        <div>
                          <h4 class="field_names">Website</h4></div>
                          <p>NA</p><br>
                        </div>
                        <?php endif; ?>
                      </form>

                    </div>
                </div>
              </div>
            </div>
          </div>
            </div>
        </div>
      </div>
              <?php $__env->stopSection(); ?>

<!-- kin information code ends here -->

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>