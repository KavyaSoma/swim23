<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
  <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
  <?php echo session('message.content'); ?>

  </div>
  <?php endif; ?>
<!-- settings information code starts here -->
<div class="container" id="main-code">
<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id=kin_photo>
<?php if($users[0]->Image=="NA"): ?>
<div class="fb-profile" id="uploadimage"  style="margin-top:21%">
<img class="thumbnail user_image"  src="<?php echo e(url('public/images/profile.png')); ?>" width="200px" height="190px"  alt="Profile image"/>
<button class="btn btn-default" style="margin-top:-100px" onclick="imgupload()"><i class="fa fa-edit" aria-hidden="true" title="Edit Picture" id="fa_edit"></i></button>
<input type="file" id="profileImage" name="profileImage" style="display:none"  accept="image/*"/>
</div>
<?php else: ?>
<div class="fb-profile"  style="margin-top:21%">
<img class="thumbnail user_image"  src="<?php echo e($users[0]->Image); ?>" width="200px" height="190px" alt="Profile image"/>
<button class="btn btn-default" style="margin-top:-100px" onclick="imgupload()"><i class="fa fa-edit" aria-hidden="true" title="Edit Picture" id="fa_edit"></i></button>
<input type="file" id="profileImage" name="profileImage" style="display:none"  accept="image/*"/>
</div>
<?php endif; ?>
</div>
<div class="col-xs-12 col-sm-6 col-md-10" id="kin_info">
<div class="well" style="background:#fff">
<div class="container">
<div class="row" style="width:73%">
<?php if($users[0]->UserType == "user"): ?>
<ul class="nav nav-tabs preview_tabs">
<li class="active"><a href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
<a href="<?php echo e(url('kindetails')); ?>"><button class="btn btn-primary" style="padding:9px"><i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Kin Details</button></a>
<a href="<?php echo e(url('changeemail')); ?>"><button class="btn btn-primary" style="padding:9px"><i class="fa fa-edit" aria-hidden="true" id="info_fa"></i> change Password</button></a>
</ul>
<?php else: ?>
<ul class="nav nav-tabs preview_tabs">
<li class="active"><a href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
<a href="<?php echo e(url('changeemail')); ?>"><button class="btn btn-primary" style="padding:9px"><i class="fa fa-edit" aria-hidden="true" id="info_fa"></i> change Password</button></a>
</ul>
<?php endif; ?>
<div class="tab-content preview_details">
<div id="accountsettings" class="tab-pane fade in active" style="margin-top:20px">
<form class="form-horizontal" action="<?php echo e(url('editprofile')); ?>" method="post" style="background:#fff;padding:35px;">
<?php echo e(csrf_field()); ?>

<?php if(count($users)>0): ?>
<div class="col xs-12 col-sm-6 col-md-6 col-lg-6">
<input type="hidden" name="AddressId" value="<?php echo e($users[0]->AddressId); ?>">
<div class="form-group">
<label class="control-label col-sm-4" for="txt">User Name:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="venue-name" name="UserName" value="<?php echo e($users[0]->UserName); ?>" pattern="([A-zÀ-ž\s]){3,25}">
<span class="error" style="color: red;display: none;">User Name Should contain only 5-25 characters</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Email:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" value="<?php echo e($users[0]->Email); ?>" readonly>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">User Type:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" value="<?php echo e($users[0]->UserType); ?>" readonly>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Mobile:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="venue-mobile" name="DayTimePhone" value="<?php echo e($users[0]->DayTimePhone); ?>" pattern="([0-9]){10}">
<span class="mobile-error" style="color: red;display: none;">Mobile number should contain 10 digits.</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Landline:</label>
<div class="col-sm-8">
<input type="number" class="form-control" id="venue-mobile" name="EveningPhone" value="<?php echo e($users[0]->EveningPhone); ?>" pattern="([0-9]){10}">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Facebook:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Facebook" value="<?php echo e($users[0]->Facebook); ?>">
</div>
</div>
</div>
<?php else: ?>
<div class="col xs-12 col-sm-6 col-md-6 col-lg-6">
<input type="hidden" name="AddressId" value="<?php echo e($users[0]->AddressId); ?>">
<div class="form-group">
<label class="control-label col-sm-4" for="txt">User Name:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="venue-name" name="UserName" value="<?php echo e($users[0]->UserName); ?>" pattern="([A-zÀ-ž\s]){3,25}">
<span class="error" style="color: red;display: none;">User Name Should contain only 5-25 characters</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Email:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" value="<?php echo e($users[0]->Email); ?>" readonly>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">User Type:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" value="<?php echo e($users[0]->UserType); ?>" readonly>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Mobile:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="venue-mobile" name="DayTimePhone" value="<?php echo e($users[0]->DayTimePhone); ?>" pattern="([0-9]){10}">
<span class="mobile-error" style="color: red;display: none;">Mobile number should contain 10 digits.</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Landline:</label>
<div class="col-sm-8">
<input type="number" class="form-control" id="txt" name="EveningPhone" value="<?php echo e($users[0]->EveningPhone); ?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Facebook:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Facebook" value="<?php echo e($users[0]->Facebook); ?>">
</div>
</div>
</div>
<?php endif; ?>
<?php if(count($address)>0): ?>
<div class="col xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Address:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="AddressLine1" value="<?php echo e($address[0]->AddressLine1); ?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">City</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="City" value="<?php echo e($address[0]->City); ?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="file">Postcode:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="post-code" name="PostCode" value="<?php echo e($address[0]->PostCode); ?>" pattern="([0-9]){3,25}">
<span class="post-error" style="color: red;display: none;">Post Code Should contain Numeric Characters</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Country:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Country" value="<?php echo e($address[0]->Country); ?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Twitter:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Twitter" value="<?php echo e($address[0]->Twitter); ?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Website:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Website" value="<?php echo e($address[0]->Website); ?>">
</div>
</div>
<button type="submit" class="btn btn-primary">Save and Continue</button>
</div>
<?php else: ?>
<div class="col xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Address:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="AddressLine1" value="NA">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">City</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="City" value="NA">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="file">Postcode:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="PostCode" value="NA">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Country:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Country" value="NA">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Twitter:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Twitter" value="NA">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Website:</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="txt" name="Website" value="NA">
</div>
</div>
<button type="submit" class="btn btn-primary">Save and Continue</button>
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<script>
function imgupload() {
$("#profileImage").click();
}
</script>
<!-- kin information code ends here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>