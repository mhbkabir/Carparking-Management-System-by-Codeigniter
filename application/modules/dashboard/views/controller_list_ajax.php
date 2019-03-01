<select class="form-control controller_id" name="controller_id" required="required">
	<option value=""> Select Controller</option>
	<?php foreach($ajax_controller_list as $clist_value) { ?>
	<option value="<?php echo $clist_value->controllerID ?>"> <?php echo $clist_value->controller_name;?> </option>
	<?php } ?>
</select>

<script>

$( document ).ready(function() {

	$( ".controller_id" ).change(function() {
	 	var fid=$("#floor_id").val();
		var controller_id= $(".controller_id").val();	
	     $.post( "<?php echo base_url();?>dashboard/sensor_list",{floorid:fid,controllerid:controller_id}, function( data ) {
             $(".hide_sensor_id").hide();

           $( ".result2" ).html( data );
            
        });

	});

});


</script>