<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
 <!-- Dashboard code starts here -->
<div class="container" id="main-code">
    <br/>    
    <ul class="nav nav-tabs preview_tabs">
      <li><a href="<?php echo e(url('/events')); ?>">All Events</a></li>
      <li class="active"><a href="javascript:;">My Events</a></li>
    </ul>
  <section class="main" style="margin-top:20px">
    <div class="col-xs-12 col-sm-6">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default active col-md-12">
              <div class="panel-heading" style="margin-left:-15px;margin-right:-15px;background:#46A6EA;color:#fff"  role="tab" id="headingOne">
                  <h3 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="glyphicon glyphicon-calendar"></span> 
                      Upcoming Events <span class="badge"></span></a><br></a>
                  </h3>
              </div>
                <div id="collapseOne" class="panel-collapse collapse in"  role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body"  id="user_scroll">
                  <?php if(count($upcomingevents)>0): ?>
                  <?php $__currentLoopData = $upcomingevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcoming): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <ul class="media-list">
                      <li class="media">
                             <?php 
                          $pieces = explode(' ',$upcoming->StartDateTime);
                          $date = $pieces[0];
                          $slices = explode('-',$date);
                          $year = $slices[0];
                          $month = $slices[1];
                          $day = $slices[2];
                          $months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',07=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
                           ?>
                          <div class="media-left">
                              <div class="panel panel-default text-center date">
                                  <div class="panel-heading month" style="background:#ff6600;color:#fff">
                                      <span class="panel-title strong">
                                          <?php echo e($months[(int)$month]); ?>

                                      </span>
                                  </div>
                                  <div class="panel-body day text-default" style="color:#46A6EA">
                                       <?php echo e($day); ?>

                                  </div>
                              </div>
                          </div>
                          <div class="media-body event-name" style="text-align: left;">
                              <h4 class="media-heading">
                                  <?php echo e($upcoming->EventName); ?>

                              </h4>
                                <?php echo e(substr($upcoming->Description,0,150)); ?>

                            </div>
                          <div class="media-right">
                          <a href="<?php echo e(url('editevent/'.$upcoming->EventId)); ?>" class="icon-block"><i class="fa fa-edit" style="color:#ff6600" title="Edit"></i></a>
                              <p>
                          <a href="<?php echo e(url('event/'.$upcoming->ShortName)); ?>" class="icon-block"><i class="fa fa-share-alt" style="color:  #46A6EA;"  title="Share"></i></a>
                              </p>
                          </div>
                      </li>
                     </ul>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php else: ?>
                                            
                           
                                <h4>No Events Available</h4>
                              
                           <?php endif; ?>
                      
              </div>
          </div>
          <!-- End fluid width widget -->
  </div>
  <div class="panel panel-default col-xs-12 col-sm-12">
        <div class="panel-heading" style="margin-left:-15px;margin-right:-15px;background:#46A6EA;color:#fff"  role="tab" id="headingTwo">
            <h3 class="panel-title">  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  <span class="glyphicon glyphicon-calendar"></span> 
                Completed Events <span class="badge"></span></a>
            </h3>
        </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body"  id="user_scroll">
            <ul class="media-list">
                 <?php if(count($completedevents)>0): ?>
                  <?php $__currentLoopData = $completedevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $completed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <ul class="media-list">
                      <?php 
                          $pieces = explode(' ',$completed->StartDateTime);
                          $date = $pieces[0];
                          $slices = explode('-',$date);
                          $year = $slices[0];
                          $month = $slices[1];
                          $day = $slices[2];
                          $months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',07=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
                           ?>
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-default text-center date">
                                  <div class="panel-heading month" style="background:#ff6600;color:#fff">
                                      <span class="panel-title strong">
                                         <?php echo e($months[(int)$month]); ?>

                                      </span>
                                  </div>
                                  <div class="panel-body day text-default" style="color:#46A6EA">
                                     <?php echo e($day); ?>

                                  </div>
                              </div>
                          </div>
                            <div class="media-body event-name" style="text-align: left;">
                              <h4 class="media-heading">
                                  <?php echo e($completed->EventName); ?>

                              </h4>
                                <?php echo e(substr($completed->Description,0,150)); ?>

                            </div>
                          <div class="media-right">
                          <a href="<?php echo e(url('editevent/'.$completed->EventId)); ?>" class="icon-block"><i class="fa fa-edit" style="color:#ff6600" title="Edit"></i></a>
                              <p>
                          <a href="<?php echo e(url('event/'.$completed->ShortName)); ?>" class="icon-block"><i class="fa fa-eye" style="color:  #46A6EA;"  title="View"></i></a>
                              </p>
                          </div>
                      </li>
                  </ul>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php else: ?>
                           
                                <h4>No Events Available</h4>
                              
                           <?php endif; ?>

                 
        </div>
    </div>
    <!-- End fluid width widget -->
  </div>
  </div>
  </div>
<div class="col-xs-12 col-sm-6">
  <!-- /panel -->
<div class="panel panel-default magic-element isotope-item widgets" style="margin-top:11px;">
  <div class="panel-body-heading" style="background: #46A6EA;margin-top:-20px;color:#fff">
    <h4 class="pb-title" style="padding:5px">My Events</h4>
  </div>
  <div class="panel-body">
    <div class="table table-responsive" id="user_scroll">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Schedule</th>
        <th>Settings</th>
      </tr>
    </thead>
    <?php $__currentLoopData = $myevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
      <tr>
        <td><?php echo e($events->EventName); ?></td>
        <td><?php echo e($events->StartDateTime); ?></td>
        <td>
    <div class="dropdown">
  <i class="fa fa-cog dropdown-toggle"  data-toggle="dropdown">
  <span class="caret"></span></i>
  <ul class="dropdown-menu" style="margin-left:-58px;">
    <li><a href="<?php echo e(url('inviteparticipants/'.$events->EventId)); ?>"><i class="fa fa-check"> Invite</i></a></li>
    <li><a href="<?php echo e(url('editevent/'.$events->EventId)); ?>"><i class="fa fa-pencil"> Edit</i></a></li>
    <li><a href="<?php echo e(url('resultentry')); ?>"><i class="fa fa-list">  Results Entry</i></a></li>
    <li><a href="#"><i class="fa fa-close"> Cancel</i></a></li>
  </ul>
</div>
</td>
      </tr>
     
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6">
  <div class="panel-group" id="accordionone" role="tablist" aria-multiselectable="true">
       <div class="panel panel-default active col-md-12">
                    <div class="panel-heading" style="margin-left:-15px;margin-right:-15px;background:#46A6EA;color:#fff"  role="tab" id="headingfive">
                        <h3 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordionone" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                            Pending Requests</a>
                        </h3>
                    </div>
                    <div id="collapsefive" class="panel-collapse collapse in"  role="tabpanel" aria-labelledby="headingfive">
                    <div class="panel-body" id="user_scroll">
                        <ul class="media-list">
                          <?php if(count($eventinvites)>0): ?>
                          <?php $__currentLoopData = $eventinvites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="media">
                              <div class="media-left">
                                <?php if($event->Image == "NA"): ?>
                                <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle" width="65px" height="65px">
                                <?php else: ?>
                                <img src="<?php echo e(url($event->Image)); ?>" class="img-circle" width="65px" height="65px">
                                <?php endif; ?>
         
                              </div>
                              <div class="media-body">
                                <p><b> <?php echo e($event->UserName); ?></b></p>

                                                                    <p>
                                                                    Request to Subscribe an event
                                                                    </p>

                              </div>
                              <div class="media-right">
                                  <a href="<?php echo e(url('/acceptevent/'.$event->EventId.'/event')); ?>"><i class="fa fa-check-circle" aria-hidden="true" title="Accept" style="font-size:20px;color: #46A6EA;"></i></a>
                                  <a href="<?php echo e(url('/rejectevent/'.$event->EventId.'/event')); ?>"><i class="fa fa-times-circle-o" aria-hidden="true" title="Reject" style="font-size:20px;color: #d9534f;" ></i></a>
                              </div>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                           
                                <h4>No Pending Requests</h4>
                              
                           <?php endif; ?>
                        </ul>
                        
                         </div>

<br><br>
                </div>
                <!-- End fluid width widget -->
  </div>
<div class="panel panel-default col-xs-12 col-sm-12">
            <div class="panel-heading" style="margin-left:-15px;margin-right:-15px;background:#46A6EA;color:#fff"  role="tab" id="headingsix">
                <h3 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionone" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                    Completed Requests</a>
                </h3>
            </div>
                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
            <div class="panel-body"  id="user_scroll">
                <ul class="media-list">
                  <?php if(count($completedrequests)>0): ?>
                  <?php $__currentLoopData = $completedrequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $completed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="media">
                      <div class="media-left">
                        <img src="<?php echo e(url('public/images/sravan.jpeg')); ?>" class="img-circle" width="65px" height="65px">
                      </div>
                      <div class="media-body">
                        <p><b> <?php echo e($completed->UserName); ?></b></p>
                      
                        <p>
                       Request to Subscribe an event
                        </p>
                       
                      </div>
                     <div class="media-right">
                                <?php if($completed->Status == "accepted"): ?>
                                   <i class="fa fa-check-circle" aria-hidden="true" title="Accept" style="font-size:20px;color: #46A6EA;"></i>
                                   <?php else: ?>
                                  <i class="fa fa-times-circle-o" aria-hidden="true" title="Reject" style="font-size:20px;color: #d9534f;" ></i>
                                  <?php endif; ?>
                              </div>
                  </li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php else: ?>
                          
                                <h4>No Completed Requests</h4>
                            
                           <?php endif; ?>
                </ul>

            </div><br><br>
        </div>
  </div>
  </div>    <!-- End fluid width widget -->
</div>
<div class="col-xs-12 col-sm-6">
                          <!-- /panel -->
                     <div class="panel panel-default magic-element isotope-item widgets">
                                <div class="panel-body-heading" style="background: #46A6EA;margin-top:-20px;color:#fff">
                                    <h4 class="pb-title" style="padding:5px">Notifications</h4>
                                </div>
                                <ul>
                                    <?php if(count($notifications)>0): ?>
                                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li class="media">
                              <div class="media-left">
                                <?php if($notification->ImagePath == "NA"): ?>
                                <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle" width="65px" height="65px">
                                <?php else: ?>
                                <img src="<?php echo e(url($notification->ImagePath)); ?>" class="img-circle" width="65px" height="65px">
                                <?php endif; ?>
         
                              </div>
                              <div class="media-body">
                                <p><b> <?php echo e($notification->EventName); ?></b></p>
                                       <p>You Got Event Invitation,Please <a href="<?php echo e(url('acceptevent/'.$notification->EventId.'/'.$notification->ParticipantId)); ?>" style="color:#46A6EA">click here</a> to accept</p>

                              </div>
                            </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php else: ?>
                                  <h3>No Notifications</h3>
                                  <?php endif; ?>
                                  </ul>


  </div>
</div> 
<div class="col-xs-12 col-sm-6">
                          <!-- /panel -->
                          <div class="panel panel-default magic-element isotope-item widgets">
                                <div class="panel-body-heading" style="background: #46A6EA;margin-top:-20px;color:#fff">
                                    <h4 class="pb-title"style="padding:5px">Flagged</h4>
                                </div>
                          <div class="panel-body">
                           <?php if(count($flags)>0): ?>   
                            <div class="table table-responsive" id="user_scroll">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Event Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                              </tr>
                            </thead>
                            
                             <?php $__currentLoopData = $flags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                              <tr>
                                <td><?php echo e($flag->EventName); ?></td>
                                <td><?php echo e($flag->StartDateTime); ?></td>
                                <td><?php echo e($flag->EndDateTime); ?></td>
                                </tr>
                             
                        
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <h4>No flaged Events</h4>
                            <?php endif; ?>
                          </table>
                        </div>


</div>
  </div>
</div>
</div>
<!-- /panel -->
</div>
<!-- Dash board code ends here -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>