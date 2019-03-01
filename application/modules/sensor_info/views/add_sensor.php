    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            Sensor
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header"> Add New Sensor <div style="float: right;"><a href="<?php echo base_url('sensor_info')?>/data/sensor_list"><button class="btn btn-primary">View List</button></a></div></div>
                      <div class="card-body">

                      <form name ="userinput" action="<?php echo base_url()?>sensor_info/data/save_sensor" method="post">
                          <div class="form-group">
                              <div class="form-row">
                        
                            <div class="form-label-group">
                                 <select name="floor_id" class="form-control" id="floor_id" required="required" autofocus="autofocus" style="width:200px;">
                                   <option value="">Select Floor</option>
                                   <?php foreach ($result as $value) { ?>
                                    <option value="<?php echo  $value->floorID ; ?>"><?php echo $value->floor_name; ?></option>
                                    <?php } ?>
                                 </select>
                          
                          </div>
                            <br style="clear: both;" />
                            <br style="clear: both;" />

                        </div>
                        </div>

                            <div class="form-group">
                              <div class="form-row">
                        
                            <div class="form-label-group">
                              <div class="result"></div>
                                 <select name="controllerid" class="form-control hide_controller_id"  autofocus="autofocus" style="width:200px;">
                                   <option value="">Select Controller</option>
                                   <?php foreach ($result_controller_list as $value) { ?>
                                    <option value="<?php echo  $value->controllerID ; ?>"><?php echo $value->controller_name; ?></option>
                                    <?php } ?>
                                 </select>
                          
                          </div>
                            <br style="clear: both;" />
                            <br style="clear: both;" />

                        </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <div class="form-label-group">
                            <input type="text" id="sensorname" name="sensorname" class="form-control" placeholder=">Enter Floor Name" required="required" autofocus="autofocus">
                            <label for="sensorname">Enter Sensor Name</label>
                            </div>
                            
                        </div>
                        </div>
                         <div class="form-group">
                        <div class="form-row">
                            <div class="form-label-group">
                            <input type="text" id="sensorname" name="set_sensor_id" class="form-control" placeholder=">Enter Sensor ID" required="required" autofocus="autofocus">
                            <label for="sensorname">Sensor ID</label>
                            </div>
                            
                        </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-label-group">
                                     <input type="submit" class="btn btn-primary custombtn" value="Submit">
                                </div>
                            </form>
                      </div>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</div>


<script>


   function validation(){

   var floorid= $("#floor_id").val();

   if(floorid==''){
      alert('Please Select floor id');
      $("#floor_id").focus();
      return false;
      }
   }

        jQuery( document ).ready(function($) {

        $( "#floor_id" ).change(function() {
             
             var fid=$("#floor_id").val();

             $.post( "<?php echo base_url('sensor_info');?>/data/controller_list",{floorid:fid}, function( data ) {

             $(".hide_controller_id").hide();

              $( ".result" ).html( data );
            
              });
        });

      });
    </script>