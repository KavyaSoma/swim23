<?php $__env->startSection('content'); ?>
<!-- mail box code starts here -->
 <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>

<div class="container" style="margin-top:20px;background-color:#fff" id="main-code">
  <ul class="nav nav-tabs preview_tabs">
      <li class="active"><a data-toggle="tab" href="#reply">Reply</a></li>
      <li><a href="#" onclick="history.go(-1)"> Back</a></li>
      <!--<li class="pull-right"><a data-toggle="tab" href=""><i class="fa fa-trash" style="color:#46A6EA"></i> Delete</a></li>-->
</ul>
  <div class="tab-content preview_details">
    <div id="reply" class="tab-pane fade in active">
        <div class="col-md-12">
           <div class="box-body"><hr>
             <?php if(Count($messages)==1): ?>
          
          <div class="icons pull-right">
            <i class="fa fa-archive" onclick="archive('<?php echo e(url('archive/'.$sender_id.','.$message_id)); ?>')"></i>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <i class="fa fa-forward" aria-hidden="true" onclick="forward('<?php echo e($message->Subject); ?>','<?php echo e($message->Message); ?>')"></i>
           <a href="#myModl" data-toggle="modal">
   <i class="fa fa-trash"  title="delete" style="color: black;font-size:18px"></i></a>
        </div>
              <p><b>Subject :</b><?php echo e($message->Subject); ?></p>
              <p><b>From :</b><?php echo e($message->Sender); ?> <br><p>
                <p><b>To :</b> <?php echo e($message->Receiver); ?> </p>
              <p><?php echo e($message->Message); ?></p><hr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <div class="icons pull-right">
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <i class="fa fa-forward" aria-hidden="true" onclick="forward('<?php echo e($message->Subject); ?>','<?php echo e($message->Message); ?>')"></i>
          <span class="glyphicon glyphicon-trash " id="delete-msg" onclick="deletemsg('<?php echo e($message->MessageId); ?>','<?php echo e(url('deletemessage/'.$message->MessageId)); ?>')"></span> <a href="#myModl" data-toggle="modal">
   <i class="fa fa-trash"  title="delete" style="color: black;font-size:18px"></i></a>
        </div>
              <p><b>Subject: </b><?php echo e($message->Subject); ?></p>
              <p><b>From :</b><?php echo e($message->Sender); ?> <br><b>To :</b> <?php echo e($message->Receiver); ?> </p>
              <p><?php echo e($message->Message); ?></p><hr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if(count($replymessage)==1): ?>
             <?php $__currentLoopData = $replymessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="icons pull-right">
              <i class="fa fa-forward" aria-hidden="true" onclick="forward('<?php echo e($reply->Subject); ?>','<?php echo e($reply->Message); ?>')"></i>
               <a href="#myModl" data-toggle="modal">
   <i class="fa fa-trash"  title="delete" style="color: black;font-size:18px"></i></a>
             </div>
              <p><b>Subject: </b><?php echo e($reply->Subject); ?></p>
              <p><b>From: </b><?php echo e($reply->Sender); ?> <br><b>To :</b> <?php echo e($reply->Receiver); ?> </p>
              <p><?php echo e($reply->Message); ?></p><hr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
               <?php $__currentLoopData = $replymessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="icons pull-right">
              <i class="fa fa-forward" aria-hidden="true" onclick="forward('<?php echo e($reply->Subject); ?>','<?php echo e($reply->Message); ?>')"></i>
               <a href="#myModl" data-toggle="modal">
   <i class="fa fa-trash"  title="delete" style="color: black;font-size:18px"></i></a>
             </div>
              <p><b>Subject: </b><?php echo e($reply->Subject); ?></p>
              <p><b>From: </b><?php echo e($reply->Sender); ?> <br><b>To :</b> <?php echo e($reply->Receiver); ?> </p>
              <p><?php echo e($reply->Message); ?></p><hr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

    <!-- Button HTML (to Trigger Modal) -->
     

    <!-- Modal HTML -->
    <div id="myModl" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete???</p>
                 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?php echo e(url('deletemessage/'.$message_id)); ?>" type="button" class="btn btn-primary">Save changes</a>
                </div>
            </div>
        </div>
    </div>
            <form method="post" action="<?php echo e(url('replymessage/'.$sender_id.','.$message_id)); ?>" id="reply-message">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <input type="hidden" name="to_mail" value="<?php echo e($sender); ?>">
                <input class="form-control" placeholder="Subject" id="reply-subject" name="subject" value="<?php echo e($subject); ?>" readonly>
                <div class="replysubject" style="color: red;display: none"><span>subject should contain maximum of 100 characters</span></div>
              </div>
              <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" name="message" style="height:80px" required></textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" id="submit-reply">Reply</button>

              <button type="reset" class="btn btn-default" id="reply-reset">Cancel</button>
              </div>
               </form>
               <form method="post" action="<?php echo e(url('sendmessage')); ?>" id="forwardmsg" style="display: none">
          <?php echo e(csrf_field()); ?>

        <div class="col-md-12">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="To:" id="to_email" name="to_mail" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject:" id="forward-subject" name="subject" pattern="([A-zÀ-ž0-9\s]){3,100}" required>
                <div class="forward-sub-error" style="color: red; display: none"><span>Subject Should Contain maximum of 100 characters</span></div>
              </div>
              <div class="form-group">
                  <textarea id="forward-message" class="form-control" style="height: 100px" name="message" required></textarea>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" id="forward-reply">Forward</button>

              <button type="reset" class="btn btn-default" id="reset-forward">Cancel</button>
              </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
         </form>

  <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
      <!--  
        <center>
          <ul class="pagination">

          <li><a href="#">Previous</a></li>
          <li><a href="#">1-6</a></li>
          <li><a href="#">Next</a></li>
        </ul></center>-->
    </div>
      </div>

</div>
<br><br>
</div>
</div>
</div>

<script>
$(document).ready(function() {
                           var options = {
                               url: function(phrase) {
                                   return "<?php echo e(url('sendmessage')); ?>/"+phrase;
                               },

                               getValue: "Email"
                           };

                           $("#to_email").easyAutocomplete(options);
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>