
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>
    <main>
        <?php
            include "Managers/userManager.php";
            echo "";
            //Get all items from cart from the current user
            if(!isset($_SESSION['USER'])){
                echo "<p class='error'>You have to login to view cart</p>";
                echo "<a href='login.php'>Login / sign up page</a>";
                exit;
            }
            echo "<a href='login.php'>View products</a>";
            $query = getProductsFromCart($_SESSION['USER']);

            echo "<div class = 'products'>";
            if($query != null){
                while($row = mysqli_fetch_assoc($query)){
                    $productID = $row['ID'];
                    $filePath = $row['fileImage'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $info = $row['info'];
                    
                    echo 
                    "
                        <div class = 'product-child'>
                            <img src= '$filePath'>
                            <h1 class='product-Name'>$name</h1>
                            <h1 class='product-Price'>$price kr</h1>

                        </div>
                    ";
                }
            }
            echo "</div>";
        ?>
    </main>
    
</body>
</html>