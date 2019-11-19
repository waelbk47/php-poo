<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
<title>accueil</title>
</head>

<body class="container" style="background-color: grey">
	<h1 style="text-align: center">liste des client</h1>
		<div>
	<form action="createoop.php">
<button type="submit" class="btn btn-dark" >ADD</button>
		</form>
		</div>
	<div>
	<table class="table table-dark">
		<thead>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail adress</th>
		<th>phone number</th>
		<th colspan="2" style="text-align: center"> operations</th>
	</tr>
		</thead>
		<tbody>
	<?php 
			include 'classes/db.Select.Class.php';
			$cli= new Client ;
			$listcli= $cli->readAllClients();
			while ($data = $listcli->fetch()){
					
				?>
					<tr>	
	<td><?=$data['Id']?></td>	
	<td><?=$data['First_Name']?></td>	
	<td><?=$data['Last_Name']?></td>		
	<td><?=$data['Email']?></td>		
	<td><?=$data['Phone_Number']?></td>		
    <?php echo '<td><a href="deleteoop.php?id='.$data['Id'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';?>	
						
			</tr>
			<?php } ?>
</tbody>
		</table>
	</div>
		</body>
	
</html>