    <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Status</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Status information</div>
            <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
				  
                    <tr>
                      <th>Sensor Name</th>
                      <th>Controller Name</th>
                      <th>Floor Name</th>
                      <th>Start Date Time</th>
                      <th>Duration</th>
					  <th>Duration Status</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sensor Name</th>
                      <th>Controller Name</th>
                      <th>Floor Name</th>
                      <th>Start Date Time</th>
                      <th>Duration</th>
                      <th>Duration Status</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
					<?php foreach($status_data as $status_value) { ?>
					<tr>
                      <td><?php echo $status_value->sensor_name; ?></td>
                      <td><?php echo $status_value->controller_name; ?></td>
                      <td><?php echo $status_value->floor_name; ?></td>
                      <td><?php echo date_format_custom($status_value->start_date_time); ?></td>
                      
                      <td><?php 
					
							$startTime = $status_value->start_date_time;

							$startTimestamp = strtotime($startTime);

							$childStarttime = strtotime(date('g:i:s A', $startTimestamp)); // HH:ss

							$endTime = $status_value->end_date_time;

							$endTimestamp = strtotime($endTime);


							$childEndtime= strtotime(date('g:i:s A', $endTimestamp)); // HH:ss


							$time_diff=$childEndtime-$childStarttime;

							$init = $time_diff;
							$hours = floor($init / 3600);
							$minutes = floor(($init / 60) % 60);
							$seconds = $init % 60;

							echo "$hours:$minutes:$seconds";
							
							if($hours==1){
								$class="text-primary";
							}
							else if($hours==2)
							{
								$class="text-success";
							}
							else 
								$class="";
					
					  ?></td>
					  
					  <td>
					  
					  <i class="fas fa-car-side <?php echo $class; ?>"></i><?php  ?></td>
                      <td><?php if($status_value->status==1){ ?> <span class="text-success">Active</span>  <?php } else {echo "Off";} ?></td>
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
            <div class="card-footer small text-muted">Duration: 1 Hour <i class="fas fa-car-side text-primary"></i>, 2 Hour <i class="fas fa-car-side text-success"></i></div>
          </div>
        </div>
        <!-- /.container-fluid -->

      