
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>dashboard/info">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Device info</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Device information</div>
            <div class="card-body">
              <div class="table-responsive" style="display: none;">
                <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
				  
                    <tr>
                      <th>Floor Name</th>                    
                      <th>Controller Name</th>
                      <th>Sensor Name</th>                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Floor Name</th>                    
                      <th>Controller Name</th>
                      <th>Sensor Name</th>  
                    </tr>
                  </tfoot>
                  <tbody>
					         <?php foreach($dashboard_data as $dasboard_value) { ?>
					          <tr>
                        <td><?php echo $dasboard_value->floor_name; ?></td>                     
                        <td><?php echo $dasboard_value->controller_name; ?></td>
                        <td><?php echo $dasboard_value->sensor_name; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>


              <?php 

                   foreach ($floor_list as $value) {

                          ?>


<ul>
  <li  <li style="list-style-type: square;">
  <strong><?php  echo $value->floor_name; ?></strong>
   <?php $result=$this->dashboard_model->show_controller($value->floorID); ?>

 <?php 
        foreach ($result as $values) {
        
     ?>
    <ul>

     <li >  <?php   echo "<i style=color:#910000;font-weight:500>".$values->controller_name."</i>"; ?></li> 

    <?php $result_sensor=$this->dashboard_model->show_sensor($values->floor_id,$values->controllerID); 
                       
    foreach ($result_sensor as $values) {  ?>   
      <ul>
        <li><?php   echo "<span style=color:#0071cc>".$values->sensor_name."</span><br>" ; ?></li>
      </ul>
      <?php } ?>
    </ul>
  <?php } ?>
  </li>
</ul>  

                      
     <?php  
    } 
?>



            </div>
            <div class="card-footer small text-muted">Showing Device Information</div>
          </div>
        </div>
        <!-- /.container-fluid -->



       