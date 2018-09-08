<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margi-left:13px;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<!-- instructor preview code starts here -->
   <div class="container" id="main-code">
     <div class="fb-profile">

  <div class="container" style="margin-top:20px;background-color:#fff;padding:10px">
      <div class="col-sm-9">
      <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul class="nav nav-tabs preview_tabs mob-none">
        <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName)); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> Events</a></li>
         <li class="active"><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructoraddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Address</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorqualification')); ?>"> <i class="fa fa-globe" aria-hidden="true" id="info_fa"></i> Qualification</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
            <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/bookinstructor')); ?>"> Book Instructor</a></li>
   </ul>
   <ul class="nav nav-tabs preview_tabs desk-none mob-block tab-none">
        <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName)); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i></a></li>
         <li class="active"><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructoraddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i></a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorqualification')); ?>"> <i class="fa fa-globe" aria-hidden="true" id="info_fa"></i></a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i></a></li>
            <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/bookinstructor')); ?>"> Book Instructor</a></li>
   </ul>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <div id="instructorpreview-address" class="tab-pane fade in active">
  <form class="form-horizontal">
    <?php $__currentLoopData = $instructoraddress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col xs-12 col-sm-12 col-md-12 col-lg-12">
      <div>
    <h4 class="field_names">Address</h4></div>
   <p><?php echo e($address->AddressLine1); ?>,<?php echo e($address->AddressLine2); ?>,<?php echo e($address->AddressLine3); ?>.</p><hr>
   <div>
   <h4 class="field_names">Town</h4></div>
   <p><?php echo e($address->County); ?>,<?php echo e($address->City); ?>,<?php echo e($address->PostCode); ?></p><hr>
   <div>
    <h4 class="field_names">Country</h4></div>
   <p> <?php echo e($address->Country); ?></p><hr>
</div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php echo $__env->make('instructorsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>