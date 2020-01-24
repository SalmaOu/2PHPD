<?php
    include "connect_database.php";
    $sql = "SELECT * FROM serie";
	$res = mysqli_query($conn, $sql);

	if($res===false)
	{
		printf("error: %s\n", mysqli_error($conn));
	}

    if ($res->num_rows > 0) {
        // output data of each row
        echo "<h1>Show series</h1>
        <table class=table>
            <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Note</th>
            <th>Created Date</th>
            <th>&nbsp;</th>
                <th>&nbsp;</th>
            <th>&nbsp;</th>
            </tr>";   

         while($page = $res->fetch_assoc()){
       
            echo "<tr><td>" . $page['id'] . "</td>
                <td>" . $page['title'] ."</td>
                <td>" . $page['author']. "</td>
                <td>" . $page['note']. "</td>
                <td>" . $page['created_date']. "</td>
                <td><input type=submit class=btn btn-primary onclick=location.href='update.php?id=". $page['id'] ."' value=Edit></td>
                <td><input type=submit class=btn btn-primary onclick=location.href='delete.php?id=". $page['id'] ."' value=Delete></td></tr>";
        
         }
         echo "</table>";
    } 
    
    else {
        echo "0 results";
    }
?>
