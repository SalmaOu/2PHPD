<?php

require_once "connect_database.php"; 

    $select_series = "SELECT * FROM series_table";
    
    if($stmt = $mysqli->prepare($select_series))
    {
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows > 0){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id = $row["id"];
                $title = $row["title"];
                $author = $row["author"];
                $note = $row["note"];
                $date = $row["created_date"];

                echo "<br/><br/>";

                echo "<table class='table table-dark'>";//start table
 
                //creating our table heading
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Title</th>";
                    echo "<th>Author</th>";
                    echo "<th>Note</th>";
                    echo "<th>Created Date</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
                     
                    // creating new table row per record
                    echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$title}</td>";
                        echo "<td>{$author}</td>";
                        echo "<td>{$note}/5</td>";
                        echo "<td>{$date}</td>";
                        echo "<td>";
                             
                            // we will use this links on next part of this post
                            echo "<a href='update_series.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a>";
                 
                            // we will use this links on next part of this post
                            echo "<a href='delete_series.php?id={$id}' class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                    echo "</tr>";

                   // end table
                echo "</table>";
            }
         

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! No records found.";
        }
         
    // Close statement
    $stmt->close();
    
    // Close connection
    $mysqli->close();

?>
