<?php 
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel = "stylesheet" href = "../Css/aboutus.css">
       <link rel="stylesheet" type="text/css" href="../Css/index.css">
       <script src="../popup.js"> </script>
    </head>
    <body>
    <main>

            <?php include "../Extra/navbar.php"?>
            <?php include "../Extra/popup.php"?>

            <div class="Wrapper"></div>
        <div class = "person">
            <div class="edu">
                <img src = "../Design/profiles/Eduard-Mihice.jpg" class="img1" alt="Eduard Mihic; project leader, BackEnd (Programer)" title="Eduard-Mihic project leader">
                <div class = "textcont">
                    <h2 style = "color: #10c9c0;">Eduard-Mihic CEO</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">Eduard - CEO and project leader of Retro Tech. Passionate about tech and sustainability, I'm dedicated to curating the best second-hand electronics for our customers.
                            Committed to making a positive impact on both the environment and your wallet.
                        </p>
                        <a href="https://www.linkedin.com/in/eduard-mihic-12b5b4289/">Let's Connect via linkedin</a>
                    </div>
                </div>
            </div>
            <div class="Ram">
                <img src = "../Design/profiles/Rami-Agha.JPG" class="img2" alt="Rami Agha; FrontEnd (Designer)" title="Rami-Agha Project Designer">
                <div class = "textcont">
                    <h2 style = "color: #38d94e;">Rami-Agha Deigner</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">Käärija, is the head designer of Retro Tech with many years of experience in the industry</p>
                        <a href="www.linkedin.com/in/ramiagha888">let's Connect Via linkedin</a>
                </div>
            </div>
            <div class="Gus">
                <img src = "../Design/profiles/Gustaf-Fäldt.jpg" class="img3" alt="Gustaf Fäldt, BackEnd (Programer)" title="Gustaf-Flädt Project Back-End Developer/Deigner">
                <div class = "textcont">
                    <h2 style = "color: #f02293;">Gustaf-Flädt Programer/Designer</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">Front / Backend developer
                            A developer for the company Retro Tech with experience in both front- and back-end development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="Jon">
                <img src = "../Design/profiles/Eduard-Mihice.jpg" class="img4" alt="Jonathan CS, FrontEnd (Deigner)">
                <div class = "textcont">
                    <h2 style = "color: #f02236;">Looren, GrahicalDesigner</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">Loreen is the head graphicaldesigner, originally working with pixar with animation in many famous works. Such
                            as Soul and Encanto.

                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        
        </main>
    </body>
</html>