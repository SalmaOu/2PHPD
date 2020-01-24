<?php require_once "bootstrap.php"; ?>
<?php require_once('connect_database.php'); ?>
<?php require_once('select_series.php'); ?>
<?php require_once('functions.php'); ?>


<?php  
  $page_set = select_all_serie();
?>

<!DOCTYPE html>
<html>
	<body>
		<h1>Show books</h1>
	
		<table class="table">
		  <tr>
			<th>Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>Note</th>
			<th>Created Date</th>
  			<th>&nbsp;</th>
  			<th>&nbsp;</th>
			<th>&nbsp;</th>
		  </tr>

		   <?php
		   	while($page = $page_set->fetch_assoc()){
		   ?>
        <tr>
			<td><?php echo h($page['id']); ?></td>
			<td><?php echo h($page['title']); ?></td>
			<td><?php echo h($page['author']); ?></td>
    	    <td><?php echo h($page['note']); ?></td>
    	    <td><?php echo h($page['created_date']); ?></td>
			<td><a class="action" href='<?php echo 'update.php?id=' . h(u($page['id'])); ?>' >Edit</a></td>
			<td><a class="action" href='<?php echo 'delete.php?id=' . h(u($page['id'])); ?>'>Delete</a></td>
    		</tr>
		 <?php } ?>


		</table>
		<?php 
			mysqli_close($db);
		?>
	</body>
</html>


