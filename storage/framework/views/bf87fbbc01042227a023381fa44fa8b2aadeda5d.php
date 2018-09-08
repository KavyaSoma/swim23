<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
 <!-- Dashboard code starts here -->
  <div class="container" id="main-code" style="margin-top: 20px">
    <ol class="breadcrumb" style="background:#46A6EA;">
  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item active">Result entry</li>
 </ol>
     <div class="container" style="margin-top:20px;background-color:#fff">
       <div class="col-sm-12">
   <div class="tab-content preview_details">
      <div id="stage1" class="tab-pane fade in active">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
           <div class="panel panel-default active col-md-12">
                       <!-- <div class="panel-heading" style="margin-left:-15px;margin-right:-15px"  role="tab" id="headingOne">
                          <ul class="nav nav-tabs preview_tabs">
                          <?php $__currentLoopData = $heat_participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heat_paarticipant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li onclick="participants('<?php echo e(url('resultentry/'.$event_id.'/'.$heat_paarticipant->HeatId)); ?>')"><a data-toggle="tab" href="#heat1"><?php echo e($heat_paarticipant->HeatName); ?></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                        </div>-->
 
      <div id="heat1" class="tab-pane fade in active">
      <div class="panel-body">
    
      
      <?php if(count($participants)>0): ?>
      <form method="post" action="<?php echo e(url('uploadexcel')); ?>" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="event_id" value="<?php echo e($event_id); ?>">
          <input type="hidden" name="heat_id" value="<?php echo e($heat_id); ?>">
          <input type="hidden" name="stage" value="<?php echo e($level_id); ?>">
          <input type="file" name="excelfile" id="excelfile" required> 
          <button type="submit" class="btn btn-danger">Upload</button>
      </form>
      <hr/>
      <form method="post" action="<?php echo e(url('resultentry/'.$event_id.'/'.$heat_id.'/'.$level_id)); ?>"> 
        <?php echo e(csrf_field()); ?>

    <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Record Time</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><img src="<?php echo e(url('public/'.$participant->Image)); ?>" class="img-circle" height="40px" width="40px"><span> <?php echo e($participant->ParticipantName); ?></span></td>
        <td>
          <div class="form-group">
          <div class="col-sm-6">
            <div class="input-group">
              <input type="hidden" name="event_id" value="<?php echo e($event_id); ?>">
          <input type="hidden" name="heat_id" value="<?php echo e($heat_id); ?>">
          <input type="hidden" name="stage" value="<?php echo e($level_id); ?>">
              <input type="hidden" name="userid[]" value="<?php echo e($participant->ParticipantId); ?>">
                <input type="text" class="form-control" id="tme" name="time[]" step="2" required>
            </div>
          </div>
        </div>
      </td>
        <td><div class="form-group">
        <div class="col-sm-6">
           <select class="form-control" name="result[]" required>
            <option value="">select</option>
            <?php if($level_id == 1): ?>
            <option value="semifinal">Move to SemiFinal</option>
            <option value="failed">Failed</option>
            <?php elseif($level_id == 2): ?>
            <option value="final">Final</option>
            <option value="failed">Failed</option>
            <?php else: ?>
            <option value="qualified">Qualified</option>
            <option value="failed">Failed</option>
            <?php endif; ?>
          </select>
        </div>
        </div></td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
  <center><button class="btn btn-primary">Submit</button></center>
</form>
<?php else: ?>

<h4>Participants Not Added to Heat</h4>
</div>
<?php endif; ?>

</div>

           </div>
</div>
</div>
</div>
 




   
           <!-- End fluid width widget -->
     </div>
     </div>
   </form>
   </div>

     </div>

</div>

</div>
</div>

</div>

</div>
<script>
  $(document).ready(function() {
console.log('<?php echo e(url('resultentry/'.$event_id.'/3')); ?>');
$.ajax({
    url: '<?php echo e(url('resultentry/'.$event_id.'/3')); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#heat_participants').html(html);
      }
    },
    async:true
  });
              });
  </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>