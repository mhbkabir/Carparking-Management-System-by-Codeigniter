<?php $CI =& Data::$instance; ?>

    <div id="content-wrapper">
        <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              Summary View
            </li>
            
          </ol>

          <div class="row">
              
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">Parking 2</div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>         
                                            <th>Color</th>						
                                            <th>Quantity</th>
                                            <th>Total</th>		
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>         
                                            <th>Color</th>						
                                            <th>Quantity</th>
                                            <th>Total</th>	
                                        </tr>
                                    </tfoot>
                                    <tbody> 
                                        <?php 
                                        $parking2_vals  = $CI->count_view_dashboard(2); /* 1 is floor id */
                                        $total="";        
                                       
                                        $i=0;
                                        $condtion_value = count($parking2_vals)-1;
                                        foreach(array_reverse($parking2_vals) as $key=>$val) { ?>
                                        <tr>
                                            <td><div class="circle" style="margin:5px;float:left;background-color: <?php echo $key; ?>"></div><div style="float:left;"><?php $CI->get_duration_title($key);?></div></td>
                                            <td><?php echo $val; ?></td>                                              
                                            <td colspan="2"><?php  echo $final_total; if($key!==$dfl_color[0]->duration_color) { $total+=$val; if($condtion_value==$i) { echo $total;} } else  echo $val; ?>
                                            </td>   
                                        </tr>

                                        <?php $i++; } ?>	

                                    </tbody>
                              </table>
                          </div>
                      </div>
                      </div>
                        <br />
                     <a href="<?php echo base_url('floor_view')?>/data/floor_info" target="_blank"> <button class="btn btn-primary custombtn" />View Dashboard</button></a>
                      </div>

              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">Parking 3</div>
                      <div class="card-body">
                     <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataable" width="100%" cellspacing="0">
                  <thead>
                    <tr>         
            						<th>Color</th>						
            						<th>Quantity</th>
            						<th>Total</th>		
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>         
                        <th>Color</th>						
                        <th>Quantity</th>
                        <th>Total</th>	
                    </tr>
                  </tfoot>
                       <tbody> 
    			               <?php 

                         $parking3_vals  = $CI->count_view_dashboard(3); /* 2 is floor id */

                         $total_val="";        
                           
                         $i=0;
                         $condtion_value = count($parking3_vals)-1;
                                foreach(array_reverse($parking3_vals) as $key=>$val) { ?>
                                    <tr>
                                      <td><div class="circle" style="margin:5px;float:left;background-color: <?php echo $key; ?>"></div><div style="float:left;"><?php $CI->get_duration_title($key);?></div></td>
                                      <td><?php echo $val; ?></td>                                              
                                      <td colspan="2"><?php  echo $final_total; if($key!==$dfl_color[0]->duration_color) { $total_val+=$val; if($condtion_value==$i) { echo $total_val;} } else  echo $val; ?>
                                      </td>   
                                    </tr>
                                  <?php $i++; } ?>  
                             </tbody>
                          </table>
                        </div>
			  
                      </div>
                      </div>

                       <br />
                     <a href="<?php echo base_url('floor_view')?>/data/floor_info_3" target="_blank"> <button class="btn btn-primary custombtn" />View Dashboard</button></a>
                      </div>
                  </div>


              </div>
          </div>
  </div>
</div>
