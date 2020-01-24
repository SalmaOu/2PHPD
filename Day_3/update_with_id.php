<?php

require_once "connect_database.php";

// check if form was submitted
if($_POST){
     
    $id = $_GET['id'];
    try{
     
        // write update query
        // in this case, it seemed like we have so many fields to pass and 
        // it is better to label them and not use question marks
            // Prepare an update statement
            $title = $_POST["title"];
            $author = $_POST["author"];
            $note = $_POST["note"];
            $date = $_POST["date"];

            $update_serie = "UPDATE series_table SET title=?, author=?,  note=?, created_date=? WHERE id=?";
     
            if($stmt = $mysqli->prepare($update_serie)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("ssssi", $title, $author, $note, $date, $id);
                             
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Records updated successfully. Redirect to landing page
                    header("location: updated_successfully.php");
                    exit();
                } else{
                    header("location: error.php");
                }
            }
             
            // Close statement
            $stmt->close();
        
    }
     
    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>