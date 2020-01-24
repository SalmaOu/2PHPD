<?php

include ("connect_database.php");

if(!empty($_POST['serie']) && !empty($_POST["auteur"]) && !empty($_POST["date"]))
    {
        $get = $_GET["id"];
        $serie = $_POST["serie"];
        $auteur = $_POST["auteur"];
        $date = $_POST["date"];

        $sql = "UPDATE series SET title='$serie', author='$auteur', create_date='$date' WHERE ID='$get'";

        $result = mysqli_query($connection, $sql);

        if( false == $result){
          printf ("error: %s\n", mysqli_error($connection)); 
            }
    mysqli_close($connection);
    }


?>