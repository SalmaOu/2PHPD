<?php require_once('select_series.php'); ?>

<?php  
	if(!isset($_GET['id'])) {
		redirect_to(url_for('index.php'));
	}
	$id = $_GET['id'];
	$page = select_by_id($id);

	$title = $page['title'];
	$author = $page['author'];
    $note = $page['note'];
    $created_date = $page['created_date'];

	$sql = "DELETE FROM pages ";
	$sql .= "WHERE id='" . $id . "' ";

	echo $sql;
	$res = mysqli_query($db, $sql);

	if($res===false)
    {
       printf("error: %s\n", mysqli_error($db));
    }

	header("location:message_delete.php");
?>

