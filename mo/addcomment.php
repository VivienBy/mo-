<?php
	 require "connect.php";
	 include "index.php";
	 date_default_timezone_set('Etc/GMT-3');
	$date = date('d/m/Y h:i:s a', time());
	$message = $_POST["message"];

	$sql ="INSERT INTO comment (date,message) VALUES ( '$date', '$message')";
	$query = $mysqli ->prepare($sql);
	$query-> execute ();
	header("Location: index2.php");
	
	
	
?>
