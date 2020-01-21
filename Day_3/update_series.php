<!DOCTYPE HTML>
<html>
<head>
    <title>Update a Serie</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         
</head>
<body>

        <?php
             // get passed parameter value, in this case, the record ID
            // isset() is a PHP function used to verify if a value is there or not
            $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

            //include database connection
            require_once 'connect_database.php';
            
            // read current record's data
            try {
                // prepare select query
                $query = "SELECT title, author, note, created_date FROM series_table WHERE id = ?";

                if($stmt = $mysqli->prepare( $query ))
                {
                    // this is the first question mark
                    $stmt->bind_param("i", $id);
                    
                    // execute our query
                    if($stmt->execute())
                    {
                        $result = $stmt->get_result();
                        // store retrieved row to a variable
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        
                        // values to fill up our form
                        $title = $row['title'];
                        $author = $row['author'];
                        $note = $row['note'];
                        $date = $row['created_date'];
                    }else{
                        echo "Something went wrong. Please try again later.";
                    }
                    
                    
                } // Close statement
                $stmt->close();
            
            }

            // show errors
            catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
            }
     
        ?>
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
        <h1 style="text-align:center;">Update Product</h1>
        </div>
        <!--we have our html form here where new record information can be updated-->
        <form action="update_with_id.php?id=<?php echo $id ?>"   method="POST">
    
                <div style="align-items: center;">
                    <div class="form-group">
                        <label>Enter the title : </label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>" >
                    </div>
                    <div class="form-group">
                        <label>Enter the author : </label>
                        <input type="text" class="form-control" name="author" id="author" value="<?php echo $author ?>" >
                    </div>
                    <div class="form-group">
                        <label>Enter the note : </label>
                        <input type="text" class="form-control" name="note" id="note" value="<?php echo $note ?>" >
                    </div>
                    <div class="form-group">
                        <label>Enter the created date : </label>
                        <input type="date" class="form-control" name="date" id="date" value="<?php echo $date ?>" >
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE THE SERIE</button>
                </div>
        </form>
        
    </div> <!-- end .container -->
     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>