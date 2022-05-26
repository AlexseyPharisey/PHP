<?php
	$connection = mysqli_connect ("localhost", "root", "root", "people");	
	if ($connection -> connect_error) 
	{
		die ("ERROR:" . $connection -> connect_error); //вывод ошибки при отсутствии подключения
	}
   session_start();
   $_SESSION['name'];
   $_SESSION['surname'];
?>