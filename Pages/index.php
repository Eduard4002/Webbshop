<?php 
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../Css/index.css">
        <link rel= "stylesheet" type = "text/css" href = "../Css/prod.css">

        <script src="../popup.js"> </script>
        <script type="text/javascript" src="../reptest.js"></script>

    </head>
    <body>
        <?php include_once "../Extra/navbar.php";
        include_once "../Extra/popup.php"?>
        <main>
        <h1 class="header">Second hand</h1>

            <div class = "gridcont">
                <?php
                        include_once "../Managers/productsManager.php";

                    //Get all products that are second hand
                    //"1"är för alla producter som är secondhand
                    //"0" är för alla producter sominte är secondhand
                    $query = getProducts(1);
                    $userID = isset($_SESSION['USER']) ? $_SESSION['USER'] : null;
                    if($query != null){
                        while($row = mysqli_fetch_assoc($query)){
                            $productID = $row['ID'];
                            $filePath = $row['fileImage'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $info = $row['info'];
                            $stock = $row['stock'];

                            // Split the info parameter into an array of lines
                            $infoLines = explode("\n", $info);
                            echo 
                            "
                                <div id = 'cont' class = 'container'>
                                <img src = '$filePath' class='image'><div class = 'stock'>$stock st</div></img>
                                <hr class = 'line'></hr>
                                <p class = 'prodname'>$name</dp>
                                <div class = 'price'>$price kr</div>
                                
                                <div style = 'margin-bottom: 2rem;'>
                                    <ul id = 'uli' class = 'listpoint'>";
                                        // Create a list point for each line of description
                                        foreach ($infoLines as $line) {
                                            if($line != ""){
                                                echo "<li>$line</li>";
                                            }
                                        }
                                    echo "                      
                                    </ul>
                                </div>
                                    <div class = 'btn'>
                                        <div class = 'btncont'>
                                        <form action = '../Managers/productsManager.php' method='post'>

                                            <button type='submit' name = 'addToCart'"; if(!isset($_SESSION['USER'])) echo "disabled";echo ">BUY</button>
                                            <input type='hidden' name = 'productID' value = '$productID'>
                                            <input type='hidden' name = 'userID' value = '$userID'>

                                        </form>
                                        
                                        </div>
                                    </div>
                                    
                                </div>
                            ";
                        }
                    }
                    if(isset($_GET['login'])){
                        echo "<p class='error'>You need to login before purchasing</p>";
                    }
                
                ?>
            </div>
            <h1 class="header">Första hand</h1>
            <!--Första hand produkter-->
            <div class = "gridcont">
                <?php
                        include_once "../Managers/productsManager.php";

                    //Get all products that are second hand
                    //"1"är för alla producter som är secondhand
                    //"0" är för alla producter som inte är secondhand
                    $query = getProducts(0);
                    $userID = isset($_SESSION['USER']) ? $_SESSION['USER'] : null;
                    if($query != null){
                        while($row = mysqli_fetch_assoc($query)){
                            $productID = $row['ID'];
                            $filePath = $row['fileImage'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $info = $row['info'];
                            $stock = $row['stock'];

                            // Split the info parameter into an array of lines
                            $infoLines = explode("\n", $info);
                            //jobba med koden nedan
                            echo 
                            "
                                <div id = 'cont' class = 'container' class = 'container'>
                                    <img src = '$filePath' class='image'></img>
                                    <hr class = 'line'></hr>
                                    <p class = 'prodname'>$name</dp>
                                    <div class = 'price'>$price kr</div>
                                    
                                    <div style = 'margin-bottom: 2rem;'>
                                        <ul id = 'uli' class = 'listpoint'>";
                                        // Create a list point for each line of description
                                        foreach ($infoLines as $line) {
                                            if($line != ""){
                                                echo "<li>$line</li>";
                                            }
                                        }
                                        echo "   
                                            
                                        </ul>
                                    </div>
                                    <div class = 'btn'>
                                        <div class = 'btncont'>
                                            <form action = '../Managers/productsManager.php' method='post'>
                                                <button type='submit' name = 'addToCart'"; if(!isset($_SESSION['USER'])) echo "disabled";echo ">BUY</button>
                                                <input type='hidden' name = 'productID' value = '$productID'>
                                                <input type='hidden' name = 'userID' value = '$userID'>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                    if(isset($_GET['login'])){
                        echo "<p class='error'>You need to login before purchasing</p>";
                    }
                
                ?>
            </div>
        </main>
        
       
    </body>
</html>