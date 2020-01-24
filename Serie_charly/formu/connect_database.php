<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'formulaire';

$connection = mysqli_connect($host,$user,$password,$database);


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysqli_close($connection);

?>