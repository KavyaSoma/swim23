 
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<!-- kin information code starts here -->
<?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="container" id="main-code">
     <div class="col-xs-12 col-sm-6 col-md-3 kin_photo">
     <div class="fb-profile"  style="margin-top:13%">
    <img class="thumbnail profile_image" id="image_<?php echo e($club->ClubId); ?>" src="<?php echo e(url('public/images/club.jpg')); ?>"/>     <div class="fb-profile-text text-center">
         <h3><?php echo e($club->ClubName); ?></h3>
          <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:<?php echo e($club->Country); ?></p>
</div>
</div>
</div>
 <div class="col-xs-12 col-sm-6 col-md-9 kin_info">
<form class="form-horizontal kin_infor">
          <div class="well" style="background:#fff">
          <div class="row">
        <div class="col xs-12 col-sm-12 col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4">
              <div>
                  <h4 class="field_names">Club Type</h4></div>
         <p><?php echo e($club->ClubType); ?></p>
           <div>
                  <h4 class="field_names">Short Name</h4></div>
              <p><?php echo e($club->ShortName); ?></p>
                 <div>
                    <h4 class="field_names">Address</h4></div>
                 <p><?php echo e($club->AddressLine1); ?></p>
                 <div>
                   <h4 class="field_names">City</h4></div>
                 <p><?php echo e($club->City); ?></p>
                 <div>
                   <h4 class="field_names">Post code</h4></div>
                 <p><?php echo e($club->PostCode); ?></p>
                 <div>
                   <h4 class="field_names">Town</h4></div>
                 <p><?php echo e($club->County); ?></p>
                 <div>
                   <h4 class="field_names">Mobile</h4></div>
                 <p><?php echo e($club->MobilePhone); ?></p>
               </div>
                 <div class="col xs-12 col-sm-12 col-md-6 col-lg-6">
                 <div>
                   <h4 class="field_names">Email</h4></div>
                 <p><?php echo e($club->Email); ?></p>
                 <div>
                   <h4 class="field_names">Web</h4></div>
                 <p><?php echo e($club->Website); ?></p>
                 <div>
                   <h4 class="field_names">Facebook</h4></div>
                 <p><?php echo e($club->Facebook); ?></p>
                 <div>
                   <h4 class="field_names">Google +</h4></div>
                 <p><?php echo e($club->GooglePlus); ?></p>
                 <div>
                   <h4 class="field_names">Twitter</h4></div>
                 <p><?php echo e($club->Twitter); ?></p>
                 <div>
                   <h4 class="field_names">Others</h4></div>
                 <p><?php echo e($club->Others); ?></p>
               </div>

  </div>
  <div class="col-sm-offset-2">

    <h4 class="field_names">Description</h4></div>
  <p class=" col-sm-offset-2"><?php echo e($club->Description); ?></p>

</div>

</div>
<center>
<?php if(count($bridgemembers)>0): ?>
<?php if($bridgemembers[0]->ApproveStatus == 'pending'): ?>
<button class="btn btn-primary"><a href="<?php echo e(url('/club/'.$club->ShortName)); ?>">Request Sent</a></button>
<?php elseif($bridgemembers[0]->ApproveStatus == 'accepted'): ?>
 <button class="btn btn-primary"><a href="<?php echo e(url('/club/'.$club->ShortName)); ?>">Accepted</a></button>
<?php elseif($bridgemembers[0]->ApproveStatus == 'rejected'): ?>
 <button class="btn btn-primary"><a href="<?php echo e(url('/club/'.$club->ShortName)); ?>">Rejected</a></button>
<?php endif; ?>
<?php else: ?>
 <button class="btn btn-primary"><a href="<?php echo e(url('/club/'.$club->ShortName.'/join')); ?>">Join Now</a></button>
<?php endif; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!-- kin information code ends here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>