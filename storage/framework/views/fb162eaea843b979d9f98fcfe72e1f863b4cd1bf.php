  
  <?php $__env->startSection('content'); ?> 
     <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <script>
$.trumbowyg.svgPath = '<?php echo e(url('public/dist/ui/icons.svg')); ?>';
</script>
<div class="container" style="margin-top:20px;background-color:#fff" id="main-code">
  <ul class="nav nav-tabs preview_tabs">
      <li><a  href="<?php echo e(url('/inbox')); ?>">Inbox</a></li>
      <li  class="active"><a  href="<?php echo e(url('/sendmessage')); ?>">Compose</a></li>
      <li><a href="<?php echo e(url('sentmessage')); ?>">Sent</a></li>
      <li><a href="<?php echo e(url('archivemessage')); ?>">Archive</a></li>
      <!--<li class="pull-right"><a href="#"><i class="fa fa-trash" style="color:#46A6EA"></i> Delete</a></li>-->
</ul>
  <div class="tab-content preview_details">
         <form method="post" action="<?php echo e(url('sendmessage')); ?>">
          <?php echo e(csrf_field()); ?>

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title" style="margin-top:20px;color:#46A6EA;"><i class="fa fa-paper-plane" style="color:#ff6600"></i> Compose New Message</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" placeholder="From:" name="from_mail"  value="<?php echo e(Session::get('user_email')); ?>" readonly>
              </div>
              <div class="form-group">
        <div class="easy-autocomplete">
      
       <input type="email" class="form-control" id="email-suggestions" name="to_mail"  placeholder="To:" autocomplete="off" required>
       <div class="easy-autocomplete-container" id="eac-container-provider-remote"><ul style="display: none;"></ul></div></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject:" id="to_subject" name="subject" pattern="([A-zÀ-ž0-9\s]){3,100}" required>
                <div class="subject" style="color: red; display: none"><span>Subject Should Contain maximum of 100 characters</span></div>
              </div>
              <div class="form-group">
                  <textarea class="form-control" rows="30" name="message" placeholder="Start your Story" id="seditor" required>
                  <!--<textarea id="compose-textarea" class="form-control" id="message" style="height: 300px" name="message" required>-->
                    
                  </textarea>
              </div>
             <div class="form-group">
               <div class="btn btn-default btn-file">
                 <div onclick="uploadfile()" > <i class="fa fa-paperclip"></i> Attachment </div>
               </div>
                <input type="file" name="attachment" id="attachment" style="display:none" accept=".jpg, .png, .doc">
                <p class="help-block" id="max-size">Max.2MB</p>
                <span id="attachment-error" style="display: none;color: red">Maximum File Size should be 2MB.</span>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">

                
                <button type="submit" class="btn btn-primary" id="send-message"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default" id="dicard-message" ><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
         </form>
       </div>
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

                           $("#email-suggestions").easyAutocomplete(options);
});
   </script>
     <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>