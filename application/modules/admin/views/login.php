    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
		<?php if (isset($msg) && (!empty($msg))){ echo $msg;} ?>
          <?php echo form_open('admin/login'); ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="your-name" id="inputEmail" class="form-control" placeholder="User Name" required="required" autofocus="autofocus">
                <label for="inputEmail">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="your-password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
          
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
          <?php echo form_close(); ?>
          <div class="text-center">
            <a style="margin-top:8px;" class="d-block small" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

   
