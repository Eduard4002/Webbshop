<?php
        //en commentar
        #en till kommentar
        /*

        */
        echo "<h1> No way we got php working in html</h1>";
        $x = 5 + 5;
        echo "<p>$x</p>";
        
        /*
            för att skapa funktioner
            
            variablar som är deklarerade utanför funktioner kan inte användas inuti funktion detta kallas global scope
            medan variablar inuti en funktion har en lokal scope
            
            Genom Global så kan variabler som ligge  utanför funktionen nås
            
            echo "", echo() och print skriver ut data på skärmen 
        */

        /*
            olika  datatyper
            String
            Integer
            Float (floating point numbers - also called double)
            Boolean
            Array
            Object
            NULL
            Resource


            för att få datatyp för variabel
            var_dump($x);

            strlen()                            för att få längden på en sträng
            str_word_count("Hello world!");     räknar antalet ord 

            strrev(sträng)                      reversar det som står innuti
            strpos(sträng, strängsök)           hittar sökt sträng i angiven sträng
        */
        function myTest() {
            // using x inside this function will generate an errords
            global $x;
            $var = strlen("hello");
            $var2 = strrev("hello");
            $var3 = strpos("hello", "o");
            echo "<p>Variable x inside function is: $x</p>";
            print "<div>hey there</div>";
            print "<div>$var</div>";
            echo "<div>$var2</div>";
            echo "<div>$var3</div>";

            $subjectVal = "It was nice meeting you. May you shine bright.";
 
            // Using str_replace() function
            //ersätter första trängen nämd i parameter med texten givet i andra parametern i texten som anges it redje parametern
            $resStr = str_replace('you', 'him', $subjectVal);
            echo($resStr);
        }
        mytest(); 
         
?>

