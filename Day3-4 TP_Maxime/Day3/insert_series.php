<?php
	include "connect_database.php";
	if (isset($_POST['submit'])) {
		$titre = $_POST['Titre'];
		$Auteur = $_POST['Auteur'];
		$Note = $_POST['Note'];
		$Date = $_POST['Date'];
		echo $titre;
		$sql = "INSERT INTO serie (title, author, note, created_date) VALUES ('$titre', '$Auteur', '$Note', '$Date')";
		$res = mysqli_query($conn, $sql);

		if($res===false)
		{
			printf("error: %s\n", mysqli_error($conn));
		}
		header("location: index.php");
	}
	
	mysqli_close($conn);
	
?>
