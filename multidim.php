<?php
    /*
        för att skapa ett matrix 
        array(
            array(1, 2, 3),
            array(1, 2, 3)
            array(1, 2, 3)
        );
    */
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
    /*
      för att få utskrift av med taggar med array, adderar man ihop alla delar till en 
      sträng. som "<li>" . $cars[$x][$y]
    */
    for($x = 0; $x < count($cars); $x++){
        echo "<ul>";
        for($y = 0; $y < count($cars[$x]); $y++){
            echo "<li>" . $cars[$x][$y]. "</li>";
        }
        echo "</ul>";
    }


?>