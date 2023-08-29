<?php
include "../db_connection.php";

// Add product to the database, $isSecondHand is either 0 or 1
function addProduct($fileToImage, $name, $price, $info, $isSecondHand) {
    $query = mysqli_query(openConn(), "INSERT INTO products VALUES(null, '$fileToImage', '$name', '$price', '$info', '$isSecondHand')");
}

// Get all products
function getAllProducts() {
    $query = mysqli_query(openConn(), "SELECT * FROM products");
    return $query;
}

// Delete the product with product ID
function deleteProduct($productID) {
    $conn = openConn();

    // Retrieve the product name and image name before deleting the product
    $query = mysqli_query($conn, "SELECT name, fileImage FROM products WHERE ID = '$productID'");
    $row = mysqli_fetch_assoc($query);
    $productName = $row['name'];
    $imageName = $row['fileImage'];

    // Delete the image file from the res folder on the server
    $imagePath = 'res/' . $imageName . '.png';
    if (file_exists($imagePath)) {
        unlink($imagePath); // This deletes the image file
    }

    // Delete the product entry from the database
    $query = mysqli_query($conn, "DELETE FROM products WHERE ID = '$productID'");
    closeConn($conn);

    return $productName; // Return the product name for displaying in messages
}

// Get a comma-separated string of product names based on their IDs
function getProductNamesString($productIDs) {
    $conn = openConn();
    $productNames = array();

    foreach ($productIDs as $productId) {
        $query = mysqli_query($conn, "SELECT name FROM products WHERE ID = '$productId'");
        $row = mysqli_fetch_assoc($query);
        $productNames[] = $row['name'];
    }

    closeConn($conn);
    return implode(", ", $productNames);
}
?>
