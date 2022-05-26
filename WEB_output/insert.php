<?php 
	require "connection.php";
	
	$p_id = $_POST['id'];
	$p_name = $_POST['name'];
	$p_surname = $_POST['surname'];
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['surname'] = $_POST['surname'];

	mysqli_query ($connection, "INSERT INTO `people` (`id`, `name`, `surname`)
								VALUES (NULL, '$p_name', '$p_surname')");

	header ('Location: ../index.php');

?>
		
