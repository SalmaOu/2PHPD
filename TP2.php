<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DAY 2 - Practice</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
    <!-- Q. 1 - Create a form -->
     <form name="form" action="customer_form.php" method="POST">
        <h1>Customer address</h1>
            <div class="form-group">
                <label>Enter your surname</label>
                <input type="text" class="form-control" name="surname" id="surname">
            </div>
            <div class="form-group">
                <label>Enter your first name</label>
                <input type="text" class="form-control" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label>Enter your email address</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Enter your postal address</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="form-group">
                <label>Enter your city</label>
                <input type="text" class="form-control" name="city" id="city">
            </div>
            <div class="form-group">
                <label>Enter your postcode</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 


    </body>

<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>

</html>
