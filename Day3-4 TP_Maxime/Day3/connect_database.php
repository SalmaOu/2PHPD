<?php
$dbhost="localhost"; //replace with your hostname

$dbuser = "root"; //replace with your admin username

$dbpass = ""; //password of your admin

$db = "serie";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if ($conn) {
	echo "Connection succeed <br>";
}

else {
	die("Connect failed: %s\n". $conn -> error);
}
?>