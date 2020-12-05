<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	$query = mysqli_query($con, "SELECT * FROM users WHERE password='{$_POST["password"]}' and name='{$_POST["login"]}'");
	$string = $query->fetch_assoc();
	if($query->num_rows==1) header("Location: home.php?id={$string['id']}");
	else header("Location: index.php?error=Неправильное имя пользователя или пароль");
 ?>