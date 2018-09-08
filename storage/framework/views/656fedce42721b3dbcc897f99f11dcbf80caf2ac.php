<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!--Heat setup starts here -->
  <div class="container" style="margin-top:20px">
  <ol class="breadcrumb" style="background:#46A6EA;">
  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item"><a href="<?php echo e(url('/manageheatsetup')); ?>">Heat setup & Result entry</a></li>
  <li class="breadcrumb-item"><a href="<?php echo e(url('/heatsetup/'.$event_id)); ?>">Heat Setup</a></li>
  <li class="breadcrumb-item active">Add Participants</li>
 </ol>    
  <div class="row">
    <div class="board">
        <div class="tab-content tab_details">            
<div class="tab-pane fade in active" id="manageparticipants">
<form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('manageparticipants/'.$event_id.'/'.$heat_id)); ?>">
  <?php echo e(csrf_field()); ?>

<div class="form-group">
<label class="control-label col-sm-4 form_heat" for="sel1">Select Heat:</label>
<div class="col-sm-6">
  <?php if(count($heats)>0): ?>
<select class="form-control country" id="sel1"  name="heats_id" onchange="heats('<?php echo e(url('manageparticipants/'.$event_id)); ?>')">
   <option>Select Option</option>
  <?php $__currentLoopData = $heats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($heat->HeatId); ?>" <?php if($heat_id == $heat->HeatId): ?> selected <?php endif; ?>><?php echo e($heat->HeatName); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php else: ?>
<h4>Add Heat</h4>
<?php endif; ?>
  </div>
</div>
<hr>
<div class="col-sm-4">
<ul class="list-group">
  <li class="list-group-item active">
    <div class="checkbox">
      <label>Participants</label>
    </div>
  </li>
<?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
  <li class="list-group-item">
    <div class="checkbox">
    <label><input type="checkbox" value="<?php echo e($participant->ParticipantId); ?>" name="participants[]"><?php echo e($participant->ParticipantName); ?></label>
   </div>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
</div>
 <div class="col-sm-offset-1 col-sm-3" style="margin-top:30px">
<button class="btn btn-primary" style="width: 170px"> Move to Heat <i class="fa fa-arrow-right" style="color:#ff6600"></i> </button><br><br>
</form>
<form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('manageparticipants/'.$event_id.'/'.$heat_id)); ?>">
  <?php echo e(csrf_field()); ?>

 <button class="btn btn-primary"><i class="fa fa-arrow-left"  style="color:#ff6600"></i> Move to Participants</button><br><br>
</div>
<div class="row">
<div class="col-sm-4">
<ul class="list-group">
  <li class="list-group-item active">
    <div class="checkbox">
      <label><?php echo e($heatname); ?></label>
    </div>
  </li>
  <?php $__currentLoopData = $heat_participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heat_participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <li class="list-group-item ">
    <div class="checkbox">
      <label><input type="checkbox" value="<?php echo e($heat_participant->ParticipantId); ?>" name="heats_participants[]"><?php echo e($heat_participant->ParticipantName); ?></label>
    </div>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>
</div>
</div>
<hr>
<center>
</form>
<form method="post" action="<?php echo e(url('manageparticipants/'.$event_id.'/'.$heat_id)); ?>">
	<?php echo e(csrf_field()); ?>

<button class="btn btn-primary" style="margin-left: 40px">Save Participants</button>

 </center>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
  function heats(url){
  var selectedCountry = $(".country option:selected ").val();
  window.location.assign(url+'/'+selectedCountry);
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>