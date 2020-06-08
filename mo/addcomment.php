<?php
	 require "connect.php";
//	 include "index.php";
	 date_default_timezone_set('Etc/GMT-3');
	$date = date('Y-m-d', time());
	$message = $_POST["message"];

	$sql = "INSERT INTO comment (date,message,likes) VALUES ( '".$date."', '".$message."', 0)";
	$query = $mysqli ->query($sql);
	header("Location: index2.php?id=" . $_GET["id"]);
?>
