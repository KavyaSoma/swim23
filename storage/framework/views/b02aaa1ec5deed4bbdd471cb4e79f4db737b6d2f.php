<?php $__env->startSection('content'); ?>

<div id="perf_div" style="width:800px;height:800px;"></div>

<?php echo \Lava::render('ColumnChart', 'Finances', 'perf_div'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>