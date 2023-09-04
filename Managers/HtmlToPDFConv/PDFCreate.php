<?php

    if(!isset($_POST['place-order'])){
        header('location: ../index.php');
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/Managers/productsManager.php";
    $userID = $_POST['userID'];
    $products = getProductsFromCart($userID);

    //Read the form details
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

    $htmlContent = file_get_contents('template.html');

    //Replace placeholders inside of the "template.html" file

    //If company name is empty, remove from template file
    if($companyName === ""){
        $htmlContent = str_replace('<p><b>Company Name:</b> {companyName}</p>', "", $htmlContent);
    }else{
        $htmlContent = str_replace('{companyName}', $companyName, $htmlContent);
    }
    $htmlContent = str_replace('{firstName}', $firstName, $htmlContent);
    $htmlContent = str_replace('{lastName}', $lastName, $htmlContent);
    $htmlContent = str_replace('{email}', $email, $htmlContent);
    $htmlContent = str_replace('{phone}', $phone, $htmlContent);
    $htmlContent = str_replace('{country}', $country, $htmlContent);
    $htmlContent = str_replace('{streetAddress}', $streetAddress, $htmlContent);
    //If apartment parameter is empty, remove from template file
    if($apartment === ""){
        $htmlContent = str_replace('<p><b>Apartment:</b> {apartment}</p>', "", $htmlContent);
    }else{
        $htmlContent = str_replace('{apartment}', $apartment, $htmlContent);
    }
    $htmlContent = str_replace('{apartment}', $apartment, $htmlContent);
    $htmlContent = str_replace('{townCity}', $townCity, $htmlContent);
    $htmlContent = str_replace('{stateCounty}', $stateCounty, $htmlContent);
    $htmlContent = str_replace('{postcodeZIP}', $postcodeZIP, $htmlContent);

    //Add table of all products in cart
    $htmlContent.=
    '
    <table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    ';
    $totalPrice = 0;
    while($row = mysqli_fetch_assoc($products)){
        $name = $row['name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $htmlContent.="
        <tr>
            <th>$name</th>
            <th>$price kr</th>
            <th>$quantity</th>
        </tr>";
        $totalPrice += $price * $quantity;

    }
    $htmlContent.=
    '</table>';

    $htmlContent.="<h2 class='total'>Total: $totalPrice kr</h2>";
    $tempHtmlFile = 'temp.html';

   
    file_put_contents($tempHtmlFile, $htmlContent);
    // Prevent any accidental output before generating the PDF
    ob_start();
    
    // Define the PDF output file
    $pdfOutputFile = 'receipt.pdf';
    $wkhtmltopdfPath = $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/Managers/HtmlToPDFConv/wkhtmltopdf/bin/wkhtmltopdf";
    exec("$wkhtmltopdfPath $tempHtmlFile $pdfOutputFile 2>&1", $output, $returnCode);   
     if ($returnCode !== 0) {
        // Output any errors for debugging
        echo "wkhtmltopdf Error: " . implode("\n", $output);
        exit;
    }

    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="receipt.pdf"');
    readfile($pdfOutputFile);

    // Clean up temporary files if necessary
    unlink($tempHtmlFile);
    unlink($pdfOutputFile);
    
    //Delete items from cart
    deleteAllFromCart($userID);
    // Clean the output buffer and send the PDF to the browser
    ob_end_flush();

?>
