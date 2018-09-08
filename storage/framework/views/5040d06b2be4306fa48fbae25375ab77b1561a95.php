 
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
  <div class="container" id="main-code">
  <div class="row" id="eventpreview_tabs">
    <div class="col-sm-8">
      <?php if( count($events) > 0 ): ?>
        <ul class="nav nav-tabs preview_tabs mob-none">
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
          <li class="active"><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/subevent')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Sub Event Details</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventschedule')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> Schedule</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventvenue')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Venue</a></li>
          
      </ul>
	  <ul class="nav nav-tabs preview_tabs mob-none desk-none mob-block tab-none">
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i></a></li>
          <li class="active"><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/subevent')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventschedule')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> </a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> </a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventvenue')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> </a></li>
          
      </ul>
      <?php endif; ?>
      <div class="tab-content preview_details">
         <div id="eventpreview-subevents" class="tab-pane fade in active">
          <div class="table table-responsive" style="margin-top: 3%">
         <table class="table table-bordered">
<thead>
<tr>
<th>Sub Event Name</th>
<th>Swim Style</th>
<th>Course</th>
<th>Maximum Participants</th>
<th>Minimum Participants</th>
<th>Maximum Age</th>
<th>Minimum Age</th>
<th>Special Instructions</th>
</tr>
</thead>
<?php $__currentLoopData = $subevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subevent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody>
<tr>
<td><?php echo e($subevent->SubEventName); ?></td>
<td><?php echo e($subevent->SwimStyle); ?></td>
<td><?php echo e($subevent->Course); ?></td>
<td><?php echo e($subevent->MaxParticipants); ?></td>
<td><?php echo e($subevent->MinParticipants); ?></td>
<td><?php echo e($subevent->MaximumAge); ?></td>
<td><?php echo e($subevent->MinimumAge); ?></td>
<td><?php echo e($subevent->SpecialInstructions); ?></td>
</tr>
</tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
         </div>
    </div>
  </div>
      <?php echo $__env->make('eventsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 </div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>