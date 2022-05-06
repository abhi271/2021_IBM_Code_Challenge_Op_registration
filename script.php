<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
  <style type="text/css">

  #box{

    background-color: lightblue;
    margin: auto;
    width: 500px;
    padding: 30px;
  }

  </style>

  <div id="box">


	<h1>APPOINTMENT DETAILS</h1>

	<br>
	District - <?php echo $district['district']; ?>
  <br>
  Hospital - <?php echo $hospital['hospital']; ?>
  <br>
  Specialisation - <?php echo $specialisation['specialisation']; ?>
  </div>

</body>
</html>
