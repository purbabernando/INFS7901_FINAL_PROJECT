<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<div align="center">
		<img  src="<?php echo base_url() . 'uq.jpg'; ?>" /> 
	</div>
    
	<title>ER Diagram</title>  
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

<div class="navbar" align="center">
	
	<a href="https://s4488771.uqcloud.net/homepage">Home|</a>
    <a class = "active" href="https://s4488771.uqcloud.net/Er_control">ER Diagram</a>

</div>
   	
</head>  
<body> 
<div>
	<h3>ER Diagram</h3>
</div> 
<div id="container" align="center">
	<img align="center" src="<?php echo 'image.png'; ?>" />  
</div> 
	<p class="footer">INFS7901 Presented By Bernando Purba and Sebastian Orellana</p> 
</body>  
</html>