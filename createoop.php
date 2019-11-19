<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>add</title>
	<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container" style="background-color: grey">
	<?php
include 'classes/db.Select.Class.php';
	if(isset($_POST["fna"])){
		$cli= new Client ;
	    $cli->createClient($_POST["fna"],$_POST["lna"],$_POST["fn"],$_POST["em"]);
		header("Location: index.php");
	}
	?>
	<form action="" method="post">
		<div class="form-group">
    <label for="FirstName">First Name:</label>
    <input type="text" class="form-control" name="fna" placeholder="first name here">
        </div>
		<div class="form-group">
    <label for="LastName">Last Name:</label>
    <input type="text" class="form-control" name="lna" placeholder="last name here">
        </div>
		<div class="form-group">
    <label for="Email">Email:</label>
    <input type="email" class="form-control" name="em" placeholder="email here">
        </div>
		<div class="form-group">
    <label for="PhoneNumber">Phone Number:</label>
    <input type="text" class="form-control" name="fn" placeholder="Phone number here">
        </div>
		<button type="submit" class="btn btn-outline-dark">Submit</button>	
		</form>
</body>
</html>