<?php
session_start();
try {

	require_once '..\PTHsite\database\database.php';
} catch (Exception $ex) {
	$error_message = $e->getMessage();
	echo $error_message;
}
$query = 'SELECT * FROM employee
                       ORDER BY employeeID';
$statement = $db->prepare($query);
$statement->execute();
$employees = $statement->fetchAll();
$statement->closeCursor();

?>

<html lang="en">

<head>
	<title>Potters Tea House</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name=viewport>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style>
		table,
		th,
		td {
			border-right: 1px dotted white;
			border-left: 1px solid white;
			border-bottom: 1px solid white;

		}

		body {
			background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
			font-family: 'Raleway', sans-serif;
			color: #FFFFFF;
		}
	</style>
</head>

<body id="top1">
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.html">&#127968;Home</a>
		<a href="emp.php">&#9967;Employee</a>
	</div>

	<div id="top1" class="sticky" style="clear: both">
		<br/>
		<h1 style="float: left;font-weight:bold;"><span onclick="openNav()">&nbsp;&#9776;</span>&emsp; Potter's Tea
			House &emsp; &emsp;</h1>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="social">
		<br/>
		<br/>
		&emsp;&emsp;&emsp;<a id="instagram" target="_blank" title="follow me on instagram" href="https://www.instagram.com/pottersteahouse/"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0> Instagram</a>&emsp;<a href="https://www.facebook.com/PottersTeaHouse"><i style="font-size:34px" class="fa">&#xf082;</i>acebook</a>
		<br/>
		<br/>
	</div>
	<table id="employees" style="font-size: 20px">

		<tr>
			<th>Employee Id</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
		<?php foreach ($employees as $employee) : ?>
			<tr>
				<td><?php echo $employee['employeeID']; ?></td>
				<td><?php echo $employee['firstName']; ?></td>
				<td><?php echo $employee['lastName']; ?></td>

				<!--buttons to show and hide returned table-->
			</tr>
		<?php endforeach ?>
	</table>
</body>

</html>