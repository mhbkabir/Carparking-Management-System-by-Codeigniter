

	<select class="form-control controller_id" name="controller_id" required="required" style="width:200px;">
		<option value=""> Select Controller</option>
		<?php foreach($ajax_controller_list as $clist_value) { ?>
		<option value="<?php echo $clist_value->controllerID ?>"> <?php echo $clist_value->controller_name;?> </option>
		<?php } ?>
	</select>

