<?php
	include "connect_database.php";
	if (isset($_POST['submit'])) {
		$titre = $_POST['Titre'];
		$Auteur = $_POST['Auteur'];
		$Note = $_POST['Note'];
		$Date = $_POST['Date'];
		
		$sql = "UPDATE serie SET title ='" . $titre. "', author ='".$Auteur . "', note ='".$Note."', created_date='" . $Date . "' WHERE id='" . $_GET['id']. "'";
		$res = mysqli_query($conn, $sql);

		if($res===false)
		{
			printf("error: %s\n", mysqli_error($conn));
		}
	}
	header("location:message_update.php");
	mysqli_close($conn);

?>