<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- Manage club starts here -->
<div class="container" id="main-code">
     <div class="fb-profile">
<h5 style="background-color:#46A6EA;color:#fff;"><a href="#"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-pencil"></i></button></a> Manage Venues</h5>
<div class="row" style="border:1px solid #eee">
  <div class="board">
    <div class="board-inner">
      <center>
        <div class="table table-responsive">
          <?php if(count($venues)>0): ?>
          <table class="table">
<thead>
<tr>
<th>Venue Name</th>
<th>Description</th>
<th>Mobile</th>
<th>Email</th>
<th>Website</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody>
<tr>
<td><?php echo e($venue->VenueName); ?></td>
<td><?php if(strlen($venue->VenueName)>25): ?>
                                <?php echo e(substr($venue->VenueName,0,25)); ?>...
                                <?php else: ?>
                                <?php echo e($venue->VenueName); ?>

                                <?php endif; ?></td>
<td><?php echo e($venue->Phone); ?></td>
<td><?php echo e($venue->Email); ?></td>
<td><?php echo e($venue->Website); ?></td>
<td><a href="<?php echo e(url('editvenue/'.$venue->VenueId)); ?>" class="btn btn-primary edit_button">
                      <i class="fa fa-edit"></i> Edit</a></td>
<td> <a href="<?php echo e(url('deletevenue/'.$venue->VenueId)); ?>" class=" btn btn-primary delete_button">
                        <i class="fa fa-trash"></i> Delete</a></td>
</tr>
</tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>
  </center>
  </div>
 <?php if(count($venues)>0): ?>
 <div class="text-center">
   <ul class="pagination">
<?php echo e($venues->links()); ?>

 </ul>
 </div>
</div>
<?php endif; ?>
<?php else: ?>
<h4>No Venues</h4>
<?php endif; ?>
</div>
</div>
</div>
  <!-- Manage ends here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>