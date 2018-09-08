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
                  <li><a href="#" title="Schedule">
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

                      <li  class="active"><a href="#" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
                       <div class="tab-content tab_details">
 
                                          <div class="tab-pane fade in active" id="eventconform">
                                            <div class="table-responsive">
                                              <?php if(count($event_details)>0): ?>
                                              <table class="table">
                                                <thead>
                                                <tr>
                                                  <th>Event Name</th>
                                                  <th>Swim Style</th>
                                                  <th>Team Size</th>
                                                  <th>Is Disabled</th>
                                                  <th>Age(Min-Max)</th>
                                                  <th>Participants (Min-Max)</th>
                                                </tr>
                                              </thead>
                                              <?php $__currentLoopData = $event_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <td><?php echo e($event->EventName); ?></td>
                                                  <td><?php echo e($event->SwimStyle); ?></td>
                                                  <td><?php echo e($event->MembersPerTeam); ?></td>
                                                  <td><?php echo e($event->AbleBodied); ?></td>
                                                  <td><?php echo e($event->MinimumAge); ?>-<?php echo e($event->MaximumAge); ?></td>
                                                  <td><?php echo e($event->MinParticipants); ?>-<?php echo e($event->MaxParticipants); ?></td>
                                                </tr>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </table>
                                              <?php endif; ?>
                                            </div>
                                         <!--   <center><ul class="pagination">

          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
           <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
                                        </center>-->
                                            <h5 style="color:#46A6EA"><b>Event Description</b></h5>
                                            <p><?php echo e($event_descripiton); ?></p>
                                            <?php if(count($venues)>0): ?>
                                            <h5 style="color:#46A6EA"><b>Venue</b></h5>
                                            <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><?php echo e($venue->VenueName); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <?php if(count($schedulers)>0): ?>
                                            <h5 style="color:#46A6EA"><b>Schedule</b></h5>
                                            <?php $__currentLoopData = $schedulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p>Occuarance:<?php echo e($schedule->ScheduleType); ?><br> Between <?php echo e($schedule->StartDateTime); ?> and <?php echo e($schedule->EndDateTime); ?> at <?php echo e($schedule->StartTime); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <?php if(count($venues)>0): ?>
                                            <h5 style="color:#46A6EA"><b>Address</b></h5>
                                            <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><?php echo e($venue->AddressLine1); ?><br>Post Code: <?php echo e($venue->PostCode); ?><br> <?php echo e($venue->City); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <?php if(count($clubs)>0): ?>
                                            <h5 style="color:#46A6EA"><b>Clubs</b></h5>
                                            <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p>Mobile:<?php echo e($club->ClubName); ?><br>Email:<?php echo e($club->Email); ?><br>Phone:<?php echo e($club->MobilePhone); ?><br>Website:<a href="<?php echo e($club->Website); ?>" style="color:black"><?php echo e($club->Website); ?></a></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <?php if(count($venues)>0): ?>
                                            <h5 style="color:#46A6EA"><b>Contact</b></h5>
                                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p>Mobile:<?php echo e($contact->Phone); ?><br>Email:<?php echo e($contact->Email); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <hr>
                                            <form method="post" action="<?php echo e(url('confirm-event/'.$event_id)); ?>">
                                              <?php echo e(csrf_field()); ?>

                                               <?php $__currentLoopData = $event_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <input type="hidden" name="event_name" value="<?php echo e($event->EventName); ?>">
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <center>
                                              <button class="btn btn-primary">Submit</button>
                                        </center>
                                      </form>

                                                 </div>

                    </div>
                  </div>
                </div>
              </div>
              <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>