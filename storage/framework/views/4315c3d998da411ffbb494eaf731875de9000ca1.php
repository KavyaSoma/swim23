  <?php $__env->startSection('content'); ?> 
     <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<div class="container" style="margin-top:20px;background-color:#fff" id="main-code">
  <ul class="nav nav-tabs preview_tabs">
      <li><a  href="<?php echo e(url('/inbox')); ?>">Inbox</a></li>
      <li ><a  href="<?php echo e(url('/sendmessage')); ?>">Compose</a></li>
      <li  class="active"><a href="<?php echo e(url('sentmessage')); ?>">Sent</a></li>
      <li><a href="<?php echo e(url('archivemessage')); ?>">Archive</a></li>
      <!--<li class="pull-right"><a href="#"><i class="fa fa-trash" style="color:#46A6EA"></i> Delete</a></li>-->
</ul>
  <div class="tab-content preview_details">  
     <div id="sent" >
        <div class="col-md-12" style="margin-top:10px">
        <div class="chat_list">
          <ul class="list-group">
                   <?php $__currentLoopData = $outgoing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item">
                  <div class="pull-left">
                      <div>
                        <div class="checkbox">
  <label><input type="checkbox" value="">
  <img class="img-circle"  alt="User1" src="<?php echo e(asset('public/images/swimm6.jpg')); ?>" id="mail_img"></label> 
  </div>
                      </div>
                  </div>
                  <a href="<?php echo e(url('replymessage/'.$sent->UserId.','.$sent->MessageId)); ?>" style="color: black">
                  <small class="pull-right text-muted"><?php echo e($sent->date); ?></small>
                  <div>
                      <p class="message_text"><b>To : </b><?php echo e($sent->Receiver); ?> (<?php echo e($sent->Subject); ?>) <?php echo e($sent->Message); ?></p>
                  </div></a>
              </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
      <!--<center>
        <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </center>-->
  </div>
     </div>
   </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>