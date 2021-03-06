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
   	<form method="post" action="<?php echo base_url()?>Fam_member_controller/form_validation">  
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
          	<label>Enter Card Number</label>  
        	<input type="text" name="card_number" value="<?php echo $row->card_number; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("card_number"); ?></span>  
      	</div> 
      	<div class="form-group">  
         	<label>Enter Name</label>  
          	<input type="text" name="name" value="<?php echo $row->name; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("name"); ?></span>  
       	</div>
     	<div class="form-group">  
          	<label>Enter Gender</label>  
        	<input type="text" name="gender" value="<?php echo $row->gender; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("gender"); ?></span>  
      	</div>  
      	<div class="form-group">  
         	<label>Enter Insurance Status</label>  
          	<input type="text" name="insurance_status" value="<?php echo $row->insurance_status; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("insurance_status"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Job</label>  
          	<input type="text" name="job" value="<?php echo $row->job; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("job"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Date Of Birth</label>  
          	<input type="text" name="dob" value="<?php echo $row->dob; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("dob"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Education</label>  
          	<input type="text" name="education" value="<?php echo $row->education; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("education"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Blood Type</label>  
          	<input type="text" name="blood_type" value="<?php echo $row->blood_type; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("blood_type"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Family Function</label>  
          	<input type="text" name="family_function" value="<?php echo $row->family_function; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("family_function"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Religion</label>  
          	<input type="text" name="religion" value="<?php echo $row->religion; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("religion"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Marital Status</label>  
          	<input type="text" name="marital_status" value="<?php echo $row->marital_status; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("marital_status"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Family ID</label>  
          	<input type="text" name="family_id" value="<?php echo $row->family_id; ?>" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("family_id"); ?></span>  
       	</div>  
     	<div class="form-group">  
          	<input type="hidden" name="hidden_id" value="<?php echo $row->card_number; ?>" />  
        	<input type="submit" name="update" value="Update" class="btn btn-info" />  
      	</div>       
      	<?php       
           	}  
     	}  
      	else  
       	{  
       	?>  
      	<div class="form-group">  
          	<label>Enter Card Number</label>  
           	<input type="text" name="card_number" class="form-control" />  
          	<span class="text-danger"><?php echo form_error("card_number"); ?></span>  
     	</div>  
     	<div class="form-group">  
          	<label>Enter Name</label>  
           	<input type="text" name="name" class="form-control" />  
          	<span class="text-danger"><?php echo form_error("name"); ?></span>  
     	</div>
     	<div class="form-group">  
          	<label>Enter Gender</label>  
           	<input type="text" name="gender" class="form-control" />  
          	<span class="text-danger"><?php echo form_error("gender"); ?></span>  
     	</div>  
     	<div class="form-group">  
        	<label>Enter Insurance Status</label>  
         	<input type="text" name="insurance_status" class="form-control" />  
           	<span class="text-danger"><?php echo form_error("insurance_status"); ?></span>  
    	</div>  
    	<div class="form-group">  
         	<label>Enter Job</label>  
          	<input type="text" name="job" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("job"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Date Of Birth</label>  
          	<input type="text" name="dob" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("dob"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Education</label>  
          	<input type="text" name="education" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("education"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Blood Type</label>  
          	<input type="text" name="blood_type" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("blood_type"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Family Function</label>  
          	<input type="text" name="family_function" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("family_function"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Religion</label>  
          	<input type="text" name="religion" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("religion"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Marital Status</label>  
          	<input type="text" name="marital_status" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("marital_status"); ?></span>  
       	</div>
       	<div class="form-group">  
         	<label>Enter Family ID</label>  
          	<input type="text" name="family_id" class="form-control" />  
         	<span class="text-danger"><?php echo form_error("family_id"); ?></span>  
       	</div>
       	<div class="form-group">  
        	<input type="submit" name="insert" value="Insert" class="btn btn-info" />  
       	</div>       
      	<?php  
       	}  
      	?>  
  	</form>  
  	<br /><br />  
  	<h3 align="center">FAMILY MEMBER TABLE</h3><br />  
  	<div class="table-responsive">  
     	<table class="table table-bordered">  
          	<tr>  
            	<th>Card Number</th>  
             	<th>Name</th>  
              	<th>Gender</th>
              	<th>Insurance Status</th> 
              	<th>Job</th> 
              	<th>Date of Birth</th> 
              	<th>Education</th> 
              	<th>Blood Type</th> 
              	<th>Family Function</th> 
              	<th>Religion</th> 
              	<th>Marital Status</th> 
              	<th>Family ID</th>    
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
          		<td><?php echo $row->card_number; ?></td> 
          		<td><?php echo $row->name; ?></td>  
               	<td><?php echo $row->gender; ?></td> 
               	<td><?php echo $row->insurance_status; ?></td>  
            	<td><?php echo $row->job; ?></td>  
            	<td><?php echo $row->dob; ?></td> 
            	<td><?php echo $row->education; ?></td> 
            	<td><?php echo $row->blood_type; ?></td> 
            	<td><?php echo $row->family_function; ?></td> 
            	<td><?php echo $row->religion; ?></td> 
            	<td><?php echo $row->marital_status; ?></td> 
            	<td><?php echo $row->family_id; ?></td> 
            	<td><a href="#" class="delete_data" id="<?php echo $row->card_number; ?>">Delete</a></td>  
               	<td><a href="<?php echo base_url(); ?>Fam_member_controller/update_data/<?php echo $row->card_number; ?>">Edit</a></td>  
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
            	window.location="<?php echo base_url(); ?>Fam_member_controller/delete_data/"+id;  
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