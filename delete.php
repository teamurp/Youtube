<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = {$_GET['id']}");
	$string = $query->fetch_assoc();
	mysqli_query($con, "DELETE videos, users FROM videos INNER JOIN users ON videos.user_id = users.id WHERE users.id = {$string["id"]}");
	header("Location: index.php");
 ?>