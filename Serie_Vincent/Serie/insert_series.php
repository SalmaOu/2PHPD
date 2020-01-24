<?php
    include "connect_database.php";

    if (isset($_POST['submit'])) {

        $title = $_POST['title'];

        $author = $_POST['author'];
        $note = $_POST['note'];
        $created_date = $_POST['created_date'];
        $sql = "INSERT INTO pages (title, author, note, created_date) VALUES ('$title', '$author', '$note', '$created_date')";
        $res = mysqli_query($db, $sql);


        if($res===false)
        {
            printf("error: %s\n", mysqli_error($db));
        }
    }

    require "index.php";


?>