<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->


   <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li ><a  class="" href=""><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li class="active" style="margin-bottom:2px;"><a class="" data-toggle="tab" href=""><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>
  
    <div id="menu1" class="tab-pane fade in active">
      <div class="container" ><!--id="main-code"-->
     <div class="col-xs-12 col-sm-6 col-md-3 kin_photo">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="<?php echo e(asset('public/images/sravan.jpeg')); ?>" alt="Profile image">
     <div class="fb-profile-text text-center">
         <!--<h3>Event Name</h3>
          <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
 <div class="col-xs-12 col-sm-6 col-md-8 kin_info">
  <?php if((count($venue_status)>0) && ($venue_status[0]->ApproveStatus != "Rejected")): ?>
  <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form class="form-horizontal kin_infor" method="post" action="<?php echo e(url('edit-eventvenue/'.$event_id.'/'.$venue_id)); ?>">
  <?php echo e(csrf_field()); ?>

<div class="well" style="background:#fff;margin-top:43px;">
          <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Venue:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" id="venuename" name="venue_name" value="<?php echo e($venue->VenueName); ?>" readonly>
                

              </div>
          </div>
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Address:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" id="vaddress" name="venue_address" value="<?php echo e($venue->AddressLine1); ?>" readonly>
                  
              </div>
          </div>
          
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">City:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" name="venue_city" id="venuecity" value="<?php echo e($venue->City); ?>" readonly>
                  

              </div>
          </div>
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Post code:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="int" class="form-control"  name="venue_code" id="venuecode" value="<?php echo e($venue->PostCode); ?>" readonly>
                  

              </div>
          </div>
              </div>
</div></div> 
<div class="col-sm-offset-5 col-xs-offset-2 ">
 <button class="btn btn-primary mybtn" type="submit" >Save </button>
 </div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<form class="form-horizontal kin_infor" method="post" action="<?php echo e(url('edit-eventvenue/'.$event_id.'/'.$venue_id)); ?>">
  <?php echo e(csrf_field()); ?>

<div class="well" style="background:#fff;margin-top:43px;">
          <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Venue:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" id="venuename" name="venue_name" required>
                

              </div>
          </div>
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Address:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" id="vaddress" name="venue_address" required>
                  
              </div>
          </div>
          
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">City:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" name="venue_city" id="venuecity" required>
                  

              </div>
          </div>
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Post code:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="int" class="form-control"  name="venue_code" id="venuecode" required>
                  

              </div>
          </div>
              </div>
</div></div> 
<div class="col-sm-offset-5 col-xs-offset-2 ">
 <button class="btn btn-primary mybtn" type="submit" >Save & Continue </button>
 </div>
</form>
<form method="get" action="<?php echo e(url('editpage/event/event/'.$event_id)); ?>">
                        <center><button type="submit" class="btn btn-primary mybtn">Back</button></center>
                      </form>
<?php endif; ?>

         </div><br>
    </div>
    
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
  var options = {
    data:[
      {"VenueName": "VenueName",
       "AddressLine1": "AddressLine1",
       "City":"City",
       "PostCode":"PostCode"}
    ],
  url: function(phrase) {
    return "<?php echo e(url('eventvenues/')); ?>/"+phrase;
  },
  getValue: "VenueName",
  list: {
    onSelectItemEvent: function() {
      var value = $("#venuename").getSelectedItemData().AddressLine1;
      var city = $("#venuename").getSelectedItemData().City;
      var postcode = $("#venuename").getSelectedItemData().PostCode;
      
      $("#vaddress").val(value).trigger("change");
      $("#venuecity").val(city).trigger("change");
      $("#venuecode").val(postcode).trigger("change");
     }
  }
  };
  $("#venuename").easyAutocomplete(options); 
});
</script>        <?php $__env->stopSection(); ?>
    

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>