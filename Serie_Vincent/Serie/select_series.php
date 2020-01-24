<?php require_once('functions.php'); ?>
<?php require_once('connect_database.php'); ?>


<?php 

	function select_all_serie(){
		global $db;

		$sql = "SELECT * FROM pages ";
		$sql .= "ORDER BY id ASC";

		$result = mysqli_query($db, $sql);

		return $result;
	}

	function select_by_id($id) {
		global $db;

		$sql = "SELECT * FROM pages ";
		$sql .= "WHERE id='" . $id . "'";


		$result = mysqli_query($db, $sql);
		confirm_result_set($result);
		$subject = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $subject; // returns an assoc. array
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }




?>