    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
           No Car Color
            </li>
            
          </ol>
     
            <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header"> Update Default Color</div>
                      <div class="card-body">
                      <form name ="userinput" action="<?php echo base_url()?>parking_duration/limit/update_color" method="post" onsubmit="return validateForm()">        
                      <input type="hidden" name="duration_id" value="<?php echo $id; ?>">     
                        <div class="row">
                         
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="form-row">            
                                      <input type="text" style="width:auto;" id="duration_color" name="duration_color" class="form-control jscolor" placeholder="Enter Color" value="<?php echo $dfl_color[0]->duration_color;?>" required="required"> 
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-label-group" >
                                     <input type="submit" class="btn btn-primary custombtn" value="Update">
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

