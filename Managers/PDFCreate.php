<?php

    if(!isset($_POST['place-order'])){
        header('location: ../index.php');
    }
    require('html2pdf.php');

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $companyName = $_POST['cn'];
    $country = $_POST['selection'];
    $streetAddress = $_POST['houseadd'];
    $apartment = $_POST['apartment'];
    $townCity = $_POST['city'];
    $stateCounty = $_POST['state_county'];
    $postcodeZIP = $_POST['postcode_zip'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $title = 'Receipt';
    $author = 'RETRO TECH';
    $pdf = new createPDF(
        $_POST['html'],   // html text to publish
        $_POST['title'],  // article title
        $_POST['url'],    // article URL
        $_POST['author'], // author name
        time()
    );
    $pdf->run();
    
    

?>
