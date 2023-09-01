<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <a class="Back" href="index.php"> ⮜ Go Back </a>
        <div class="container">
            <div class="LogInWindow"> 
                <form action="Managers/userManager.php" method="POST">
                        <label for="LoginUsername"> Username: </label> <br> 
                        <input type="text" id="Username" name = "userName" required> <br>

                        <label for="LoginPassword"> Password: </label> <br>
                        <input type="password" id="Username" name = "passw" required> <br> <br> 
                        <div class="Button-container">
                            <button type="submit" class="Button" name="logIn"> Log In </button>
                        </div>
                </form>
                <p> Don't have an account? </p> <a href="signup.php"> Sign up here </a>

            </div>
        </div>
        <?php
            if (isset($_GET['invalidLog']) && $_GET['invalidLog'] == 1) {
                echo "<h2 style='color: red;'> Wrong Username or Password </h2>";
            }
        ?>
    </body>