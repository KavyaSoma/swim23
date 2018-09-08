<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin-left:13px;text-align: center">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<div class="container">
        <h5 class="add_venue"><a href="#"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button></a> Add Kin</h5>
  <div class="row" style="border:1px solid #eee">
      <div class="board">
        <div class="board-inner">
          <center><ul class="nav nav-tabs nav_info" id="myTab">
              <div class="liner"></div>
                <li>
                      <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="<?php echo e(url('editkin/'.$participant->ParticipantId)); ?>" class="tab-one" title="Kin Basic Details">
                    <span class="round-tabs">
                      <i class="fa fa-info"></i>
                    </span>
                   </a>
                 </li>
                   <li  class="active">
                      <a href="<?php echo e(url('kincontact')); ?>" class="tab-one"  title="Emergency Contact">
                        <span class="round-tabs">
                          <i class="fa fa-phone"></i>
                        </span>
                     </a>
                    </li>
              </ul></center>
          </div>
<div class="tab-pane fade in active" id="kin_contact">
      <form class="form-horizontal" action="<?php echo e(url('editkincontact/'.$participant_id)); ?>" method="post" style="background:#fff;padding:35px">
        <?php echo e(csrf_field()); ?>

            <div class="col-sm-12">
              <div class="form-group">
                <label class="control-label col-sm-4" for="txt">EmergencyContact Name:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="contactname" name="EmergencyContactName" value="<?php echo e($participant->EmergencyContactName); ?>" required>
                  <div class="error" style="color: red;display: none">Contact Name Should Contain only Characters</div>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-4" for="txt">EmergencyContact Number:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="contactnumber" name="EmergencyContactNumber" value="<?php echo e($participant->EmergencyContactNumber); ?>" required>
                  <div class="mobile-error" style="color: red;display: none">Mobile Number Should Contain Numeric Characters</div>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-4" for="txt">EmergencyContact Address:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" name="EmergencyContactAddress" value="<?php echo e($participant->EmergencyContactAddress); ?>" required>
                </div>
                </div>
                
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                  <center>
                        <a href="<?php echo e(url('editkin/'.$participant_id)); ?>" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button><br><br>
 
                  </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </div>
 </div>
 </div>
 </div>
 <script>
  $(document).ready(function() {
    var $regexname = /^([0-9]{7,11})$/;
  $("#contactnumber").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('.mobile-error').show();
    }
    else{
      $('.mobile-error').hide();
    }
  });
     var $regex=/^([a-zA-Z]{3,50})$/;
  $("#contactname").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regex)){
      $('.error').show();
    }
    else{
      $('.error').hide();
    }
  });
 var options = {
     data:[
      {"EmergencyContactName": "EmergencyContactName",
       "EmergencyContactNumber":"EmergencyContactNumber",
       "EmergencyContactAddress":"EmergencyContactAddress",
       }
    ],
  url: function(phrase) {
    return "<?php echo e(url('contactkin')); ?>/"+phrase;
  },
  getValue: "EmergencyContactName",
   list: {
    onSelectItemEvent: function() {
      var phone = $("#contactname").getSelectedItemData().EmergencyContactNumber;
      var address = $("#contactname").getSelectedItemData().EmergencyContactAddress;
     
      $("#contactnumber").val(phone).trigger("change");
      $("#address").val(address).trigger("change");
    }
  }
  };
  $("#contactname").easyAutocomplete(options); 
});
 </script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>