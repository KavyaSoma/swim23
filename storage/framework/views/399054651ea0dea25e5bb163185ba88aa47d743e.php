<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<center>
<?php if(count($event_details)>0): ?>
<table>
	<tr>
		<th>EventName</th>
		<th>StartDate</th>
		<th>EndDate</th>
		<th>Accept/Reject</th>
	</tr>
	<form method="post" action="<?php echo e(url('venueevents/'.$venue_id)); ?>">
		<?php echo e(csrf_field()); ?>

<?php $__currentLoopData = $event_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

	<td><input type="text" name="id[]" value="<?php echo e($event->Id); ?>">
		<input type="hidden" name="event_id[]" value="<?php echo e($event->EventId); ?>">
		<input type="hidden" name="event_id[]" value="<?php echo e($event->EventId); ?>"><?php echo e($event->EventId); ?> <?php echo e($event->EventName); ?></td>
	<td><input type="hidden" name="start_date[]" value="<?php echo e($event->StartDateTime); ?>"> <?php echo e($event->StartDateTime); ?></td>
	<td><input type="hidden" name="end_date[]" value="<?php echo e($event->EndDateTime); ?>"><?php echo e($event->EndDateTime); ?></td>
	<td><input type="checkbox" name="bridge_id[]" value="<?php echo e($event->Id); ?>" <?php if($event->ApproveStatus == "Accepted"): ?> checked <?php endif; ?>></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<input type="submit" name="submit">
</form>


<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>