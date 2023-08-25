<?php
    include "./db_connection.php";
     //get all products TODO: Order by price?
     
    //add product to the database, $isSecondHand is either 0 or 1
    function addProduct($fileToImage,$name,$price,$info,$isSecondHand){
        $query = mysqli_query(openConn(), "INSERT INTO products VALUES(null, '$fileToImage', '$name', '$price', 'info', '$isSecondHand')");
    }

    // Get all products
    function getAllProducts() {
        $query = mysqli_query(openConn(), "SELECT * FROM products");
        return $query;
}

    //delete the product with product ID
function deleteProduct($productID) {
    $conn = openConn();

    // Retrieve the image name before deleting the product
    $query = mysqli_query($conn, "SELECT fileImage FROM products WHERE ID = '$productID'");
    $row = mysqli_fetch_assoc($query);
    $imageName = $row['fileImage'];

    // Delete the image file from the res folder on the server
    $imagePath = $imageName;
    if (file_exists($imagePath)) {
        unlink($imagePath); // This deletes the image file
    }

    // Delete the product entry from the database
    $query = mysqli_query($conn, "DELETE FROM products WHERE ID = '$productID'");
    closeConn($conn);
}



?>