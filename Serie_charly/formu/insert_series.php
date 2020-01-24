<?php 

include "connect_database.php" ;

 if(!empty($_POST['serie']) && !empty($_POST["auteur"]) && !empty($_POST["date"]))
    {
        $serie = $_POST["serie"];
        $auteur = $_POST["auteur"];
        $date = $_POST["date"];

        $sql = "INSERT INTO series (title,author,create_date) VALUES ('$serie','$auteur','$date')";

        $result = mysqli_query($connection, $sql);

        echo $result;

        if( false == $result){
          printf ("error: %s\n", mysqli_error($connection)); ;
        }
        mysqli_close($connection);
    }


?>