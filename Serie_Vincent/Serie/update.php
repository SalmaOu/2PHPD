<?php require_once "bootstrap.php"; ?>
<?php $page_title = 'Update book'; ?>
<?php require_once('select_series.php'); ?>
<?php require_once('functions.php'); ?>




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
		<h1>Update book</h1>
		<form action="<?php echo 'update_using_id.php?id=' . h(u($id)); ?>" method="POST">
		  <div class="row col-md-6">
			<div class="col">
			  <label>Title</label>
			  <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo h($page['title'])?>">
			</div>

			<div class="col">
			  <label>Author</label>
			  <input type="text" name="author" class="form-control" placeholder="Author" value="<?php echo h($page['author'])?>">
			</div>
		  </div>

		  <div class="form-group col-md-6">
			<label for="note">Note</label>
			<textarea class="form-control" name="note" rows="3" ><?php echo h($page['note'])?></textarea>
		  </div>

		  <div class="form-group col-md-6">
		  	<label for="note">Created Date</label>
			<input class="form-control" type="date" value="<?php echo h($page['created_date'])?>" name="created_date">
		  </div>
 
		  <button class="btn btn-primary col-md-6" type="submit" name="submit">Update form</button>

		</form>

	</body>
</html>

