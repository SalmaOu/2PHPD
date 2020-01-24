<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DAY 3 - Practice</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php 
            if(isset($_GET['Message']))
            {
                echo "<div class='alert alert-danger fade in'>
                        <p></p>".$_GET['Message']."</div>";
            }
        ?>
    <!-- Q. 1 - Create a form -->
    <div class="container">
     <form name="form" action="insert_series.php" method="POST">
        <h1 style="text-align:center;">CRUD SERIES</h1>
            <h3>In this App, you can create, read, update and delete series.</h3>
            <div style="align-items: center;">
                <div class="form-group">
                    <label>Enter the title : </label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label>Enter the author : </label>
                    <input type="text" class="form-control" name="author" id="author" required>
                </div>
                <div class="form-group">
                    <label>Enter the note : </label>
                    <input type="text" class="form-control" name="note" id="note" required>
                </div>
                <div class="form-group">
                    <label>Enter the created date : </label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <button type="submit" class="btn btn-primary">ADD THE SERIE</button>
            </div>
    </form> 
    </div>


    <div class="container">
        <?php 
            include "display_series.php";
        ?>
    </div>
    <!-- Q.2 Table of added series with edit and delete columns 
   
    <div class="container">
           <h1 style="text-align:center;">CRUD SERIES</h1>
               <h3 style="text-align: center;">List of added series.</h3>
                <div style="align-items: center;">
                        <table class="table" style="text-align: center;">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Note</th>
                                    <th>Created date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                              
                                </tr>
                            </tbody>
                        </table>
                </div>
       </div> -->

    </body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
