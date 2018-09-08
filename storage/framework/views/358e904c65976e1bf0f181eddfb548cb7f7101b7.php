 
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
  <div class="container" id="main-code">
  <div class="row" id="eventpreview_tabs">
    <div class="col-sm-8">
        <ul class="nav nav-tabs preview_tabs mob-none">
          <li class="active"><a href="<?php echo e(url('event/'.$events[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/subevent')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Sub Event Details</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventschedule')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> Schedule</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventvenue')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Venue</a></li>
      </ul>
	  <ul class="nav nav-tabs preview_tabs mob-none desk-none mob-block tab-none">
          <li class="active"><a href="<?php echo e(url('event/'.$events[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/subevent')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventschedule')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/eventvenue')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i></a></li>
      </ul>
      <div class="tab-content preview_details">
        <?php if( count($events) > 0 ): ?>
  <div id="eventpreview-basic" class="tab-pane fade in active">
          <form class="form-horizontal">
            <div class="col xs-12 col-sm-12 col-md-12 col-lg-12">
              <div>
                <h4 class="field_names">Event Name</h4>
              </div>
                <p><?php echo e($events[0]->EventName); ?></p><hr>
                <div>
                  <h4 class="field_names">Short Name</h4>
                </div>
                  <p> <?php echo e($events[0]->ShortName); ?></p>
              <div>
                <h4 class="field_names">Description</h4>
              </div>
                <p><?php echo e($events[0]->Description); ?>.</p><hr>
              </div>
              
         </form>
       </div>
       <?php endif; ?>
         </div>
    </div>
   <?php echo $__env->make('eventsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>