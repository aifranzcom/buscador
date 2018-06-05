<?php 
	$host="localhost";
	$user="root";
	$pass="";
	$db="infotec";

	$connect=new mysqli($host, $user, $pass, $db) or die("error" . msqli_errno($connect));
 ?>