<div data-closable="true" class="PopupWindow" id="PopupWindow" style="display: none;">
            <div class="Button-container">


            <?php
                    include_once "Managers/userManager.php";

                    if (isset($_SESSION['USER'])){
                        $userName = getUserByID($_SESSION['USER']);
                        echo "<h2> Welcome $userName </h2>";
                        echo "
                        <form action='Managers/userManager.php' method='POST'>
                            <div>
                                <button type='submit' class='Button' name='logOut'> Log Out </button>
                            </div>
                        </form> ";

                    } else {
                        echo "
                        <a class='Button' href='login.php'> Log In </a>
                        <a class='Button' href='signup.php' > Sign Up </a>
                        ";

                    }
                ?>  

            
                <a class="Button" href="cart.php"> Shopping Cart  </a>
            </div>
        </div>
        <div data-closable="true" class="LogInWindow" id="LogInWindow" style="display: none"> 
            <button class="CloseButton" onclick="Popup('PopupWindow')"> ➤ </button>
            <h2> Log in :) </h2>
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
        <div data-closable="true" class="SignUpWindow" id="SignUpWindow" style="display: none"> 
            
            <button class="CloseButton" onclick="Popup('PopupWindow')"> ➤ </button>
            <h2> Sign up here :) </h2>
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
            
        </div>   