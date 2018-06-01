<html>  
<head>  
	<div align="center">
		<img src="<?php echo base_url() . 'uq.jpg'; ?>" />
	</div>
<div class="navbar" align="center">
	
	<a align="center" href="https://s4488771.uqcloud.net/homepage">Home|</a>
	<a href="https://s4488771.uqcloud.net/Insurance_query_controller/">Insurance Status|</a>
	<a href="https://s4488771.uqcloud.net/Bank_query_controller/">Bank Balance|</a>
	<a href="https://s4488771.uqcloud.net/Op_cost_query_controller/">Operational Cost|</a>
	<a href="https://s4488771.uqcloud.net/oc_type_query_controller/">Operational Cost Type|</a>
	<a href="https://s4488771.uqcloud.net/family_strata_query_controller/">Family Economic Condition|</a>
	<a href="https://s4488771.uqcloud.net/fh1_query_controller/">Farm-House Ownership</a>
	
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
		font-size: 18px;
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
  	<div align="center">
  		<h3>Insurance Status</h3>
  	</div>
	<div id="body">
		<p></p>
				
		<p>Today, Indonesian government obligue all the citizen to have a health insurance. Using 
			the following query,the government can query list of people who do not have any health insurance.
		</p>
		
		<code>
			SELECT card_number, name, family_id, insurance_status
		</code>
		<code>
			FROM family_member
		</code>
		<code>
			WHERE Insurance Status = 'None'
		</code>
		
	</div>        
 
  	</form>  
  	<br /><br />  
  	<h3 align="center">FAMILY MEMBER TABLE</h3><br />  
  	<div class="table-responsive">  
     	<table class="table table-bordered">  
          	<tr>  
            	<th>Card Number</th>  
             	<th>Name</th>  
              	<th>Family ID</th> 
              	<th>Insurance Status</th>    
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
            	<td><?php echo $row->family_id; ?></td>  
            	<td><?php echo $row->insurance_status; ?></td>
    
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

<div>
	<p class="footer">INFS7901 Presented By Bernando Purba and Sebastian Orellana</p>
</div>

</body>  
</html>