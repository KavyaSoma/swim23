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
          <li class="active"><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i>Events</a></li>
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Address</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
        </ul>
      <ul class="nav nav-tabs preview_tabs desk-none mob-block tab-none">
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuepool')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
          <li  class="active"><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i></a></li>
        </ul>
      <?php endif; ?>
      <div class="tab-content preview_details">
           <div id="venuepreview-events" class="tab-pane fade in active">
           <form class="form-horizontal">
             <div class="col xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row">
                 <div class="col-sm-12">
                   <div class="tab-content preview_details">
                       
                        </div>
        </div>
      </div>
              <div class="col-sm-12">
<div class="box box-primary" style="margin-top:10%">
<div class="box-body no-padding">
   <?php echo $calendar->calendar(); ?>

</div>
 </div>
</div>
          </div><br>
           </div>
           </div>
    <br><br>
    </div>
    <?php echo $__env->make('venuesidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.calendarmain', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>