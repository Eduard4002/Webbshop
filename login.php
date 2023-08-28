<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Test page</title>
<style>
    body{
        margin:0;
        padding:0;
        
    }
    .products{
        display:flex;
        justify-content:space-around;
        
    }
    .product-child{
        border:1px solid black;
        width:fit-content;
        
    }
    .error{
        font-style:bold;
        color:red;
    }

</style>
</head>
<body>
    <?php
    include "Managers/userManager.php";
        if(isset($_SESSION['USER'])){
            $name = getUserByID($_SESSION['USER']);
            //User currently logged in
            echo "
            <h3>You are logged in as $name</h3>
            <form action= 'Managers/userManager.php' method='post'>
                <button type='submit' name = 'logOut'>LOG OUT</button>
            </form'
            ";
        //If we are not logged in
        }else{
            echo 
                "
                <h1>Sign up</h1>
                <form  action='Managers/userManager.php' method='post'>

                    <label for='email' required>Email: </label><p><input type='email' name='email'></p>
                    <label for='userName' required>Username: </label><p><input type='text' name='userName' placeholder='Username'></p>
                    <label for='password' required>Password: </label><p><input type='password' name='passw' placeholder='Password'></p>
                    
                    <button type='submit' class='submit' name='signUp'>Sign up</button>
                '

                </form>
                <h1>Login</h1>
                <form  action='Managers/userManager.php' method='POST'>
                    <label for='userName'><b>Username</b></label>
                    <input type='text' placeholder='Enter Username' name='userName' required>
                    <label for='passw'><b>Password</b></label>
                    <input type='password' placeholder='Enter Password' name='passw' required>
                    <button type='submit' class='submit' name='logIn'>Login</button>
                </form>
                    
            ";
        }
    ?>
    
    <?php
        if(isset($_GET["userExists"])){
            echo "<p class = 'error'>Username already exists, please try another one</p>";
        }else if(isset($_GET["invalidLog"])){
            echo "<p class = 'error'>Invalid login</p>";
        }else if(isset($_GET["noUser"])){
            echo "<p class = 'error'>User not found</p>";
        }
    ?> 
    <h1>All Products</h1>
    <div class = "products">
        <?php
            //Get all products that are second hand
            //"1"är för alla producter som är secondhand
            //"0" är för alla producter sominte är secondhand
            $query = getProducts(1);

            if($query != null){
                while($row = mysqli_fetch_assoc($query)){
                    $productID = $row['ID'];
                    $filePath = 'res/'.$row['fileImage'].'.png';
                    $name = $row['name'];
                    $price = $row['price'];
                    $info = $row['info'];
                    //jobba med koden nedan
                    echo 
                    "
                        <div class = 'product-child'>
                            
                            <h1>$name</h1>
                            <h1>$price</h1>
                            <p>$info</p>
                            <form action= 'Managers/productsManager.php' method='post'>
                                <button type='submit' name = 'addToCart'>BUY</button>
                                <input type='hidden' name = 'productID' value = '$productID'>
                            </form>
                        </div>
                    ";
                }
            }
            if(isset($_GET['login'])){
                echo "<p class='error'>You need to login before purchasing</p>";
            }
        
        ?>
    </div>
    <h1>Your cart</h1>
    <div class="products">
        <?php
            //Get all items from cart from the current user
            if(!isset($_SESSION['USER'])){
                echo "<p class='error'>You have to login to view cart</p>";
                exit;
            }
            $query = getProductsFromCart($_SESSION['USER']);

            if($query != null){
                while($row = mysqli_fetch_assoc($query)){
                    $productID = $row['ID'];
                    $filePath = 'res/'.$row['fileImage'].'.png';
                    $name = $row['name'];
                    $price = $row['price'];
                    $info = $row['info'];
                    
                    echo 
                    "
                        <div class = 'product-child'>
                            <h1>$name</h1>
                            <h1>$price</h1>
                            <p>$info</p>
                            <form action= 'Managers/productsManager.php' method='post'>
                                <button type='submit' name = 'addToCart'>BUY</button>
                                <input type='hidden' name = 'productID' value = '$productID'>
                            </form>
                        </div>
                    ";
                }
            }
        
        ?>
    </div>
    
</body>
</html>