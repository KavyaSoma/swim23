<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <div class="container" id="main-code">
    <br/>    
    <ul class="nav nav-tabs preview_tabs">
      <li class="active"><a href="javascript:;">All Events</a></li>
      <li><a href="<?php echo e(url('/eventsdashboard')); ?>">My Events</a></li>
    </ul>    
    <?php if( count($events)>0 ): ?>
    <center>
      <form action="<?php echo e(url('events')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

      <div class="search">
          <div class="input-group">
             <div class="input-group-btn search-bar">
               <?php if($show_count == "no"): ?>
               <input type="text" name="event" placeholder="Type event name and hit Enter key" id="search-input" value="<?php echo e($search_term); ?>" class="form-control" required/>
               <?php else: ?>
               <input type="text" name="event" placeholder="Type event name and hit Enter key" id="search-input" class="form-control" required/>
               <?php endif; ?>
              </div>
              <div class="input-group-btn search-submit">
              </div>
          </div>
      </div>
    </form>
    </center>
    <br/>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <img id="image_<?php echo e($event->EventId); ?>" src="<?php echo e(url('public/images/clubs.jpg')); ?>"/>
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
               <?php else: ?>
               <h4>No Clubs Available</h4>
               <?php endif; ?>
               <?php if(count($events)>0): ?>
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <ul class="pagination">
                          <?php echo e($events->links()); ?>

                        </ul>
                      </div>
                    </div>
                    <?php endif; ?>
             </div>
             <script>
             <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/event/'.$event->EventId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/event/'.$event->EventId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($event->EventId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/event/'.$event->EventId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/event/'.$event->EventId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($event->EventId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($event->EventId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($event->EventId); ?>).text(temp[1]+' Favourites');
                                     }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              function manageFavourites(aurl,cid) {
                console.log(aurl);
                $.ajax({
                    url: aurl,
                    success: function(html) {
                      console.log(html);
                      if(html == 'yes') {
                            $('#fav_'+cid).html('<i class="fa fa-heart">');
                          } else {
                            $('#fav_'+cid).html('<i class="fa fa-heart-o">');
                          }
                      },
                    async:true
                  });
              }
             </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>