<?php $__env->startSection('content'); ?>
<!-- mail box code starts here -->
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<div class="container" style="margin-top:20px;" id="main-code">
   <ol class="breadcrumb" style="background:#46A6EA;">
  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item active">Heat setup & Result entry</li>
 </ol> 
   <div class="row text-center"> 
    <?php if( count($events)>0 ): ?>
    <table class='table table-striped' style="text-align:left;">
        <tr><th>SubEvent Name</th><th>Heat setup</th><th>Results entry</th></tr>    
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($event->SubEventName); ?></td><td><a href="<?php echo e(url('heatsetup/'.$event->EventId.'/'.$event->SubEventId)); ?>" style="color:#000;">setup heats?</a></td><td><a href="#" style="color:#000;">results entry?</a></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </table>
      <?php if(count($events)>0): ?>
 <div class="text-center">
   <ul class="pagination">
<?php echo e($events->links()); ?>

 </ul>
 </div>
</div>
<?php endif; ?>
    <?php else: ?>
    <h4>You have not created any events yet to setup Heats , <a href='<?php echo e(url('addevent')); ?>'>Click here</a> to create an event.</h4>
    <?php endif; ?>
</div>
</div>
</div>
</div>
<!-- mailbox code ends here -->
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>