<!DOCTYPE html>
<html>
<head>
    <title>Popup</title>
    <link rel="stylesheet" href="popup.css">
    <meta charset="UTF-8">
</head>
<script src="popup.js"></script>
<body>
    <a onclick="toggleMainPopup()"> ↓ </a>


    <div data-closable="true" class="PopupWindow" id="PopupWindow" style="display: none;">
        <div class="Button-container">
            <a class="Button" onclick="LogIn()"> Log In </a>
            <a class="Button" onclick="SignUp()"> Sign Up </a>
            <a class="Button"> Shopping Cart 🛒 </a>
        </div>
    </div>

    <div data-closable="true" class="LogInWindow" id="LogInWindow" style="display: none"> 
        <button class="CloseButton" onclick="Popup('PopupWindow')"> ⮾ </button>
        <h2> Log in :) </h2>
        <form>
            <label for="LoginUsername"> Username: </label> <br> 
            <input type="text" id="Username" required> <br> <br> <br>

            <label for="LoginPassword"> Password: </label> <br>
            <input type="password" id="Username" required> <br> <br> <br>
        </form>
        <div class="Button-container">
            <a class="Button"> Log In </a>
        </div>
    </div>   

    <div data-closable="true" class="SignUpWindow" id="SignUpWindow" style="display: none"> 
        
        <button class="CloseButton" onclick="Popup('PopupWindow')"> ⮾ </button>
        <h2> Sign up here :) </h2>
        <form>
            <label for="SignupEmail"> Email: </label> <br> 
            <input type="text" id="Username" required> <br> <br> <br>

            <label for="SignupUsername"> Username: </label> <br> 
            <input type="text" id="Username" required> <br> <br> <br>

            <label for="SignupPassword"> Password: </label> <br>
            <input type="password" id="Username" required> <br> <br> <br>
        </form>
        <div class="Button-container">
            <a class="Button"> Sign Up </a>
        </div>
    </div>   

</body>
</html>
