<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DAY 1 - Practice</title>
    </head>

    <body>

    <?php

        // Q.1
        echo "Question 1 - Select a male person between 31 and 50 years of age";
        echo "<br><br>";
        /*$person = array(
            "name" => array("Test1", "Test2", "NomA", "HZIZA"),
            "age" =>
        );*/

        $age = array(20,24,31,46,17,50,38,32,45, 49);
        $gender = array("Male", "Female", "Other");

        $i = 0;
        $j = 0;

        for($i = 0; $i < sizeof($age); $i++)
        {
            for($j = 0; $j < sizeof($gender); $j++)
            {
                if($age[$i] >= 31 && $age[$i] <= 50 && $gender[$j] == "Male")
                {
                    echo "Welcome, you are a " .$gender[$j]. " who is " .$age[$i]. " years old";
                    echo "<br>";
                }
            }
        }

        // Q.2

        echo "<br><br><br>";
        echo "Question 2 - Check if the values have letters from A to Z";
        echo "<br><br>";

        $table_of_names = array("jais293apz", "k12213sazuizd", "dja32131zi", "dhz2213aioldh");

        //on parcoure le tableau $name
        for($i = 0; $i < sizeof($table_of_names); $i++)
        {
            //on convertit la chaine en un tableau
            $from_string_to_array = str_split($table_of_names[$i]);

            //on parcoure chaque lettre 
            for($j = 0; $j<sizeof($from_string_to_array); $j++)
            {
                //et on vérifie si on a des lettres de A à Z 
                if(preg_match("/^[a-zA-Z]$/", $from_string_to_array[$j]))
                {
                    echo "Valeurs : " .$table_of_names[$i]. " et son indice : " . $j;
                    echo "<br>";
                }
            }
            
            echo "<br>";
        }

        // Q.3 

        echo "<br><br><br>";
        echo "Question 3 - Car registration";
        echo "<br><br>";

        $car_registration = array("AA", "001", "AA");
/* 
        while($car_registration[0] != "AB" && $car_registration[1] != "004" && $car_registration[2] != "AB")
        {
            $car_registration[0] = $car_registration[0]++;
        } 
*/
     /*  */
        for($i = 0; $i < sizeof($car_registration); $i++)
        {
            $car_registration[$i]++;
           
            if($car_registration[$i] == "AB")
            {
                echo $car_registration[$i];
                
            }
            
            if($car_registration[$i] == "002")
            {
                echo "00".$car_registration[$i];
            }
           
            echo "&nbsp";
        }
             


        // Q.4 

        echo "<br><br><br>";
        echo "Question 4 - Write an associative multi-dimensional array and display it";
        echo "<br><br>";

        $person = array();

        $person["Oussous"] = array(
            "First_name" => "Salma",
            "City_of_residence" => "Nantes",
            "Age" => 21
        );

        print_r($person);

        // Q.5 
        echo "<br><br><br>";
        echo "Question 5 - PHP function that displays an alert box";
        echo "<br><br>";

        function send_alert_message($alert_message)
        {
            echo '<script type="text/javascript">
             alert("'.$alert_message.'")
              </script>';
            return true;
        }
       
        
        send_alert_message('Message d\'erreur');


        // Q.6 
        echo "<br><br><br>";
        echo "Question 6 - Transform a string with different cases so that each word has an initial in uppercase";
        echo "<br><br>";

        $string = "HeLlO wOrLd";

        for($i = 0; $i < strlen($string); $i++)
        {
            //on parcoure la chaine et on convertit tous les caractères en minuscule
            $string[$i] = strtolower($string[$i]);
        }

        for($i = 0; $i < strlen($string); $i++)
        {
            //le premier caractère de la chaine prend une majuscule
            if($i == 0)
            {
                $string[0] = strtoupper($string[0]);
            }

            //si on détecte un espace, on met en majuscule le caractère qui vient après l'espace
            else if(ctype_space($string[$i]) )
            {
                $string[$i+1] = strtoupper($string[$i+1]);
            
            }
        }

        echo $string;

    ?>
   <!--  <form name="form" action="" method="get">
        <label>Veuillez entrer votre age :</label>
        <input type="number" name="age" id="age">
        <label>Veuillez entrer votre sexe :</label>
        <input type="text" name="gender" id="gender">
    </form> -->
    </body>


</html>
