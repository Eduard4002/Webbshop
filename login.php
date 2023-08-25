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

</style>
</head>
<body>
    <h1>Sign up</h1>
    <form  action="Managers/userManager.php" method="post">

        <label for="firstName" required>Full Name: </label><input type="text" name="firstName" placeholder="First Name"><input type="text" name="lastName" placeholder="Last Name"><br>
        <label for="email" required>Email: </label><p><input type="email" name="email"></p>
        <label for="userName" required>Username: </label><p><input type="text" name="userName" placeholder="Username"></p>
        <label for="password" required>Password: </label><p><input type="password" name="passw" placeholder="Password"></p>
        
        <button type="submit" class="submit" name="signUp">Sign up</button>
        

    </form>
    <h1>Login</h1>
    <form  action="Managers/userManager.php" method="POST">
        <label for="userName"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="userName" required>
        <label for="passw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="passw" required>
        <button type="submit" class="submit" name="logIn">Login</button>
    </form>

    <h1>All Products</h1>
    <div class = "products">
        <?php
        include "Managers/productsManager.php";
        //Get all products that are second hand
        $query = getProducts(1);

        if($query != null){
            while($row = mysqli_fetch_assoc($query)){
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
                        
                    </div>
                ";
            }
        }
        //Get all products that are not second hand
        $query = getProducts(0);

        if($query != null){
            while($row = mysqli_fetch_assoc($query)){
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
                        
                    </div>
                ";
            }
        }
        ?>
    </div>
    <?php
        if(isset($_GET["userExists"])){
            echo "<p style='color:red;'>Username already exists, please try another one</p>";
        }else if(isset($_GET["invalidLog"])){
            echo "<p style='color:red;'>Invalid login</p>";
        }else if(isset($_GET["Logged"])){
            echo "<p style='color:green;'>You are logged in</p>";
        }
    ?>  
</body>
</html>