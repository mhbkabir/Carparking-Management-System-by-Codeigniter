    <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>dashboard/info">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Status</li>
          </ol>

          <div class="card mb-3">
              <div class="card-body">
               <form name ="userinput" action="<?php echo base_url()?>dashboard/search" method="post">
                <input type="hidden" name="param" value="st">
                <div class="row">
                 
                    <div class="col-md-2">
                    <div class="form-group" style="margin-bottom: 0">
                        <div class="form-row">
                            <div class="form-label-group">
                                 <select name="floor_id" id="floor_id" class="form-control" required="required"  style="width:165px;">
                                   <option value="">Select Floor</option>
                                     <?php foreach ($result as $value) { ?>
                                    <option value="<?php echo  $value->floorID ; ?>"><?php echo $value->floor_name; ?></option>
                                    <?php } ?>
                                   </select>
                            </div>
                        </div>   
                    </div>

                  </div>
                    <div class="col-md-2">
                    <div class="form-group" style="margin-bottom: 0">
                        <div class="form-row">
                            <div class="form-label-group">
                              <div class="result"></div>
                                 <select name="controlle" class="form-control hide_controller_id"  style="width:165px;">
                                   <option value="">Select Controller</option>
                                      <?php foreach ($result_controller_list as $value) { ?>
                                    <option value="<?php echo  $value->controller_id ; ?>"><?php echo $value->controller_name; ?></option>
                                    <?php } ?>
                                   </select>
                            </div>
                        </div>   
                    </div>

                  </div>
                   <div class="col-md-2">
                           <div class="form-group" style="margin-bottom: 0">
                        <div class="form-row">
                            <div class="form-label-group">
                              <div class="result2"></div>
                                 <select name="sensor" class="form-control hide_sensor_id"  style="width:165px;">
                                   <option value="">Select Sensor</option>
                                      <?php foreach ($result_sensor_list as $value) { ?>
                                    <option value="<?php echo  $value->sensorID ; ?>"><?php echo $value->sensor_name; ?></option>
                                    <?php } ?>
                                   </select>
                            </div>
                        </div>   
                  </div>  
                  </div>
                        <div class="col-md-2">
                    <div class="form-group" style="margin-bottom: 0">
                        <div class="form-row">
                            <div class="form-label-group">
                               <input type="submit" class="btn btn-primary custombtn" value="Search">
                            </div>
                        </div>   
                    </div>

                  </div>

                </div>
             </form>
                   <?php if(!empty($single_floor_name) && (!empty($single_controller_name)) && (!empty($single_sensor_name))){ ?>
             You have searched by :<span style="color:#007bff;"> <?php echo $single_floor_name; echo ",&nbsp;"; echo $single_controller_name; echo ",&nbsp;"; echo $single_sensor_name; ?></span>
           <?php } ?>
              </div>
            </div>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Controller Status </div>
            <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Floor Name</th>
                      <th>Controller Name</th>
                      <th>Sensor Name</th>
                      <th>Date Time</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Floor Name</th>
                      <th>Controller Name</th>
                      <th>Sensor Name</th>
                      <th>Date Time</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
					    <?php

               if(!empty($status_data)) {
               foreach($status_data as $status_value) { ?>
			         <tr>                    
                  <td><?php echo $status_value->floor_name; ?></td>
                  <td><?php echo $status_value->controller_name; ?></td>
                   <td><?php echo $status_value->sensor_name; ?></td>
                  <td><?php echo date_format_custom($status_value->start_date_time); ?></td>
                  <td><?php if($status_value->status==1){ ?><i class="fas fa-car-side text-success"></i> <?php } else { ?> <i class="fas fa-times text-danger"></i> <?php } ?></td>
                </tr>

                <?php 
 }
}
          else {
            ?>
              <tr>

                <td colspan="5"><span style="color:red;">Record Not Found</span></td>

              </tr>
         
          <?php 
        }
           					
				function date_format_custom($dateinfo)
						{
							$date = date_create($dateinfo);
							return date_format($date, 'd-M-Y, g:i:s A');
						}
				
					?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
        <!-- /.container-fluid -->

        
    <script>


   function validation(){

   var floorid= $("#floor_id").val();

   if(floorid==''){
      alert('Please Select floor id');
      $("#floor_id").focus();
      return false;
      }
   }

        $( document ).ready(function() {

        $( "#floor_id" ).change(function() {

            var fid=$("#floor_id").val();

             $.post( "<?php echo base_url();?>dashboard/controller_list",{floorid:fid}, function( data ) {

              $(".hide_controller_id").hide();
              
             $( ".result" ).html( data );
            
             });
        });

      });
    </script>