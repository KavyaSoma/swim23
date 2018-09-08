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
                <a href= class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li><a href="" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li   class="active"><a href="<?php echo e(url('/venue-event')); ?>" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
 <div class="tab-content tab_details">

                                    <div class="tab-pane fade in active" id="eventvenue">
                                      <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('venue-event/'.$event_id)); ?>">
                                          <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                    <div class="form-group" id="field1">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Venue:</label>
                                        <div class="col-xs-7 col-sm-6">
                                          <input type="text" class="form-control" id="venuename" name="venue_name" required>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Address:</label>
                                        <div class="col-xs-7 col-sm-6">
                                          <input type="txt" class="form-control" id="vaddress" name="venue_address">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-1" for="txt">City:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecity" name="venue_city">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Post code:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecode" name="venue_code" pattern="([0-9]){5,10}">
                                        <div id="message" style="color: red"></div>
                                        </div>
                                        </div>
                                      </div><br>

                                        <center>
                                                <button class="btn btn-primary">Save&Continue</button>
                                                
                                              </center>
                                          </div>
                                         

                    </div>
                  </div>
                </div>
       <div id="old_events">
                
                </div>
              </div>
    <script>
$(document).ready(function() {
console.log('<?php echo e(url('getoldevents/venues/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/venues/'.$event_id)); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_events').html(html);
      }
    },
    async:true
  });
              });
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
</script>
                      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>