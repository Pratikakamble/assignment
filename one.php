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
	<h3 class="text-center">Assignment 1</h3>
	<form action="" method="post">
		<div class="form-group">
			<label>No of Servers</label>
			<input type="text" name="server" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
		<label>Server load every minute</label>
			<br>1st<input type="text" name="load[]" class="form-control" required autocomplete="off">
			2nd<input type="text" name="load[]" class="form-control" required autocomplete="off">
			3rd<input type="text" name="load[]" class="form-control" required autocomplete="off">
			4th<input type="text" name="load[]" class="form-control" required autocomplete="off">
			5th<input type="text" name="load[]" class="form-control" required autocomplete="off">
		</div>
		<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success" >
		</div>
	</form>

<?php
if(isset($_POST['submit']))
{
$res=0;
for($i=0; $i<count($_POST['load']); $i++)
{
	if($_POST['load'][$i]<50)
	{
		$res=ceil($_POST['server']/2);
		$_POST['server']=$res;
	}
	else if($_POST['load'][$i]>50)
	{
		$res=2*$_POST['server']+1;
		$_POST['server']=$res;
	}
}
echo "After 5 minutes no of servers: ".$_POST['server'];
}
?>
</div>
</div>
</body>
</html>