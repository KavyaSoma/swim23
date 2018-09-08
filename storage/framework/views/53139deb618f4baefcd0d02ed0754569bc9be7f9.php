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
  <?php if($level_id == 1): ?>
  <li class="breadcrumb-item active">Heat Results</li>
  <?php elseif($level_id == 2): ?>
  <li class="breadcrumb-item active">Semifinal Results</li>
  <?php else: ?>
  <li class="breadcrumb-item active">Final Results</li>
  <?php endif; ?>
 </ol> 
   <div class="row text-center"> 
    <?php if( count($results)>0 ): ?>
    <table class='table table-striped' style="text-align:left;">
        <tr><th>Participant Name</th><th>RecordedTime</th><th>Result</th></tr>    
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($result->ParticipantName); ?></td><td><?php echo e($result->RecordedTime); ?></td><td><?php echo e($result->Result); ?></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </table>
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