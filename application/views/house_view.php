<html>  
<head>  
	<div align="center">
		<img src="<?php echo base_url() . 'uq.jpg'; ?>" />
	</div>
<div class="navbar" align="center">
	
	<a href="https://s4488771.uqcloud.net/Homepage">Home|</a>
	<a href="https://s4488771.uqcloud.net/Main/">Family|</a>
	<a href="https://s4488771.uqcloud.net/Fam_member_controller/">Family Member|</a>
	<a href="https://s4488771.uqcloud.net/Asset_controller/">Family Asset|</a>
	<a href="https://s4488771.uqcloud.net/Bank_account_controller">Bank Account|</a>
	<a href="https://s4488771.uqcloud.net/House_controller">House|</a>
	<a href="https://s4488771.uqcloud.net/Other_asset_controller/">Other Asset|</a>
	<a href="https://s4488771.uqcloud.net/Hh_spending_controller/">Household Spending|</a>
	<a href="https://s4488771.uqcloud.net/Farm_controller/">Farm|</a>
	<a href="https://s4488771.uqcloud.net/Op_cost_controller/">Operational Cost</a>
	
</div> 

	<title>INFS Project</title>  
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   	
   	<style type="text/css">
   	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 20px/30px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h3 {
		color: #CD5C5C;
		background-color: transparent;
		font-size: 25px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
		p.footer {
		text-align: right;
		font-size: 15px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
   	</style>  
   	
</head>  
<body>  
<div class="container" >  
  	<br /><br /><br />  
   	<h3 align="center">DATA ENTRY</h3><br />  
   	<form method="post" action="<?php echo base_url()?>House_controller/form_validation">  
    	<?php  
      	if($this->uri->segment(2) == "inserted")  
      	{  
          
           	echo '<p class="text-success">Data Inserted</p>';  
      	}  
       	if($this->uri->segment(2) == "updated")  
       	{  
       		echo '<p class="text-success">Data Updated</p>';  
      	}  
       	?>  
      	<?php  
       	if(isset($user_data))  
      	{  
         	foreach($user_data->result() as $row)  
            {  
       	?>  
       	<div class="form-group">  
          	<label>Enter Asset ID</label>  
        	<input type="text" name="asset_id" value="<?php echo $row->asset_id; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("asset_id"); ?></span>  
      	</div> 
     	<div class="form-group">  
          	<label>Enter Wall Type</label>  
        	<input type="text" name="wall_type" value="<?php echo $row->wall_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("wall_type"); ?></span>  
      	</div>  
      	<div class="form-group">  
         	<label>Enter Floor Type</label>  
          	<input type="text" name="floor_type" value="<?php echo $row->floor_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("floor_type"); ?></span>  
       	</div>  
      	<div class="form-group">  
         	<label>Enter Area</label>  
          	<input type="text" name="area" value="<?php echo $row->area; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("area"); ?></span>  
       	</div>  
       	<div class="form-group">  
         	<label>Enter WC Type</label>  
          	<input type="text" name="wc_type" value="<?php echo $row->wc_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("wc_type"); ?></span>  
       	</div> 
       	<div class="form-group">  
         	<label>Enter Energy Type</label>  
          	<input type="text" name="energy_type" value="<?php echo $row->energy_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("energy_type"); ?></span>  
       	</div> 
       	<div class="form-group">  
         	<label>Enter Roof Type</label>  
          	<input type="text" name="roof_type" value="<?php echo $row->roof_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("roof_type"); ?></span>  
       	</div> 
       	<div class="form-group">  
         	<label>Enter Date of Construction</label>  
          	<input type="text" name="doc" value="<?php echo $row->doc; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("doc"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Longitude</label>  
          	<input type="text" name="longitude" value="<?php echo $row->longitude; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("longitude"); ?></span>  
       	</div> 
       	<div class="form-group">  
         	<label>Enter Latitude</label>  
          	<input type="text" name="latitude" value="<?php echo $row->latitude; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("latitude"); ?></span>  
       	</div> 
       	<div class="form-group">  
         	<label>Enter Number</label>  
          	<input type="text" name="number" value="<?php echo $row->number; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("number"); ?></span>  
       	</div>  
       	<div class="form-group">  
         	<label>Enter Drinking Water Source</label>  
          	<input type="text" name="drinking_water_source" value="<?php echo $row->drinking_water_source; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("drinking_water_source"); ?></span>  
       	</div> 
     	<div class="form-group">  
          	<input type="hidden" name="hidden_id" value="<?php echo $row->asset_id; ?>" />  
        	<input type="submit" name="update" value="Update" class="btn btn-info" />  
      	</div>       
      	<?php       
           	}  
     	}  
      	else  
       	{  
       	?>  
      	<div class="form-group">  
          	<label>Enter Asset ID</label>  
           	<input type="text" name="asset_id" class="form-control" />  
          	<span class="text-danger"><?php echo form_error("asset_id"); ?></span>  
     	</div>  
     	<div class="form-group">  
          	<label>Enter Wall Type</label>  
           	<input type="text" name="wall_type" class="form-control" />  
          	<span class="text-danger"><?php echo form_error("wall_type"); ?></span>  
     	</div>  
     	<div class="form-group">  
        	<label>Enter Floor Type</label>  
         	<input type="text" name="floor_type" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("floor_type"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Area</label>  
         	<input type="text" name="area" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("area"); ?></span>  
    	</div> 
    	<div class="form-group">  
        	<label>Enter WC Type</label>  
         	<input type="text" name="wc_type" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("wc_type"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Energy Type</label>  
         	<input type="text" name="energy_type" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("energy_type"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Roof Type</label>  
         	<input type="text" name="roof_type" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("roof_type"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Date of Construction</label>  
         	<input type="text" name="doc" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("doc"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Longitude</label>  
         	<input type="text" name="longitude" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("longitude"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Latitude</label>  
         	<input type="text" name="latitude" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("latitude"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Number</label>  
         	<input type="text" name="number" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("number"); ?></span>  
    	</div>  
    	<div class="form-group">  
        	<label>Enter Drinking Water Source</label>  
         	<input type="text" name="drinking_water_source" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("drinking_water_source"); ?></span>  
    	</div>  
       	<div class="form-group">  
        	<input type="submit" name="insert" value="Insert" class="btn btn-info" />  
       	</div>       
      	<?php  
       	}  
      	?>  
  	</form>  
  	<br /><br />  
  	<h3 align="center">FAMILY HOUSE TABLE</h3><br />  
  	<div class="table-responsive">  
     	<table class="table table-bordered">  
          	<tr>  
            	<th>Asset ID</th>  
             	<th>Wall Type</th>  
              	<th>Floor Type</th>
              	<th>Area</th> 
              	<th>WC Type</th> 
              	<th>Energy Type</th> 
              	<th>Roof Type</th> 
              	<th>Date of Construction</th> 
              	<th>Longitude</th> 
              	<th>Latitude</th> 
              	<th>Number</th> 
              	<th>Drinking Water Source</th>  
              	<th>Delete</th>  
              	<th>Update</th>  
        	</tr>  
      	<?php  
       	if($fetch_data->num_rows() > 0)  
       	{  
           	foreach($fetch_data->result() as $row)  
           	{  
     	?>  
      		<tr>  
          		<td><?php echo $row->asset_id; ?></td>  
               	<td><?php echo $row->wall_type; ?></td>  
            	<td><?php echo $row->floor_type; ?></td>  
            	<td><?php echo $row->area; ?></td> 
            	<td><?php echo $row->wc_type; ?></td> 
            	<td><?php echo $row->energy_type; ?></td> 
            	<td><?php echo $row->roof_type; ?></td> 
            	<td><?php echo $row->doc; ?></td> 
            	<td><?php echo $row->longitude; ?></td> 
            	<td><?php echo $row->latitude; ?></td> 
            	<td><?php echo $row->number; ?></td> 
            	<td><?php echo $row->drinking_water_source; ?></td> 
            	<td><a href="#" class="delete_data" id="<?php echo $row->asset_id; ?>">Delete</a></td>  
               	<td><a href="<?php echo base_url(); ?>House_controller/update_data/<?php echo $row->asset_id; ?>">Edit</a></td>  
           	</tr>  
      	<?php       
           	}  
       	}  
      	else  
      	{  
      	?>  
         	<tr>  
             	<td colspan="5">No Data Found</td>  
         	</tr>  
       	<?php  
       	}  
       	?>  
     	</table>  
  	</div>  
  	<script>  
   	$(document).ready(function(){  
     	$('.delete_data').click(function(){  
          	var id = $(this).attr("id");  
           	if(confirm("Are you sure you want to delete this?"))  
           	{  
            	window.location="<?php echo base_url(); ?>House_controller/delete_data/"+id;  
         	}  
           	else  
           	{  
            	return false;  
         	}  
     	});  
  	});  
  	</script>  
</div> 

<div>
	<p class="footer">INFS7901 Presented By Bernando Purba and Sebastian Orellana</p>
</div>

</body>  
</html>