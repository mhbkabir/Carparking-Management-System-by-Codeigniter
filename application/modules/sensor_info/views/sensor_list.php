
    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Sensor List
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"> Listed Sensor <div style="float: right;"><a href="<?php echo base_url('sensor_info')?>/data/add_sensor"><button class="btn btn-primary">Add New</button></a></div></div>
                      <div class="card-body">

                     <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                       
                       <th>Floor Name</th>
                        <th>Controller Name</th>
                        <th>Sensor Name</th>
                         <th>SensorID</th>    
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                                     
                       <th>Floor Name</th>
                        <th>Controller Name</th>
                         <th>Sensor Name</th>
                         <th>SensorID</th>      
                      <th>Action</th>
                     
                    </tr>
                  </tfoot>
                  <tbody> 
                  	<?php foreach($sensor_list as $list) { ?>
                    <tr>
                     <td><?php echo $list->floor_name; ?></td>
                      <td><?php echo $list->controller_name; ?></td>
                      <td><?php echo $list->sensor_name; ?></td>                       
                      <td><?php echo $list->sensorID; ?></td>
                      <td><a data-toggle="modal" data-target="#sensoreditModal<?php echo $list->sensor_id; ?>" style="cursor:pointer;text-decoration: none;" href="#"><i class="far fa-edit icon-custom edit_color"></i> </a>&nbsp; | &nbsp;<a onclick="return confirm('Are you sure to Delete ?');" href="<?php echo base_url('sensor_info')?>/data/delete/<?php echo $list->sensor_id; ?>"><i class="far fa-trash-alt icon-custom del_color"></i></a></td>   
                    </tr>

						<!-- Modal Sensor Edit Start-->
						<div id="sensoreditModal<?php echo $list->sensor_id; ?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						       
						      </div>
						      <div class="modal-body">
								<form name ="userinput" action="<?php echo base_url()?>sensor_info/data/edit_sensor" method="post">


                   <div class="form-group">
                              <div class="form-row">
                        
                            <div class="form-label-group">
                                 <select name="floor_id" class="form-control" required="required" autofocus="autofocus" style="width:200px;">
                                   <option value="">Select Floor</option>
                                   <?php foreach ($result as $value) { ?>
                                    <option <?php if($value->floorID==$list->floor_id)  { ?>  selected="selected" <?php } ?> value="<?php echo  $value->floorID ; ?>"><?php echo $value->floor_name; ?></option>
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
                                 <select name="controller_id" class="form-control" required="required" autofocus="autofocus" style="width:200px;">
                                   <option value="">Select Controller</option>
                                   <?php foreach ($result_controller_list as $value) { ?>
                                    <option  <?php if(($value->floor_id==$list->floor_id) 
                                   ) { ?>  selected="selected" <?php } ?>  value="<?php echo  $value->controllerID; ?>"><?php echo $value->controller_name; ?></option>
                                    <?php } ?>
                                 </select>
                          </div>
                            <br style="clear: both;" />

                            <br style="clear: both;" />
                        </div>
                        </div>
									<div class="form-group">
										<input type="hidden" name="sid" value="<?php echo $list->sensor_id; ?>">
									<input type="text"  class="form-control" name="sensor_name" placeholder="Enter Sensor Name" data-toggle="tooltip" title="Sensor Name" value="<?php echo $list->sensor_name; ?>">
									</div>
                     <div class="form-group">
                        <div class="form-row">
                            <div class="form-label-group">
                            <input type="text" id="sensorname" name="set_sensor_id" class="form-control" placeholder=">Enter Sensor ID" required="required" value="<?php echo $list->sensorID; ?>" autofocus="autofocus">
                            <label for="sensorname">Sensor ID</label>
                            </div>
                            
                        </div>
                        </div>

									<div class="form-group" style="margin:0;float: right;"><input type="submit" value="Update" class="btn btn-primary margin0">
									<div class="gap10"></div>
									<div id="retrivpassmessage"></div>
									</div>
								</form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								
						      </div>
						    </div>

						  </div>
						</div>
						<!-- Modal Sensor Edit End-->

                    <?php } ?>	
                    				
                   </tbody>
                </table>
              </div>
                      </div>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</div>
