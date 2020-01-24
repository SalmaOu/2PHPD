<?php include ("connect_database.php") ;?>

<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DAY 2 - Practice</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <?php

    $get = $_GET["id"];
    $sql = "SELECT ID, title, author, create_date FROM series WHERE ID=$get";
	$result = mysqli_query($connection, $sql);


    $row = mysqli_fetch_assoc($result);
    
    if ($row['ID'] == $get){
    	$tit = $row["title"];
        echo $tit;
		$aut = $row["author"];
        echo $aut;
		$dat = $row["create_date"];
        echo $dat;
	}

    ?>

    <body>
    <!-- Q. 1 - Create a form -->
     <form name="form" action="update_id.php?id=<?php echo $get ?>" method="POST">
        <h1>Update a serie</h1>
            <div class="form-group">
                <label>Enter a serie</label>
                <input type="text" class="form-control" name="serie" id="serie" value='<?php echo $tit ?>' >
            </div>
            <div class="form-group">
                <label>Auteur</label>
                <input type="text" class="form-control" name="auteur" id="auteur" value='<?php echo $aut ?>'>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" id="date" value='<?php echo $dat ?>'>
            </div>
        <button type="submit" class="btn btn-primary">Update serie</button>
    </form> 

    </body>

<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>

</html>
