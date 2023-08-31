<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="login.css">
    </head>

    <body>
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

            </div>
        </div>
        
    </body>