<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'serie_bdd';

		
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	$msg = "Database connection failed: ";
	$msg .= mysqli_connect_error();
	$msg .= " (" . mysqli_connect_errno() . ")";
	exit($msg);
}
?>