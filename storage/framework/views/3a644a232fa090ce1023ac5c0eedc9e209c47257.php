 
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<!-- instructor preview code starts here -->
   <div class="container" id="main-code">
     <div class="fb-profile">

  <div class="container" style="margin-top:20px;background-color:#fff;padding:10px">
            
                       <ul class="nav nav-tabs " role="tablist">
                         <li role="presentation" class="active"><a href="<?php echo e(url('search/all/?search_term='.$search_term)); ?>" aria-controls="mainall" role="tab">ALL</a></li>
                       <li role="presentation"><a href="<?php echo e(url('search/events/?search_term='.$search_term)); ?>" aria-controls="mainevents" role="tab">EVENTS</a></li>
                       <li role="presentation"><a href="<?php echo e(url('search/clubs/?search_term='.$search_term)); ?>" aria-controls="mainclubs" role="tab">CLUBS</a></li>
                       <li role="presentation"><a href="<?php echo e(url('search/venues/?search_term='.$search_term)); ?>" aria-controls="mainvenues" role="tab">VENUES</a></li> 
                       <li role="presentation"><a href="<?php echo e(url('search/instructors/?search_term='.$search_term)); ?>" aria-controls="maininstructors" role="tab">INSTRUCTORS</a></li>
                          <li role="presentation"><a href="<?php echo e(url('search/users/?search_term='.$search_term)); ?>" aria-controls="mainusers" role="tab">USERS</a></li>
                       </ul>

   <div class="tab-content preview_details">
<div class="tab-content">
   <div role="tabpanel" class="tab-pane active img-shadow" id="mainall">
         <div class="clearfix">
      <?php if( count($clubs) > 0 ): ?>    
      <h4>Search Results For Clubs </h4>
      <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <?php if($club->ImagePath == "NA"): ?>
                      <img src="<?php echo e(url('public/images/club.jpg')); ?>"/>
                      <?php else: ?>
                       <img src="<?php echo e($club->ImagePath); ?>"/>
                       <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/club/'.$club->ClubId.'/'.Session::get('user_id'))); ?>','<?php echo e($club->ClubId); ?>')">
                        <span id="fav_<?php echo e($club->ClubId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($club->ClubName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($club->ClubId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($club->MobilePhone); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('club/'.$club->ShortName.'/')); ?>"  class="view-btn">
              View Club
          </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </div>
 <center>            
 <?php if($search_term == ''): ?>
 <a href="<?php echo e(url('clubs')); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php else: ?>
 <a href="<?php echo e(url('search/clubs/?search_term='.$search_term)); ?>"><button class="btn btn-primary">View Al Results</button></a>
 <?php endif; ?>
</div>
<?php endif; ?>
    </center>              
 <div class="clearfix">
                  <?php if( count($venues) > 0 ): ?>
                  <h4 style="border-bottom:1px solid #eeeeee;">Search Results For Venues</h4>
                 <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <?php if($venue->ImagePath == "NA"): ?>
                     <img class="img-responsive venue_image" src="<?php echo e(url('public/images/venue.jpg')); ?>" alt="venue"/>
                     <?php else: ?>
                    <img class="img-responsive venue_image" src="<?php echo e($venue->ImagePath); ?>" alt="venue"/>
                    <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>','<?php echo e($venue->VenueId); ?>')">
                        <span id="fav_<?php echo e($venue->VenueId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($venue->VenueName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($venue->VenueId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($venue->phone); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('venue/'.$venue->ShortName)); ?>" class="view-btn">
               View Venue

                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
             </div>
             <center>
               <?php if($search_term == ''): ?>
 <a href="<?php echo e(url('venues')); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php else: ?>
 <a href="<?php echo e(url('search/venues/?search_term='.$search_term)); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php endif; ?>
</div>
<?php endif; ?>
</center>
 <div class="clearfix">
  <?php if( count($instructors) > 0 ): ?>
                  <h4 style="border-bottom:1px solid #eeeeee;">Search Results For Instructors</h4>
                 <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                      <?php if($instructor->Image == "NA"): ?>
                        <img src="<?php echo e(url('public/images/instructor.jpg')); ?>"/>
                        <?php else: ?>
                       <img src="<?php echo e($instructor->Image); ?>"/>
                       <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/instructor/'.$instructor->UserId.'/'.Session::get('user_id'))); ?>','<?php echo e($instructor->UserId); ?>')">
                        <span id="fav_<?php echo e($instructor->UserId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($instructor->UserName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($instructor->UserId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($instructor->Experience); ?> Years Experience</li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/')); ?>"  class="view-btn">
                View Instructor
                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
             </div>
               <center>
               <?php if($search_term == ''): ?>
 <a href="<?php echo e(url('instructors')); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php else: ?>
 <a href="<?php echo e(url('search/instructors/?search_term='.$search_term)); ?>"><button class="btn btn-primary">View Al Results</button></a>
 <?php endif; ?>
</div>
<?php endif; ?>
</center>
 <div class="clearfix">
                  <?php if( count($events) > 0 ): ?>
                  <h4 style="border-bottom:1px solid #eeeeee;">Search Results For Events</h4>
<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                    <?php if($event->ImagePath == "NA"): ?>
                     <img id="event_image" src="<?php echo e(url('public/images/event.jpg')); ?>" alt="event"/>
                     <?php else: ?>
                     <img id="event_image" src="<?php echo e($event->ImagePath); ?>" alt="event"/>
                        <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/events/'.$event->EventId.'/'.Session::get('user_id'))); ?>','<?php echo e($event->EventId); ?>')">
                        <span id="fav_<?php echo e($event->EventId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($event->EventName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($event->EventId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($event->ShortName); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('event/'.$event->ShortName.'/')); ?>"  class="view-btn">
              View Event
          </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
             </div>
              <center>
               <?php if($search_term == ''): ?>
 <a href="<?php echo e(url('events')); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php else: ?>
 <a href="<?php echo e(url('search/events/?search_term='.$search_term)); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php endif; ?>
</div>
<?php endif; ?>
</center>
<div class="clearfix">
  <?php if( count($users) > 0 ): ?>
                  <h4 style="border-bottom:1px solid #eeeeee;">Search Results For Users</h4>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <img id="image_<?php echo e($user->UserId); ?>" src="<?php echo e(url('public/images/instructor.jpg')); ?>"/>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/user/'.$user->UserId.'/'.Session::get('user_id'))); ?>','<?php echo e($user->UserId); ?>')">
                        <span id="fav_<?php echo e($user->UserId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($user->UserName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($user->UserId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('user/'.$user->ShortName.'/')); ?>"  class="view-btn">
                View User
                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             </div>
              <center>
               <?php if($search_term == ''): ?>
 <a href="<?php echo e(url('users')); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php else: ?>
 <a href="<?php echo e(url('search/users/?search_term='.$search_term)); ?>"><button class="btn btn-primary">View All Results</button></a>
 <?php endif; ?>
</div>
<?php endif; ?>
</center>
           <br/>
       </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- instructor preview code starts here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>