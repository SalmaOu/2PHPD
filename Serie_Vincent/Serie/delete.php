<?php require_once "bootstrap.php"; ?>
<?php require_once('select_series.php'); ?>



<?php  
	if(!isset($_GET['id'])) {
		redirect_to(url_for('index.php'));
	}
	$id = $_GET['id'];
	$page = select_by_id($id);
?>




<!DOCTYPE html>
<html>
	<body>
		<h1 class="col-md-6">Etes vous sur de vouloir supprimer le livre : "<?php echo $page['title']; ?>"</h1>
		<div class="row col-md-6">
			<div class="col">
				<a type="button" class="btn btn-primary col-md-6" href="index.php">Non</a>
			</div>

			<div class="col">
				<a type="button" class="btn btn-primary col-md-6" href="<?php echo 'delete_using_id.php?id=' . $id; ?>">Oui</a>
			</div>


	</body>
</html>