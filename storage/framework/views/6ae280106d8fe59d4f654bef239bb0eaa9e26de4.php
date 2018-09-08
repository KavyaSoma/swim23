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
                         <li role="presentation"><a href="<?php echo e(url('search/all/?search_term='.$search_term)); ?>" aria-controls="mainall" role="tab">ALL</a></li>
                       <li role="presentation"><a href="<?php echo e(url('search/events/?search_term='.$search_term)); ?>" aria-controls="mainevents" role="tab">EVENTS</a></li>
                       <li role="presentation"><a href="<?php echo e(url('search/clubs/?search_term='.$search_term)); ?>" aria-controls="mainclubs" role="tab">CLUBS</a></li>
                       <li role="presentation" class="active"><a href="<?php echo e(url('search/venues/?search_term='.$search_term)); ?>" aria-controls="mainvenues" role="tab">VENUES</a></li> 
                       <li role="presentation"><a href="<?php echo e(url('search/instructors/?search_term='.$search_term)); ?>" aria-controls="maininstructors" role="tab">INSTRUCTORS</a></li>
                          <li role="presentation"><a href="<?php echo e(url('search/users/?search_term='.$search_term)); ?>" aria-controls="mainusers" role="tab">USERS</a></li>
                       </ul>
           
   <div class="tab-content preview_details">
<div class="tab-content">
   <div role="tabpanel" class="tab-pane active img-shadow" id="mainvenues">
         <div class="clearfix">
             <?php if( count($venues) > 0): ?>
                 <h4>Search Results For Venues </h4>       
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
               <?php else: ?>
               <h4>No Venues Available</h4>
               <?php endif; ?>
             </div>
             
        <?php if(count($venues)>0): ?>
 <div class="text-center">
   <ul class="pagination">
<?php echo e($venues->links()); ?>

 </ul>
 </div>
</div>
<?php endif; ?>
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

<!-- instructor preview code starts here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>