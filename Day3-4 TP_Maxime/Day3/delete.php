<?php
	include "connect_database.php";	
	$sql = "DELETE FROM serie WHERE id='" . $_GET['id']. "'";
	$res = mysqli_query($conn, $sql);
	if($res===false)
		{
			printf("error: %s\n", mysqli_error($conn));
		}
	
	header("location:message_delete.php");
	mysqli_close($conn);
?>