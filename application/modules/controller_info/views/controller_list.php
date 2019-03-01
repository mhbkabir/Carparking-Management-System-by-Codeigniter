
    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Controller List
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header"> Listed Controller <div style="float: right;"><a href="<?php echo base_url('controller_info')?>/data/add_controller"><button class="btn btn-primary">Add New</button></a></div></div>
                      <div class="card-body">

                     <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ControllerID</th>
                       <th>Floor Name</th>
                      <th>Controller Name</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>ControllerID</th>
                       <th>Floor Name</th>
                      <th>Controller Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody> 
                  	<?php 

                    foreach($controller_list as $list) { ?>
                    <tr>
                      <td><?php echo $list->controllerID; ?></td>
                      <td><?php echo $list->floor_name; ?></td>
                      <td><?php echo $list->controller_name; ?></td>
                       <td><a data-toggle="modal" data-target="#controllereditModal<?php echo $list->controller_id; ?>" style="cursor:pointer;text-decoration: none;" href="#"><i class="far fa-edit icon-custom edit_color"></i> </a>&nbsp; | &nbsp;<a onclick="return confirm('All information will be delete under this controller. Are you sure to Delete ?');" href="<?php echo base_url('controller_info')?>/data/delete/<?php echo $list->floor_id; ?>"><i class="far fa-trash-alt icon-custom del_color"></i></a></td>   
                    </tr>


						<!-- Modal Floor Edit Start-->
						<div id="controllereditModal<?php echo $list->controller_id; ?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						       
						      </div>
						      <div class="modal-body">
								<form name ="userinput" action="<?php echo base_url()?>controller_info/data/edit_controller" method="post">
                  <div class="form-group">
                    <select name="floor_id" class="form-control" required="required" autofocus="autofocus" style="width:200px;">
                         <option value="">Select Floor</option>
                         <?php foreach ($result as $value) { ?>
                          <option <?php if($value->floorID==$list->floor_id) { ?> selected="selected" <?php } ?> value="<?php echo  $value->floorID ; ?>"><?php echo $value->floor_name; ?></option>
                          <?php } ?>
                    </select>
                  </div>
									<div class="form-group">
										<input type="hidden" name="cid" value="<?php echo $list->controller_id; ?>">
									<input type="text"  class="form-control" name="controller_name" placeholder="Enter Controller Name" data-toggle="tooltip" title="Controller Name" value="<?php echo $list->controller_name; ?>">
									</div>
                  <div class="form-group">
                  <input type="text"  class="form-control" name="controllerID" placeholder="Enter Controller ID" data-toggle="tooltip" title="Controller ID" value="<?php echo $list->controllerID; ?>">
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
						<!-- Modal Floor Edit End-->

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
