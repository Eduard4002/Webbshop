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

                    <label for="SignupEmail"> Email: </label> <br> 
                    <input type="email" id="Username" name = "email" required> <br>

                    <label for="SignupUsername"> Username: </label> <br> 
                    <input type="text" id="Username" name = "userName" required> <br> 

                    <label for="SignupPassword"> Password: </label> <br>
                    <input type="password" id="Username" name = "passw" required> <br> <br>

                    <div class="Button-container">
                        <button type="submit" class="Button" name="signUp"> Sign Up </button>
                    </div>
                </form>
                <p> Already have an account? </p> <a href="login.php"> Log in here </a>


            </div>
        </div>
        
    </body>