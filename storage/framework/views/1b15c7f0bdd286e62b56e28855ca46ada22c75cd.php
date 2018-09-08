<?php $__env->startSection('content'); ?>
<div class="row1">
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>">
    <?php echo session('message.content'); ?>

    </div>
<?php endif; ?>
    <!-- venue info code starts here -->
<div class="container" id="main-code">
  <div class="row" id="venuepreview_tabs">
    <div class="col-sm-8">
     <?php if(count($venues)>0): ?>
        <ul class="nav nav-tabs preview_tabs mob-none">
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuepool')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Pool Details</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i>Events</a></li>
          <li class="active"><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Address</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
        </ul>
      <ul class="nav nav-tabs preview_tabs desk-none mob-block tab-none">
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuepool')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i></a></li>
          <li  class="active"><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i></a></li>
        </ul>
      <?php endif; ?>
      <div class="tab-content preview_details">
         <div id="venuepreview-address" class="tab-pane fade in active">
          <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <form class="form-horizontal">
                 <div class="col xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div>
                        <h4 class="field_names">Address</h4></div>
                     <p><?php echo e($add->AddressLine1); ?>,<?php echo e($add->AddressLine2); ?>,<?php echo e($add->AddressLine3); ?>.</p><hr>
                     <div>
                       <h4 class="field_names">City</h4></div>
                     <p><?php echo e($add->City); ?>x</p><hr>
                     <div>
                        <h4 class="field_names">Post Code</h4></div>
                     <p> <?php echo e($add->PostCode); ?></p><hr>
                     <div>
                        <h4 class="field_names">Town</h4></div>
                     <p> <?php echo e($add->County); ?></p><hr>
                  <div>
                        <h4 class="field_names">Country</h4></div>
                     <p> <?php echo e($add->Country); ?></p>
                   </div>
                 </form>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               </div>
    <br><br>
    </div>
    <?php echo $__env->make('venuesidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>