

	<select class="form-control" name="sensor_id" required="required" style="width:165px;">
		<option value=""> Select Sensor</option>
		<?php foreach($ajax_sensor_list as $slist_value) { ?>
		<option value="<?php echo $slist_value->sensorID; ?>"> <?php echo $slist_value->sensor_name;?> </option>
		<?php } ?>
	</select>

