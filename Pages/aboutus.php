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
                    <h2 style = "color: #38d94e;">Rami-Agha GrahicalDesigner</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">My first ever project in Web development. Head of FrontEnd/GrahicalDesign for the {Retro-Tech} website using Figma, HTML and CSS.</p>
                        <a href="www.linkedin.com/in/ramiagha888">let's Connect Via linkedin</a>
                </div>
            </div>
            <div class="Gus">
                <img src = "../Design/profiles/Gustaf-Fäldt.jpg" class="img3" alt="Gustaf Fäldt, BackEnd (Programer)" title="Gustaf-Flädt Project Back-End Developer/Deigner">
                <div class = "textcont">
                    <h2 style = "color: #f02293;">Gustaf-Flädt Programer/Designer</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">Front / Backend developer
                            A developer for the company Retro Tech with experience in both front- and back-end development.</p>
                            <a href="https://www.linkedin.com/in/gustaf-f%C3%A4ldt-b047a6244/">let's Connect Via linkedin</a>
                    </div>
                </div>
            </div>
            <div class="Jon">
                <img src = "../Design/profiles/Jonathan_Sjöstedt.jpg" class="img4" title="Jonathan_Sjöstedt, FrontEnd (Deigner)">
                <div class = "textcont">
                    <h2 style = "color: #f02236;">Jonathan_Sjöstedt GrahicalDesigner</h2>
                    <div class = "textcontdesc">
                        <p style = "display: block;">My name is Jonathan and I'm one of the designers/frontend devolopers of the retro tech website. I have experience in Python, Java, Arduino, Javascript, html and css and hopefully more in future.</p>
                        <a href="http://www.linkedin.com/in/jonathan-cano-sj%C3%B6stedt-58578b28b" class="a">let's Connect Via linkedin</a>
                    </div>
                </div>
            </div>
        </div>

        </main>
    </body>
</html>