<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<div align="center">
    <img src="<?php echo base_url() . 'uq.jpg'; ?>" />
</div>
	
<div class="navbar" align="right" >
		<a href="https://s4488771.uqcloud.net/">Logout</a>
</div>
	

	<title>INFS7901</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 20px/30px normal Helvetica, Arial, sans-serif;
		color: #060606;
	}
	
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h3 {
		color: #6E78F1;
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

<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">MAIN__MENU<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="https://s4488771.uqcloud.net/Homepage">HOME</a></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="https://s4488771.uqcloud.net/er_control">ER DIAGRAM</a></li>
		<li role="presentation">
</div>
<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">TABLE_MENU<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		<li role="presentation">
			
    <a href="https://s4488771.uqcloud.net/Homepage">HOME</a>
	<a href="https://s4488771.uqcloud.net/Main/">FAMILY</a>
	<a href="https://s4488771.uqcloud.net/Fam_member_controller/">FAMILY MEMBER</a>
	<a href="https://s4488771.uqcloud.net/Asset_controller/">FAMILY ASSET</a>
	<a href="https://s4488771.uqcloud.net/Bank_account_controller">BANK ACOUNT</a>
	<a href="https://s4488771.uqcloud.net/House_controller">HOUSE</a>
	<a href="https://s4488771.uqcloud.net/Other_asset_controller/">OTHER ASSET</a>
	<a href="https://s4488771.uqcloud.net/Hh_spending_controller/">HOUSEHOLD SPENDING</a>
	<a href="https://s4488771.uqcloud.net/Farm_controller/">FARM</a>
	<a href="https://s4488771.uqcloud.net/Op_cost_controller/">OPERATIONAL COST</a>
</div>
<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">QUERY_MENU<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		<li role="presentation">
			
    	<a href="https://s4488771.uqcloud.net/insurance_query_controller/">CHECKING THE INSURANCE STATUS</a>
    	<a href="https://s4488771.uqcloud.net/bank_query_controller/">CHECKING FAMILY BANK ACCOUNT</a>
    	<a href="https://s4488771.uqcloud.net/op_cost_query_controller/">CHECKING FARM OPERATIONAL COST</a>
    	<a href="https://s4488771.uqcloud.net/family_strata_query_controller/">CHECKING FAMILY ECONOMIC CONDITION</a>
    	<a href="https://s4488771.uqcloud.net/fh1_query_controller/">CHECKING FARM-HOUSE 1</a>
    	<a href="https://s4488771.uqcloud.net/oc_type_query_controller/">CHECKING OPERATIONAL COST TYPE</a>
</div>
<body>
<div align="center">
	<h3 align="center">ABOUT THE PROJECT</h3>
</div>

<div id="container">
	<h3>Project Description</h3>

	<div id="body">
		<p>The Regional Long-Term Development Plan is a government initiative based on the work 
			of a volunteer network, whose main goal is to help the government create local economic 
			development plans for poor villages in the Mapili subdistrict, West Sulawesi, 
			Indonesia.</p>
				
		<p>At this stage the volunteers are currently mapping the economic conditions of local 
			families throughout this collection of villages.</p>
			
		<p>The main purpose of this project is to 
			develop a proposed data base structure which could host the different data sets originated 
			from this mapping process.</p>

	</div>
	<h3>Project Domain</h3>
		<div id="body">
		<p>In this project we are going to model the economic relations between individuals, families, 
			farms and villages targeted by the volunteers, for instance household expenses associated 
			with different families in different villages, points of sale for local products associated 
			with local farms or villages, among many others.</p>
		</div>

	<h3>Application's Specifications</h3>
		<div id="body">
		<p>There will be one class of user of the system, government employees which will later query 
			this database to retrieve key figures and reports to support the elaboration of the local 
			economic development plan. Furthermore they will also be able to update the information 
			stored in the system, capturing the dynamic nature of the economic relationships. </p>
		<p>Finally to ensure the privacy of this data, we will provide different permits to query 
			sensible information such as bank accounts, bank balance and other sensible information. </p>
		</div>
		
	</div>

</body>
<div>
	<p class="footer">INFS7901 Presented By Bernando Purba and Sebastian Orellana</p>
</div>
</html>