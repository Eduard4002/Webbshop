<?php
include_once "Managers/productsManager.php";


// Get all products
$query = getAllProducts();


    $userID = isset($_SESSION['USER']) ? $_SESSION['USER'] : null;
    if($query != null){
        while($row = mysqli_fetch_assoc($query)){
            $productID = $row['ID'];
            $filePath = $row['fileImage'];
            $name = $row['name'];
            $price = $row['price'];
            $info = $row['info'];
            $stock = $row['stock'];
            //jobba med koden nedan
            echo 
            "
                <div id = 'cont' class = 'container'>
                <img src = '$filePath'><div class = 'stock'>$stock</div></img>
                <hr class = 'line'></hr>
                <p class = 'prodname'>$name</dp>
                <div class = 'price'>$price kr</div>
                
                <div style = 'margin-bottom: 2rem;'>
                    <ul id = 'uli' class = 'listpoint'>
                        <li>$info</li>
                        
                    </ul>
                </div>
                    <div class = 'btn'>
                        <div class = 'btncont'>
                        <input type='checkbox' name='removeProducts[]' value='$productID'>

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
