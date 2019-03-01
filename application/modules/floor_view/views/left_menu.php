   <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url();?>dashboard/info">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>    
        <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url()?>dashboard/status"><i class="fas fa-fw fa-table"></i></i> <span>View Status</span></a></li>

              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Parking</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header customh6">Parking Status</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>floor_view/data/floor_info">Parking 2</a>
          <a class="dropdown-item" href="<?php echo base_url()?>floor_view/data/floor_info_3">Parking 3</a>
          <a class="dropdown-item" href="<?php echo base_url()?>floor_view/data/summary">Parking Summary</a>
        </div>
      </li>

        <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url()?>dashboard/deviceinfo"><i class="fas fa-fw fa-table"></i></i> <span>Device Information</span></a></li>
      
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Operations</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header customh6">Floor</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>floor_info/data/add_floor">Add New</a>
          <a class="dropdown-item" href="<?php echo base_url()?>floor_info/data/floor_list">Floor List</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header customh6">Controller</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>controller_info/data/add_controller">Add New</a>
          <a class="dropdown-item" href="<?php echo base_url()?>controller_info/data/controller_list">Controller List</a>
           <div class="dropdown-divider"></div>
          <h6 class="dropdown-header customh6">Sensor</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>sensor_info/data/add_sensor">Add New</a>
          <a class="dropdown-item" href="<?php echo base_url()?>sensor_info/data/sensor_list">Sensor List</a>
        </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Duration</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header customh6">Duration</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>parking_duration/limit/add_limit">Add New</a>
          <a class="dropdown-item" href="<?php echo base_url()?>parking_duration/limit/view_list">Duration Limit View</a>
         
        </div>
      </li>

         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Default Color</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header customh6">No Car Color</h6>
          <a class="dropdown-item" href="<?php echo base_url()?>parking_duration/limit/default_color">Update New</a>
        </div>
      </li>

      </ul>