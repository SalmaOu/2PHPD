

<?php require_once "bootstrap.php"; ?>
<?php $page_title = 'Show Client'; ?>


<!DOCTYPE html>
<html>
	<body>
		<h1>New book</h1>
		<form action="insert_series.php" method="post">
		  <div class="row col-md-6">
			<div class="col">
			  <label>Title</label>
			  <input type="text" name="title" class="form-control" placeholder="Title">
			</div>

			<div class="col">
			  <label>Author</label>
			  <input type="text" name="author" class="form-control" placeholder="Author">
			</div>
		  </div>

		  <div class="form-group col-md-6">
			<label for="note">Note</label>
			<textarea class="form-control" rows="3" name="note"></textarea>
		  </div>

		  <div class="form-group col-md-6">
		  	<label for="note">Created Date</label>
			<input class="form-control" type="date" value="2011-08-19" name="created_date">
		  </div>
			  
		  <button class="btn btn-primary col-md-6" type="submit" name="submit">Submit form</button>


		</form>
	</body>
</html>

<?php require_once('show_series.php'); ?>

