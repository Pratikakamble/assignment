<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
<div class="col-md-8 m-auto">
	<h3 class="text-center">Assignment 2</h3>
	<form action="" method="post">
		<div class="form-group">
			<label>No of breads</label>
			<input type="text" name="breads" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
			<label>No of Vadas</label>
			<input type="text" name="vadas" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
			<label>No of Samosas</label>
			<input type="text" name="samosas" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
			<label>Price of Vada Pav</label>
			<input type="text" name="vadapav_price" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
			<label>Price of Samosapav</label>
			<input type="text" name="samosapav_price" class="form-control" required autocomplete="off">
		</div>
		
		<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success" >
		</div>
	</form>

		<?php
			if(isset($_POST['submit']))
			{
			$num_breads=$_POST['breads'];
			$num_vada=$_POST['vadas'];
			$num_samosa=$_POST['samosas'];
			$price_vadapav=$_POST['vadapav_price'];
			$price_samosapav=$_POST['samosapav_price'];
			$profit=($price_vadapav*$num_vada + $price_samosapav*$num_samosa)-10;
			echo "Maximum Profit ".$profit." Rs";
			}
		?>
</div>
</div>
</body>
</html>