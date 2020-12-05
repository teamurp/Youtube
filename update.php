<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	$query = mysqli_query($con, "SELECT * FROM videos WHERE id = {$_GET['id']}"); 
	$string = $query->fetch_assoc();
	mysqli_query($con, "UPDATE users SET name='{$_GET["name"]}', phone = '{$_GET["phone"]}', email = '{$_GET["email"]}' WHERE id={$string["id"]}");
	header("Location: home.php?id={$string["id"]}");
 ?>