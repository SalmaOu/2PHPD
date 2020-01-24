<?php require_once "connect_database.php"; ?>

<?php
    if (isset($_POST['submit'])) {
		$id = $_GET['id'];
        $title = $_POST['title'];

        $author = $_POST['author'];
        $note = $_POST['note'];
        $created_date = $_POST['created_date'];


		$sql = "UPDATE pages SET ";
		$sql .= "title='" . $title . "', ";
		$sql .= "author='" . $author . "', ";
		$sql .= "note='" . $note . "', ";
		$sql .= "created_date='" . $created_date . "' ";
		$sql .= "WHERE id='" . $id . "' ";

        $res = mysqli_query($db, $sql);


        if($res===false)
        {
            printf("error: %s\n", mysqli_error($db));
        }
    }
	header("location:message_update.php");

?>


