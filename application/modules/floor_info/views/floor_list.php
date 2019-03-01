
    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Floor List
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header"> Listed Floor <div style="float: right;"><a href="<?php echo base_url('floor_info')?>/data/add_floor"><button class="btn btn-primary">Add New</button></a></div></div>
                      <div class="card-body">

                     <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>FloorID</th>
                      <th>Floor Name</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>FloorID</th>
                      <th>Floor Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody> 
                  	<?php foreach($floor_list as $list) { ?>
                    <tr>
                      <td><?php echo $list->floorID; ?></td>
                      <td><?php echo $list->floor_name; ?></td>
                       <td><a data-toggle="modal" data-target="#flooreditModal<?php echo $list->floor_id; ?>" style="cursor:pointer;text-decoration: none;" href="#"><i class="far fa-edit icon-custom edit_color"></i> </a>&nbsp; | &nbsp;<a onclick="return confirm('All information will be delete under this floor. Are you sure to Delete ?');" href="<?php echo base_url('floor_info')?>/data/delete/<?php echo $list->floorID; ?>"><i class="far fa-trash-alt icon-custom del_color"></i></a></td>   
                    </tr>


						<!-- Modal Floor Edit Start-->
						<div id="flooreditModal<?php echo $list->floor_id; ?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						       
						      </div>
						      <div class="modal-body">
								<form name ="userinput" action="<?php echo base_url()?>floor_info/data/edit_floor" method="post">
									<div class="form-group">
										<input type="hidden" name="fid" value="<?php echo $list->floor_id;?>">
									<input type="text"  class="form-control" name="floor_name" placeholder="Enter Floor Name" data-toggle="tooltip" title="Floor Name" value="<?php echo $list->floor_name; ?>">
									</div>
                  <div class="form-group">
                  <input type="text"  class="form-control" name="floorID" placeholder="Enter Floor ID" data-toggle="tooltip" title="FloorID" value="<?php echo $list->floorID; ?>">
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
