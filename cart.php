<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="index.css">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>
    <script src="popup.js"> </script>

    <nav>
        <div class="icons">
            <ul class="navbar-links">

                <!--SVG logo https://looka.com/editor/144986791-->
                <div class="logo">
                    <svg viewBox="0 0 317.52168831116904 216" class="css-1j8o68f"><defs id="SvgjsDefs3831"><linearGradient id="SvgjsLinearGradient3838"><stop id="SvgjsStop3839" stop-color="#8f5e25" offset="0"></stop><stop id="SvgjsStop3840" stop-color="#fbf4a1" offset="0.5"></stop><stop id="SvgjsStop3841" stop-color="#8f5e25" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient3842"><stop id="SvgjsStop3843" stop-color="#8f5e25" offset="0"></stop><stop id="SvgjsStop3844" stop-color="#fbf4a1" offset="0.5"></stop><stop id="SvgjsStop3845" stop-color="#8f5e25" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient3846"><stop id="SvgjsStop3847" stop-color="#8f5e25" offset="0"></stop><stop id="SvgjsStop3848" stop-color="#fbf4a1" offset="0.5"></stop><stop id="SvgjsStop3849" stop-color="#8f5e25" offset="1"></stop></linearGradient></defs><g id="SvgjsG3832" featurekey="rootContainer" transform="matrix(1,0,0,1,0,0)" fill="url(#SvgjsLinearGradient3838)"><path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" d="M5,65 L159,0 L313, 65 L159, 10 z M5,136 L159,216 L313,131 L159, 206 z"></path></g><g id="SvgjsG3833" featurekey="nameLeftFeature-0" transform="matrix(2.305475256505689,0,0,2.305475256505689,0.0000010993362696197935,79.33717583932491)" fill="url(#SvgjsLinearGradient3842)"><path d="M0.6 4.880000000000001 l7.28 0 c2.48 0.02 4.48 2.06 4.48 4.54 c0 2.32 -1.78 4.24 -4.04 4.48 l3.62 3.6 c0.54 0.54 0.54 1.54 0 2.08 s-1.48 0.58 -2.04 0.02 c-0.52 -0.54 -2.52 -2.52 -2.52 -2.52 c-0.24 -0.24 -0.24 -0.62 0 -0.86 s0.62 -0.24 0.86 0 l2.48 2.48 c0.1 0.1 0.26 0.12 0.36 0.02 s0.12 -0.24 0 -0.36 l-4.64 -4.62 c-0.12 -0.12 -0.18 -0.26 -0.18 -0.42 c0 -0.34 0.28 -0.62 0.62 -0.62 l0.96 0 c1.82 0 3.32 -1.48 3.32 -3.3 s-1.5 -3.3 -3.32 -3.3 l-6.62 0 l0 3.3 c0 0.34 -0.28 0.6 -0.62 0.6 s-0.6 -0.26 -0.6 -0.6 l0 -3.92 c0 -0.32 0.26 -0.6 0.6 -0.6 z M7.86 6.6 c1.54 0 2.8 1.26 2.8 2.8 s-1.26 2.78 -2.8 2.78 l-3.34 0 c-1.82 0 -3.3 1.48 -3.3 3.3 l0 3.92 c0 0.32 -0.28 0.6 -0.62 0.6 s-0.6 -0.28 -0.6 -0.6 l0 -3.92 c0 -2.5 2.02 -4.52 4.52 -4.52 l3.34 0 c0.88 0 1.58 -0.7 1.58 -1.56 c0 -0.88 -0.7 -1.58 -1.58 -1.58 c-0.34 0 -0.6 -0.26 -0.6 -0.6 s0.26 -0.62 0.6 -0.62 z M17.46 4.880000000000001 l7.42 0 c0.8 0 1.46 0.66 1.46 1.46 s-0.62 1.48 -1.42 1.48 l-7.46 0 c-0.3 0 -0.56 0.24 -0.56 0.56 c0 0.3 0.26 0.56 0.56 0.56 c0.34 0 0.62 0.26 0.62 0.6 s-0.28 0.62 -0.62 0.62 c-0.98 0 -1.76 -0.8 -1.76 -1.78 s0.78 -1.78 1.76 -1.78 l7.42 0 c0.14 0 0.24 -0.12 0.24 -0.26 s-0.1 -0.24 -0.24 -0.24 l-7.42 0 c-1.26 0 -2.28 1.02 -2.28 2.28 s1.02 2.28 2.28 2.28 l5.38 0 c0.98 0 1.78 0.8 1.78 1.8 c0 0.98 -0.8 1.76 -1.78 1.76 l-5.38 0 c-1.26 0 -2.28 1.02 -2.28 2.28 s1.02 2.28 2.28 2.28 l8.26 0 c0.34 0 0.62 0.28 0.62 0.62 s-0.28 0.6 -0.62 0.6 l-8.26 0 c-1.94 0 -3.5 -1.56 -3.5 -3.5 c0 -1.92 1.56 -3.5 3.5 -3.5 l5.38 0 c0.32 0 0.56 -0.24 0.56 -0.54 c0 -0.34 -0.24 -0.58 -0.56 -0.58 l-5.38 0 c-1.92 0 -3.5 -1.58 -3.5 -3.5 c0 -1.94 1.58 -3.5 3.5 -3.5 z M17.46 14.74 l5.38 0 c0.34 0 0.62 0.26 0.62 0.6 s-0.28 0.62 -0.62 0.62 l-5.38 0 c-0.3 0 -0.56 0.24 -0.56 0.54 c0 0.32 0.26 0.56 0.56 0.56 c0.34 0 0.6 0.28 0.6 0.62 c0 0.32 -0.26 0.6 -0.6 0.6 c-0.98 0 -1.78 -0.8 -1.78 -1.78 s0.8 -1.76 1.78 -1.76 z M28.540000000000003 4.880000000000001 l12.86 0 c0.32 0 0.6 0.28 0.6 0.6 c0 0.34 -0.28 0.62 -0.6 0.62 l-12.86 0 c-0.32 0 -0.6 -0.28 -0.6 -0.62 c0 -0.32 0.28 -0.6 0.6 -0.6 z M28.540000000000003 6.6 l4.4 0 c0.98 0 1.78 0.8 1.78 1.78 l0 11.02 c0 0.32 -0.28 0.6 -0.62 0.6 c-0.32 0 -0.6 -0.28 -0.6 -0.6 l0 -11.02 c0 -0.3 -0.26 -0.56 -0.56 -0.56 l-4.4 0 c-0.32 0 -0.6 -0.26 -0.6 -0.6 s0.28 -0.62 0.6 -0.62 z M37 6.6 l4.4 0 c0.32 0 0.6 0.28 0.6 0.62 s-0.28 0.6 -0.6 0.6 l-4.4 0 c-0.3 0 -0.56 0.26 -0.56 0.56 l0 11.02 c0 0.32 -0.26 0.6 -0.6 0.6 s-0.62 -0.28 -0.62 -0.6 l0 -11.02 c0 -0.98 0.8 -1.78 1.78 -1.78 z M44.2 4.880000000000001 l7.28 0 c2.48 0.02 4.48 2.06 4.48 4.54 c0 2.32 -1.78 4.24 -4.04 4.48 l3.62 3.6 c0.54 0.54 0.54 1.54 0 2.08 s-1.48 0.58 -2.04 0.02 c-0.52 -0.54 -2.52 -2.52 -2.52 -2.52 c-0.24 -0.24 -0.24 -0.62 0 -0.86 s0.62 -0.24 0.86 0 l2.48 2.48 c0.1 0.1 0.26 0.12 0.36 0.02 s0.12 -0.24 0 -0.36 l-4.64 -4.62 c-0.12 -0.12 -0.18 -0.26 -0.18 -0.42 c0 -0.34 0.28 -0.62 0.62 -0.62 l0.96 0 c1.82 0 3.32 -1.48 3.32 -3.3 s-1.5 -3.3 -3.32 -3.3 l-6.62 0 l0 3.3 c0 0.34 -0.28 0.6 -0.62 0.6 s-0.6 -0.26 -0.6 -0.6 l0 -3.92 c0 -0.32 0.26 -0.6 0.6 -0.6 z M51.46 6.6 c1.54 0 2.8 1.26 2.8 2.8 s-1.26 2.78 -2.8 2.78 l-3.34 0 c-1.82 0 -3.3 1.48 -3.3 3.3 l0 3.92 c0 0.32 -0.28 0.6 -0.62 0.6 s-0.6 -0.28 -0.6 -0.6 l0 -3.92 c0 -2.5 2.02 -4.52 4.52 -4.52 l3.34 0 c0.88 0 1.58 -0.7 1.58 -1.56 c0 -0.88 -0.7 -1.58 -1.58 -1.58 c-0.34 0 -0.6 -0.26 -0.6 -0.6 s0.26 -0.62 0.6 -0.62 z M65.28 6.380000000000001 c1.62 0 3.14 0.62 4.28 1.76 c1.14 1.16 1.76 2.68 1.76 4.3 c0 0.32 -0.26 0.6 -0.6 0.6 c-0.32 0 -0.6 -0.28 -0.6 -0.6 c0 -1.3 -0.5 -2.52 -1.42 -3.44 c-0.92 -0.9 -2.14 -1.42 -3.42 -1.42 c-1.3 0 -2.52 0.52 -3.44 1.42 c-0.92 0.92 -1.42 2.14 -1.42 3.44 c0 0.8 -0.66 1.48 -1.48 1.48 s-1.48 -0.68 -1.48 -1.48 c0 -2.1 0.82 -4.06 2.28 -5.52 c3.06 -3.06 8 -3.06 11.06 0 c1.48 1.46 2.28 3.42 2.28 5.52 c0 2.08 -0.8 4.04 -2.28 5.52 s-3.44 2.28 -5.52 2.28 c-0.34 0 -0.62 -0.26 -0.62 -0.6 s0.28 -0.6 0.62 -0.6 c1.76 0 3.42 -0.7 4.66 -1.94 s1.94 -2.9 1.94 -4.66 s-0.7 -3.42 -1.94 -4.68 c-2.58 -2.56 -6.76 -2.56 -9.34 0 c-1.24 1.26 -1.92 2.92 -1.92 4.68 c0 0.18 0.1 0.3 0.28 0.3 c0.16 0 0.26 -0.1 0.26 -0.3 c0 -1.62 0.62 -3.14 1.76 -4.3 c1.14 -1.14 2.68 -1.76 4.3 -1.76 z"></path></g><g id="SvgjsG3834" featurekey="nameRightFeature-0" transform="matrix(2.795030410208696,0,0,2.795030410208696,170.11180377533512,70.09938646472864)" fill="url(#SvgjsLinearGradient3846)"><path d="M9.64 20 c-0.14 0 -0.24 -0.12 -0.24 -0.26 l0 -9.44 l-2.74 0 c-0.14 0 -0.26 -0.1 -0.26 -0.24 l0 -2.3 c0 -0.14 0.12 -0.26 0.26 -0.26 l8.58 0 c0.16 0 0.26 0.12 0.26 0.26 l0 2.3 c0 0.14 -0.1 0.24 -0.26 0.24 l-2.74 0 l0 9.44 c0 0.14 -0.12 0.26 -0.26 0.26 l-2.6 0 z M17.5 20 l0 -11.98 c0 -0.5 0.1 -0.6 0.26 -0.6 l8.76 0 c0.14 0 0.26 0.1 0.26 0.24 l0 2.26 c0 0.14 -0.12 0.26 -0.26 0.26 l-5.92 0 l0 2.08 l3.74 0 c0.14 0 0.26 0.12 0.26 0.26 l0 2.24 c0 0.14 -0.12 0.26 -0.26 0.26 l-3.74 0 l0 2.14 l5.9 0 c0.14 0 0.26 0.12 0.26 0.26 l0 2.24 c0 0.14 -0.12 0.26 -0.26 0.26 l-8.74 0 c-0.16 0 -0.26 -0.12 -0.26 0.08 z M35.08 20 c-1.18 0 -2.26 -0.28 -3.22 -0.84 c-0.96 -0.58 -1.72 -1.36 -2.26 -2.34 s-0.82 -2.08 -0.82 -3.3 c0 -1.18 0.28 -2.28 0.84 -3.26 c0.56 -0.96 1.34 -1.74 2.3 -2.3 c0.98 -0.56 2.08 -0.84 3.24 -0.84 c0.88 0 1.74 0.2 2.58 0.56 c0.84 0.38 1.56 0.88 2.16 1.52 c0.08 0.1 0.08 0.24 0 0.34 l-1.9 1.56 c-0.06 0.06 -0.12 0.1 -0.2 0.1 s-0.16 -0.04 -0.2 -0.1 c-1.02 -1.24 -2.66 -1.5 -4.04 -0.64 c-1.2 0.74 -1.64 2.1 -1.58 3.46 c0.06 1.38 1.06 2.56 2.38 2.96 c1.2 0.36 2.38 0.08 3.24 -0.84 c0.06 -0.04 0.12 -0.08 0.2 -0.06 c0.08 0 0.14 0.02 0.18 0.08 l1.94 1.36 c0.08 0.1 0.08 0.24 0 0.34 c-0.64 0.68 -1.4 1.24 -2.24 1.64 c-0.86 0.4 -1.74 0.6 -2.6 0.6 z M42.24 20 c-0.14 0 -0.26 -0.12 -0.26 -0.26 l0 -11.98 c0 -0.14 0.12 -0.26 0.26 -0.26 l2.6 0 c0.14 0 0.26 0.12 0.26 0.26 l0 4.92 l4.52 0 l0 -4.92 c0 -0.14 0.12 -0.26 0.26 -0.26 l2.6 0 c0.14 0 0.26 0.12 0.26 0.26 l0 11.98 c0 0.14 -0.12 0.26 -0.26 0.26 l-2.6 0 c-0.14 0 -0.26 -0.12 -0.26 -0.26 l0 -4.3 l-4.52 0 l0 4.3 c0 0.14 -0.12 0.26 -0.26 0.26 l-2.6 0 z"></path></g></svg>
                </div>
                
                <li><a href="index.php"><img width = "42" height = "42" src="Design/Icons/products.svg">Products</a></li>
                <li><a href="contact.php"><img width = "42" height = "42" src="Design/Icons/contact.svg">Customer Service</a></li>
                <li><a href="Design/aboutus.html"><img width = "42" height = "42" src="Design/Icons/about.svg">About us</a></li>
                <li><a onclick="toggleMainPopup()"><img width = "42" height = "42" src="Design/Icons/profile.svg">Profile</a></li>

                <div class="MobilePopup" onclick="MobilePopup()">
                    <div class="Bars">
                    </div>
                    <div class="Bar">
                    </div>
                    <div class="Bar">
                    </div>

                </div>
            </ul>
        </div>
    </nav>
    <div class="MobileNav" id="MobileNav" style="display: none;">
            
            
            <?php
                include_once "Managers/userManager.php";

                if (isset($_SESSION['USER'])){
                    $userName = getUserByID($_SESSION['USER']);
                    echo "<h1> Welcome $userName </h1>";
                    echo "
                    <form action='Managers/userManager.php' method='POST'>
                        <div>
                            <button class='LogOutText' type='submit' name='logOut'> Log Out </button>
                        </div>
                    </form> ";

                } else {
                    echo "
                    <a href='login.php'> Log In </a>
                    <a href='signup.php' > Sign Up </a>
                    ";

                }

            ?>  
        <a href="cart.php"> Shopping Cart </a>
        <a href="index.php"> Products </a>
        <a href="contact.php"> Customer Service </a>
        <a href="Design/aboutus.html"> About Us </a>

    </div>

    <footer id="Footer" class="Footer">
            <div class="left-line">
                <p>Logout</p>
                <p>Terms of Service</p>
                <p>Privacy</p>
            </div>
            <div class="right-line">
                <p>Contact Info</p>
                <li>Number: +46700000000</li>
                <li>Email: retro.tech@example.com</li>
            </div>
        </footer>

        
        <?php include_once "Extra/popup.php"; ?>
    <main>
        <?php
            include_once "Managers/productsManager.php";

            //Get all items from cart from the current user
            if(!isset($_SESSION['USER'])){
                echo "
                <div class='errorSec'>
                    <p class='error-text' id='gridcont'>You have to login to view cart</p>
                    <a href='login.php' class='login' id='gridcont'>Login here</a>
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
                                <form method='post' action = 'Managers/removeProductFromCart.php'>
                                    <input type='hidden' name = 'productID' value = '$productID'>
                                    <input type='hidden' name = 'userID' value = '$userID'>
                                    <input type='image' src='Design/delete-svgrepo-com.svg' >
                                    
                                </form>
                                

                                <div class = 'cartProducts-quantity'>
                                    <form method='post' action = 'Managers/productsManager.php'>
                                        <input type='hidden' name = 'productID' value = '$productID'>
                                        <input type='hidden' name = 'userID' value = '$userID'> 
                                        <button type='submit' name = 'decreaseQuantity'>-</button>
                                
                                    </form>
                                    <h1>$quantity</h1>
                                    <form method='post' action = 'Managers/productsManager.php'>
                                        
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