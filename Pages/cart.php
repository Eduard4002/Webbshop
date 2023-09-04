<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../Css/index.css">
    <link rel="stylesheet" href="../Css/cart.css">
    <title>Cart</title>
</head>
<body>
    <script src="../popup.js"> </script>

        <?php include_once "../Extra/navbar.php"?>
        <?php include_once "../Extra/popup.php" ?>
    <main>
        <?php
            include_once "../Managers/productsManager.php";

            //Get all items from cart from the current user
            if(!isset($_SESSION['USER'])){
                echo "
                <div class='errorSec'>
                    <p class='error-text'>You have to login to view cart</p>
                    <a href='login.php' class='login'>Login here</a>
                </div>";


                exit;
            }
            $totalPrice = 0; // Initialize total price

            $query = getProductsFromCart($_SESSION['USER']);
            $userID = $_SESSION['USER'];
            if($query != null){
                echo "<div class='mainSec'>";
                echo "<div class = 'cartProducts'>";
                
                while($row = mysqli_fetch_assoc($query)){
                    $productID = $row['ID'];
                    $filePath = $row['fileImage'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];

                    $itemPrice = $row['price'] * $row['quantity'];
                    $totalPrice += $itemPrice;
                    
                    echo 
                    "
                        <div class = 'cartProducts-child'>
                            <img src= '$filePath'>
                            <div class = 'cartProducts-info'>
                                <h1 class='cartProducts-Name'>$name</h1>
                                <h1 class='cartProducts-Price'>$price kr</h1>
                            </div>
                            <div class = 'cartProducts-action'>
                                <form method='post' action = '../Managers/removeProductFromCart.php'>
                                    <input type='hidden' name = 'productID' value = '$productID'>
                                    <input type='hidden' name = 'userID' value = '$userID'>
                                    <input type='image' src='../Design/delete-svgrepo-com.svg' >
                                    
                                </form>
                                

                                <div class = 'cartProducts-quantity'>
                                    <form method='post' action = '../Managers/productsManager.php'>
                                        <input type='hidden' name = 'productID' value = '$productID'>
                                        <input type='hidden' name = 'userID' value = '$userID'> 
                                        <button type='submit' name = 'decreaseQuantity'>-</button>
                                
                                    </form>
                                    <h1>$quantity</h1>
                                    <form method='post' action = '../Managers/productsManager.php'>
                                        
                                        <input type='hidden' name = 'productID' value = '$productID'>
                                        <input type='hidden' name = 'userID' value = '$userID'> 
                                        <button type='submit' name = 'increaseQuantity'"; if(getStock($productID) == 0) echo " disabled class = 'disabled'";echo ">+</button>
                                                                    
                                    </form>
                                </div>
                                
        

                            </div>


                        </div>
                    ";
                }
                
                echo "</div>";
                echo "
                <div class = 'action'>
                    <h1>$totalPrice kr</h1>
                    <form method='post' action = 'cart-form.php'>                
                        <button type='submit' name = 'buy'>Purchase</button>                                          
                    </form>
                </div>";

                echo "</div>";

            }else{
                echo "<p class='empty-cart'>Cart is empty :(</p>";
            }
            
        ?>
        <!--<img src='Design/delete-svgrepo-com.svg'>-->
    </main>
    
</body>
</html>