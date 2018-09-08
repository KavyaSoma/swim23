<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
 <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      <div id="old_schedule">
                
                </div><br>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
   
  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
               
                 <li><a href="" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li  class="active"><a href="" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li><a href="" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
<div class="tab-content tab_details">
  
                      <div class="tab-pane fade in active" id="eventschedule">
                         <h5 style="color:#46A6EA"><b>Schedule</b></h5>
                          <div class="row">
                            <form method="post" action="<?php echo e(url('edit-scheduleevent/'.$event_id)); ?>">
                              <?php echo e(csrf_field()); ?>

                              <div class="form-group" id="field1">
                                  <label class="control-label col-sm-2" for="txt">Occurance:</label>
                                  
                                        <ul class="nav nav-pills">
                <li class="<?php echo e(url('edit-scheduleevent/'.$event_id)); ?>"><a href="" style="background-color:#46A6EA">One Time</a></li>
                <li><a href="<?php echo e(url('edit-multipleevent/'.$event_id)); ?>"  style="background-color:#ddd;color:#46A6EA">Multiple</a></li>
                <li><a href="<?php echo e(url('edit-recuringevent/'.$event_id)); ?>" style="background-color:#ddd;color:#46A6EA">Recurring</a></li>
           </ul>
                                      
                              </div>
                    </div>
               
                      <div class="row one" id="single">
                        <hr>
                  <div class="col-md-3">
                        <div class="form-group">
                        <label class="control-label col-xs-4s col-sm-4" for="dte">Between:</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="dte" name="start_date">
                            <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="dte">And:</label>
                      <div class="input-group">
                          <input type="date" class="form-control" id="dte" name="end_date">
                          <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="tme">StartTime:</label>
                    <div class="input-group">
                        <input type="time" class="form-control" id="tme" name="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="tme">EndTime:</label>
                    <div class="input-group">
                        <input type="time" class="form-control" id="tme" name="endtime">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                  </div>
                </div>
                  <center>
                <button class="btn btn-primary mybtn" type="submit">Update</button>
                
              </form>
              <form method="get" action="<?php echo e(url('editpage/event/subevent/'.$event_id)); ?>">
                        <center><button type="submit" class="btn btn-primary mybtn">Back</button></center>
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
console.log('<?php echo e(url('getoldevents/schedule/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/schedule/'.$event_id)); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_schedule').html(html);
      }
    },
    async:true
  });
              });
</script>
                      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>