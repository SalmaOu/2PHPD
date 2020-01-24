<?php

    // Q.4 - Form data is processed in the same file as the form itself

    include("index.php");

   // Q.2 -Checking 
    if(!empty($_POST['serie']) && !empty($_POST["auteur"]) && !empty($_POST["note"]) && !empty($_POST["date"]))
    {
        $serie = $_POST["serie"];
        $auteur = $_POST["auteur"];
        $note = $_POST["note"];
        $date = $_POST["date"];

        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Serie</th>";
                    
                    echo "<th>auteur</th>";
                
                    echo "<th>note</th>";
                
                    echo "<th>date</th>";
                                    
                echo "</tr>";
            echo "</thead>";
            
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$serie."</td>"; 
                    echo "<td>".$auteur."</td>"; 
                    echo "<td>".$note."</td>";
                    echo "<td>".$date."</td>"; 
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

