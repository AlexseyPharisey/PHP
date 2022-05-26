<?php 
	require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>	
	<title>FIO People</title>
</head>
<body>
	<form action="/insert.php" method="post">
		<label>
		<input type="text" name="name" placeholder="Введите имя"> Имя
		</label><br>
		<label>
		<input type="text" name="surname" placeholder="Введите фамилию"> Фамилия
		</label><br>
		<button type="submit">Add</button>
		<br></br>
		
		<td><?php			
		 echo 'Привет, '.$_SESSION['name'].' '.$_SESSION['surname'].'!';?>			
		</td>
</body>
</html>