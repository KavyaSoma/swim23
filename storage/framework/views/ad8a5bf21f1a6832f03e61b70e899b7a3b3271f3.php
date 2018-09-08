<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <div class="container" id="main-code">
    <br/>
    <ul class="nav nav-tabs preview_tabs">
      <li class="active"><a href="javascript:;">All Venues</a></li>
      <li><a href="<?php echo e(url('/myvenues')); ?>">My Venues</a></li>
    </ul>
    <?php if( count($venues)>0 ): ?>
    <center>
      <form action="<?php echo e(url('venues')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

      <div class="search">
          <div class="input-group">
             <div class="input-group-btn search-bar">
               <?php if($show_count == "no"): ?>
               <input type="text" name="venue" placeholder="Type Venue name and hit Enter key" id="search-input" value="<?php echo e($search_term); ?>" class="form-control" required/>
               <?php else: ?>
               <input type="text" name="venue" placeholder="Type Venue name and hit Enter key" id="search-input" class="form-control" required/>
               <?php endif; ?>
              </div>
              <div class="input-group-btn search-submit">
              </div>
          </div>
      </div>
    </form>
    </center>
    <br/>
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
               <?php if(count($venues)>0): ?>
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <ul class="pagination">
                          <?php echo e($venues->links()); ?>

                        </ul>
                      </div>
                    </div>
                    <?php endif; ?>
             </div>
             <script>
             <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/venue/'.$venue->VenueId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/venue/'.$venue->VenueId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($venue->VenueId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($venue->VenueId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($venue->VenueId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($venue->VenueId); ?>).text(temp[1]+' Favourites');
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