<?php

    // Q.4 - Form data is processed in the same file as the form itself

    include("TP2.php");

   // Q.2 -Checking 
    if(!empty($_POST['surname']) && !empty($_POST["first_name"]) && !empty($_POST["email"]) && !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["zipcode"]))
    {
        $surname = $_POST["surname"];
        $first_name = $_POST["first_name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $zip = $_POST["zipcode"];

        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Surname</th>";
                    
                    echo "<th>First name</th>";
                
                    echo "<th>Email address</th>";
                
                    echo "<th>City</th>";
                    
                    echo "<th>Postal Code</th>";
                
                echo "</tr>";
            echo "</thead>";
            
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$surname."</td>"; 
                    echo "<td>".$first_name."</td>"; 
                    echo "<td>".$email."</td>";
                    echo "<td>".$city."</td>"; 
                    echo "<td>".$zip."</td>";
                echo "</tr>";
            echo "</tbody>";

        echo "</table>";
        
    }
    // Q.3 - Displaying an alert
    else{
        echo '<script type="text/javascript">
              alert("Vous avez oublié de remplir un ou plusieurs champs");
              </script>';
    }
       



?>

