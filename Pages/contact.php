<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../Css/index.css">
        <link rel="stylesheet" type="text/css" href="../Css/contact.css">
    </head>
    <body>
        <script src="../popup.js"> </script>
    <?php include_once "../Extra/navbar.php"?>
    <?php include_once "../Extra/popup.php"?>

        <div class="ContactForm"> 
            <form>
                <label for="email"> Email: </label>
                <input type="email" id="Username" name = "email" required> <br> <br> 

                <label for="Username"> Username: </label>
                <input type="text" id="Username" name = "userName" required> <br> <br> 

                <label for="PhoneNumber"> Phone Number: </label>
                <input type="number" id="Username" name = "phoneNumber" required> <br> <br> 

                <label for="Message"> Type in your message: </label>
                <textarea  name = "yourMessage" required> </textarea>

                <button type="submit"  name="signUp"> Send </button>
                
            </form>

        </div>
            <div class="rev">
            <p>Companny Email</p>
            <p>retro.tech@example.com</p>
            <p>number: +46700000000</p>
            <p>
                <div class="star">
                    <img src="../Design/star.png">
                </div>
        </div>
        

    </body>
</html>