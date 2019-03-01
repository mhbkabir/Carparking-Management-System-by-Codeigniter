<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.min.js"></script>
	
	<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
	 <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	 <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>	
    <script src="<?php echo base_url()?>js/timepicki.js"></script>
    <script>
		
		function validateForm() {
			var x = document.forms["userinput"]["duration_color"].value;
			  if (x == "FFFFFF") {
				alert("Change default color");
				return false;
			  }
			}
    </script>
   
	


    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
             Duration List
            </li>
            
          </ol>

          <div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"> Listed Duration<div style="float: right;"><a href="<?php echo base_url('parking_duration')?>/limit/add_limit"><button class="btn btn-primary">Add New</button></a></div></div>
                      <div class="card-body">
                     <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>         
                      <th>Duration Title</th>   
          						<th>Duration Start</th>						
          						<th>Duration End</th>
          						<th>Color</th>
          						<th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Duration Title</th>            
            					  <th>Duration Start  </th>           
                        <th>Duration End</th>
                        <th>Color</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody> 
			
                  	<?php foreach($result as $list) { ?>
                    <tr>
                      <td><?php echo $list->duration_title; ?></td>
                      <td><?php echo $list->duration_start; ?><div style="width:20px;float:right; height:10px;background:<?php echo $list->duration_start; ?>"></div></td>

                       <td><?php echo $list->duration_end; ?> </td>   
                       <td><?php echo $list->duration_color; ?> <div style="margin-top:7px;width:20px;float:right; height:10px;background:<?php echo $list->duration_color; ?>"></div></td>                    
                      <td><a  style="cursor:pointer;text-decoration: none;" href="<?php echo base_url('parking_duration')?>/limit/edit_limit/<?php echo $list->duration_id; ?>"><i class="far fa-edit icon-custom edit_color"></i> </a>&nbsp; | &nbsp;<a onclick="return confirm('Are you sure to Delete ?');" href="<?php echo base_url('parking_duration')?>/limit/delete_duration/<?php echo $list->duration_id; ?>"><i class="far fa-trash-alt icon-custom del_color"></i></a></td>   
                    </tr>

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
