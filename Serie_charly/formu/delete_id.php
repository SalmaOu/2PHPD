<?php

include ("connect_database.php");

$get = $_GET["id"];
$sql= "DELETE FROM series WHERE ID='$get'";

$result = mysqli_query($connection, $sql);

if( false == $result){
     printf ("error: %s\n", mysqli_error($connection)); 
}
mysqli_close($connection);

?>