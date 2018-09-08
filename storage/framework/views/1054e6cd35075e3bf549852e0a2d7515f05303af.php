<!-- pool finder starts here -->

<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<div class="container">
<div class="row col-md-12 map-n">
                    <div class="col-md-12" style="padding-left:0px;width:99%;height:350px; position: relative; overflow: hidden;" id="map">
                      Google Map
                    </div>
                  </div>
                </div><br>
<div class="container">
  <div class="row">

                      <div class="col-md-3 col-xs-12 col-sm-4">

      <div class="well" style="min-height:380px;max-height:380px;height:380px">
         <form action="<?php echo e(url('poolfinder')); ?>" class="form-horizontal" id="pform" method="get">

  <div class="form-group">
    <div class="easy-autocomplete" style="width: 252px;">
      <?php if($show_values == 'yes'): ?>
        <input type="search" class="form-control" id="location-suggestions" name="location" value="<?php echo e($location); ?>"  placeholder="Search Location" autocomplete="off" required>
      <?php else: ?>
        <input type="search" class="form-control" id="location-suggestions" name="location"  placeholder="Search Location" autocomplete="off" required>
      <?php endif; ?>
        <div class="easy-autocomplete-container" id="eac-container-provider-remote"><ul style="display: none;"></ul></div></div>
    <div class="input-group-btn">

    </div>
  </div>
  <div class="form-group">
    <center><button type="button" class="btn btn-primary" onClick="initGeolocation()"><i class="fa fa-map-marker"></i> Use My Location</button></center>
    <input type="hidden" name="latitude" id="latitude" value="<?php echo e($latitude); ?>">
    <input type="hidden" name="longitude" id="longitude" value="<?php echo e($longitude); ?>">
    <input type="hidden" name="switch" id="switch" value="<?php echo e($switch); ?>">
  </div>
  <div class="form-group">
           <label class="control-label" style="color:#46A6EA;"> Distance </label>
           <div class="range range-color">
            <?php if($show_values == 'yes'): ?>
            <input type="range" name="range" min="1" max="100" value="<?php echo e($distance); ?>" onchange="rangecolor.value=value">
            <output id="rangecolor"><?php echo e($distance); ?></output>
            <?php else: ?>
            <input type="range" name="range" min="1" max="100" value="10" onchange="rangecolor.value=value">
            <output id="rangecolor">10</output>
            <?php endif; ?>
          </div>
      </div>
      <div class="form-group">
            <label for="location1" class="control-label"  style="color:#46A6EA;">Sort By</label>
            <select class="form-control"  id="location1" name="sort">
              <?php if($show_values == 'yes'): ?>
              <option value="favCount" <?php if($sort == 'favCount'): ?>selected <?php endif; ?>>Favourites</option>
              <option value="distance" <?php if($sort == 'distance'): ?>selected <?php endif; ?>>Distance</option>
              <?php else: ?>
              <option value="favCount">Favourites</option>
              <option value="distance">Distance</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="type1" class="control-label"  style="color:#46A6EA;">Filter By</label>
            <select class="form-control"  id="type1" name="filter">
              <option value="Gym" <?php if($sort == 'Gym'): ?>selected <?php endif; ?>>Fitness</option>
              <option value="Parking" <?php if($sort == 'Parking'): ?>selected <?php endif; ?>>Parking</option>
              <option value="ParaSwimmingFacilities" <?php if($sort == 'ParaSwimmingFacilities'): ?>selected <?php endif; ?>>Physically Disabled</option>
              <option value="Diving" <?php if($sort == 'Diving'): ?>selected <?php endif; ?>>Diving</option>
              <option value="SwimForKids" <?php if($sort == 'SwimForKids'): ?>selected <?php endif; ?>>Swim For Kids</option>
              <option value="VisitingGallery" <?php if($sort == 'VisitingGallery'): ?>selected <?php endif; ?>>Visiting Gallery</option>
              <option value="PrivateHire" <?php if($sort == 'PrivateHire'): ?>selected <?php endif; ?>>Private Hire</option>
              <option value="Toilets" <?php if($sort == 'Toilets'): ?>selected <?php endif; ?>>Toilets</option>
              <option value="LadiesOnlySwimming" <?php if($sort == 'LadiesOnlySwimming'): ?>selected <?php endif; ?>>Ladies Only Swimming</option>
              <option value="Teachers" <?php if($sort == 'Teachers'): ?>selected <?php endif; ?>>Teachers</option>
              <option value="Shower" <?php if($sort == 'Shower'): ?>selected <?php endif; ?>>Shower</option>
            </select>
          </div>
          <div class="form-group">
          <button class="btn btn-warning" type="submit">Apply Filters</button>
          </div>
          </form>
      </div>
    </div>

    <?php if( count($venues)>0 ): ?>

    <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <img id="image_<?php echo e($venue->VenueId); ?>" src="<?php echo e(url('public/images/venue.jpg')); ?>"/>
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
                              <?php if($venue->Gym == 'yes'): ?>
                               <li>Fitness</li>
                              <?php endif; ?>
                              <?php if($venue->Parking == 'yes'): ?>
                               <li>Parking</li>
                              <?php endif; ?>
                              <?php if($venue->ParaSwimmingFacilities == 'yes'): ?>
                               <li>Physically Disabled</li>
                              <?php endif; ?>
                              <?php if($venue->Diving == 'yes'): ?>
                               <li>Diving</li>
                              <?php endif; ?>
                              <?php if($venue->SwimForKids == 'yes'): ?>
                               <li>Swim For Kids</li>
                              <?php endif; ?>
                              <?php if($venue->VisitingGallery == 'yes'): ?>
                               <li>Visiting Gallery</li>
                              <?php endif; ?>
                              <?php if($venue->PrivateHire == 'yes'): ?>
                               <li>Private Hire</li>
                              <?php endif; ?>
                              <?php if($venue->Toilets == 'yes'): ?>
                               <li>Toilets</li>
                              <?php endif; ?>
                              <?php if($venue->LadiesOnlySwimming == 'yes'): ?>
                               <li>Ladies Only Swimming</li>
                              <?php endif; ?>
                              <?php if($venue->Teachers == 'yes'): ?>
                               <li>Teachers</li>
                              <?php endif; ?>
                              <?php if($venue->Shower == 'yes'): ?>
                               <li>Shower</li>
                              <?php endif; ?>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('venue/'.$venue->ShortName)); ?>" class=" btn btn-primary delete_button col-xs-12 col-sm-12">
                 View Venue

               </span>
           </a>
              
          </span>
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
</div>
<!-- pool finder code ends here -->
<script>
function initGeolocation() {

                if (navigator.geolocation) {
                    // Call getCurrentPosition with success and failure callbacks
                    navigator.geolocation.getCurrentPosition(success, fail);
                } else {
                    alert("Sorry, your browser does not support geolocation services.");
                }
            }

            function success(position) {
                //window.location.replace("?mylocation&lt=" + position.coords.latitude + "&lo=" + position.coords.longitude);
                $("#longitude").val(position.coords.longitude);
                $("#latitude").val(position.coords.latitude);
                $("#switch").val("1");
                $("#pform").submit();
            }

            function fail() {
                alert('oh, browser failed to retrive location');
                // Could not obtain location
            }
function myMap() {
  var myCenter = new google.maps.LatLng(<?php echo e($latitude); ?>,<?php echo e($longitude); ?>);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 9};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  <?php echo e($multiplemarkers); ?>

}
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
$(document).ready(function() {
        					var options = {
        						url: function(phrase) {
        							return "<?php echo e(url('locationsuggestions/')); ?>/"+phrase;
        						},

        						getValue: "location"
        					};
                  $("#longitude").val(0);
                  $("#latitude").val(0);
                  $("#switch").val("0");
                  $("#location-suggestions").easyAutocomplete(options);
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDBor5xpZLlmlUStxG4ggyI9gvYYBhxRg&callback=myMap"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>