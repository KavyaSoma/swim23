<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
     <div class="container" id="main-code">
      <h5 class="add_venue"><a href="#"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button></a> Add Event</h5>
      <div class="row" style="border:1px solid #eee">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                  <li>
                <a href="#" class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li><a href="#" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li   class="active"><a href="#" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="#" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li><a href="#" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="#" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
<div class="tab-content tab_details">
  
                      <div class="tab-pane fade in active" id="eventschedule">
                          <div class="row">
                            <form method="post" action="<?php echo e(url('schedule-event/'.$event_id)); ?>">
                              <?php echo e(csrf_field()); ?>

                              <div class="form-group" id="field1">
                                  <label class="control-label col-sm-2" for="txt">Occurance:</label>
                                         <ul class="nav nav-pills">
                <li class="<?php echo e(url('schedule-event/'.$event_id)); ?>"><a href="" style="background-color:#46A6EA">One Time</a></li>
                <li><a href="<?php echo e(url('multiple-event/'.$event_id)); ?>"  style="background-color:#ddd;color:#46A6EA">Multiple</a></li>
                <li><a href="<?php echo e(url('recurring-event/'.$event_id)); ?>" style="background-color:#ddd;color:#46A6EA">Recurring</a></li>
           </ul>
                                      
                              </div>
                    </div>
                      <div class="row one" id="single">
                        <hr>
                      <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label col-xs-4 col-sm-4" for="dte">Between:</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="dte" name="start_date">
                            <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="dte">And:</label>
                      <div class="input-group">
                          <input type="date" class="form-control" id="dte" name="end_date">
                          <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group at">
                    <label class="control-label col-xs-4 col-sm-4" for="tme">At:</label>
                    <div class="input-group">
                        <input type="time" class="form-control" id="tme" name="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                  </div>
                </div>
                  <center>
                <button class="btn btn-primary" type="submit">Save</button>
                
              </form>
              </div>
             
</div>

              </div>
              

                    </div>
                  </div>
                </div>
              </div>
                      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>