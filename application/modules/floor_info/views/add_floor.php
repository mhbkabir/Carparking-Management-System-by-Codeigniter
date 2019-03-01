    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Floor
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header"> Add New Floor <div style="float: right;"><a href="<?php echo base_url('floor_info')?>/data/floor_list"><button class="btn btn-primary">View List</button></a></div></div>
                      <div class="card-body">

                      <form name ="userinput" action="<?php echo base_url()?>floor_info/data/save_floor" method="post">
                            <div class="form-group">
                        <div class="form-row">
                            <div class="form-label-group">
                            <input type="text" id="floorname" name="floorname" class="form-control" placeholder=">Enter Floor Name" required="required" autofocus="autofocus">
                            <label for="floorname">Enter Floor Name</label>
                            </div>                            
                        </div>
                         <div class="form-row" style="margin-top:15px;">
                            <div class="form-label-group">
                            <input type="text" id="floorID" name="floorID" class="form-control" placeholder=">Enter Floor ID" required="required" autofocus="autofocus">
                            <label for="floorname">Enter Floor ID</label>
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


