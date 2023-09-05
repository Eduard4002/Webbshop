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
                <div class="star">
                    <img src="../Design/star.png">
                </div>
                <iframe id = "maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2228.6326175235286!2d12.697914362734444!3d56.042349669539966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652324b2e7a15a3%3A0xc56e0008e88fd120!2sNTI%20Gymnasiet%20Helsingborg!5e0!3m2!1sen!2sse!4v1693932116933!5m2!1sen!2sse" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        

    </body>
</html>