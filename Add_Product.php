<?php
// Include the database configuration
include "Managers/productsManager.php";
if(isset($_POST['addProduct'])){
    // Get form data
    $productName = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    //$stock = $_POST['stock'];
    $fileImage = $_POST['image'];
    $secondHand = $_POST['secondhand'];


        // Image upload handling
    $targetDir = "res/"; // Directory where images will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Generate a unique identifier for the file (e.g., a hash)
    $uniqueIdentifier = md5(uniqid());

    // Sanitize the file name
    $sanitizedFileName = $uniqueIdentifier . '.' . $imageFileType;
    $targetFile = $targetDir . $sanitizedFileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "Image uploaded successfully.";
        addProduct($targetFile,$productName,$price,$description,$secondHand);
        header('location: index.php?itemAdded');

    } else {
        header('location: index.php?failed');
    }

    //Succesful
}



// Close database connection


    
?>
