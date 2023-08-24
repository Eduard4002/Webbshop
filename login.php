<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Test page</title>
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