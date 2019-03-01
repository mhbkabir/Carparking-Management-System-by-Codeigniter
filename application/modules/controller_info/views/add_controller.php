    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Controller
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header"> Add New Controller <div style="float: right;"><a href="<?php echo base_url('controller_info')?>/data/controller_list"><button class="btn btn-primary">View List</button></a></div></div>
                      <div class="card-body">

                      <form name ="userinput" action="<?php echo base_url()?>controller_info/data/save_controller" method="post">
                        <div class="form-group">
                        <div class="form-row">
                        
                            <div class="form-label-group">
                                 <select name="floor_id" class="form-control" required="required" autofocus="autofocus" style="width:200px;">
                                   <option value="">Select Floor</option>
                                   <?php foreach ($result as $value) { ?>
                                    <option value="<?php echo  $value->floorID ; ?>"><?php echo $value->floor_name; ?></option>
                                    <?php } ?>
                                 </select>
                          
                          </div>
                            <br style="clear: both;" />
                            <br style="clear: both;" />

                        </div>
                        <div class="form-row">
                            <div class="form-label-group">
                            <input type="text" id="controllername" name="controllername" class="form-control" placeholder="Enter Controller Name" required="required">
                            <label for="floorname">Enter Controller Name</label>
                            </div>
                            
                        </div>

                   
                        <div class="form-row" style="margin-top: 10px;">
                            <div class="form-label-group">
                            <input type="text" id="controllerID" name="controllerID" class="form-control" placeholder="Enter Controller ID" required="required">
                            <label for="floorname">Enter Controller ID</label>
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


