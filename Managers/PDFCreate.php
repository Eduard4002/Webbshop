<?php

    if(!isset($_POST['place-order'])){
        header('location: ../index.php');
    }
    require('html2pdf.php');
    $companyName = $_POST['cn'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $country = $_POST['selection'];
    $streetAddress = $_POST['houseadd'];
    $apartment = $_POST['apartment'];
    $townCity = $_POST['city'];
    $stateCounty = $_POST['state_county'];
    $postcodeZIP = $_POST['postcode_zip'];
    
    $title = 'Receipt';
    $author = 'RETRO TECH';
    $url = 'retrotech.net';

    $mainHtml = '
    <h1>Customer information</h1>
    <p>$companyName</p>
    <p>$firstName $lastName</p>
    <p>$email</p>
    <p>$phone</p>
    <br><br>
    <h1>Send to:</h1>
    <p>$country</p>
    <p>City: $townCity $postcodeZIP</p>
    <p>Address: $streetAdress</p>
    <p>$apartment</p>


    ';
    $pdf = new createPDF(
        $mainHtml,   // html text to publish
        $title,  // article title
        $url,    // article URL
        $author, // author name
        time()
    );
    $pdf->run();
    
    

?>
