<?php

    // On requis le fichier qui permet la connection a la bd

    require_once "connect_database.php"; 

    $title = $author = $note = $date = "";
    $title_err = $author_err = $note_err = $date_err = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $note = $_POST["note"];
        $date = $_POST["date"];
        if(!empty($title) && !empty($author) && !empty($note) && !empty($date))
        // On insère dans la table 
        $insert_series = "INSERT INTO series_table (title, author, note, created_date)
            VALUES (?, ?, ?, ?)";
        
        if($stmt = $mysqli->prepare($insert_series)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $title, $author, $note, $date);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
    
        $stmt->close();
    }

    $mysqli->close();

?>

