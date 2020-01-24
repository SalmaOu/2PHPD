<?php

	include ("connect_database.php");

	$sql = "SELECT ID, title, author, create_date FROM series";

	$result = mysqli_query($connection, $sql);

	//echo $result;		echo "<table>";
    echo "<table>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Serie</th>";
                    
                    echo "<th>Auteur</th>";
                
                    echo "<th>Date</th>";

                    echo "<th>Action</th>";
                                    
                echo "</tr>";
        echo "</thead>";

	while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["ID"];
		$tit = $row["title"];
		$aut = $row["author"];
		$dat = $row["create_date"];

            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$id."</td>"; 
                    echo "<td>".$tit."</td>"; 
                    echo "<td>".$aut."</td>"; 
                    echo "<td>".$dat."</td>"; 
                    echo "<td><button type='submit' class='btn btn-primary' onclick=location.href='update.php?id=$id'>Edit</button></td>";
                    echo "<td><button type='submit' class='btn btn-primary' onclick=location.href='delete.php?id=$id'>Delete</button></td>";
                echo "</tr>";
            echo "</tbody>";
	}
    echo "</table>";

	mysqli_free_result($result);

	mysqli_close($connection);
?>