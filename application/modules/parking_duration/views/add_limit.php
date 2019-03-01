    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            Duration
            </li>
            
          </ol>
		 
            <div class="row">
              <div class="col-md-10">
                  <div class="card" style="width:449px;">
                      <div class="card-header"> Add Duration Limit <div style="float: right;"><a href="<?php echo base_url('parking_duration')?>/limit/view_list"><button class="btn btn-primary">View List</button></a></div></div>
                      <div class="card-body"  style="width:875px;">
                      <form name ="userinput" action="<?php echo base_url()?>parking_duration/limit/save_duration_info" method="post" onsubmit="return validateForm()">   
                            
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="form-row">                           
                                      <input type="text" style="width:auto;" id="duration" name="duration_start" class="form-control" placeholder="Duration Start" required="required" >
                                  </div>
                              </div>
                          </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <div class="form-row">                           
                                      <input type="text" style="width:auto;" id="duration2" name="duration_end" class="form-control" placeholder="Duration End" required="required" >
                                  </div>
                              </div>
                            </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="form-row">                           
                                      <input type="text" style="width:auto;" id="duration_title" name="duration_title" class="form-control" placeholder="Duration Title" required="required" >
                                  </div>
                              </div>
                          </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                  <div class="form-row">            
                                      <input type="text" style="width:auto;" id="duration_color1" name="duration_color" class="form-control jscolor" placeholder="Enter Color" value="" required="required"> 
                                  </div>
                              </div>
                          </div>
                          </div>  
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-label-group" >
                                     <input type="submit" style="margin-left:324px;" class="btn btn-primary custombtn" value="Submit">
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

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/timepicki.js"></script>
    <script>
    $('#duration').timepicki({show_meridian:false,min_hour_value:0,
    max_hour_value:120});
    $('#duration2').timepicki({show_meridian:false,min_hour_value:0,
    max_hour_value:120});
    function validateForm() {
      var x = document.forms["userinput"]["duration_color"].value;
        if (x == "FFFFFF") {
        alert("Change default color");
        return false;
        }
      }
    </script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url()?>js/jscolor.js"></script>

