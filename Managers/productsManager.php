<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/db_connection.php";

// Add product to the database, $isSecondHand is either 0 or 1
function addProduct($fileToImage, $name, $price, $info, $isSecondHand, $stock) {
    $query = mysqli_query(openConn(), "INSERT INTO products VALUES(null, '$fileToImage', '$name', '$price', '$info', '$isSecondHand', '$stock')");
}

// Get all products
function getAllProducts() {
    $query = mysqli_query(openConn(), "SELECT * FROM products");
    return $query;
}
function getProducts($isSecondHand){
    $query = mysqli_query(openConn(), "SELECT * FROM products WHERE secondHand = '$isSecondHand'");
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

    $filePath = $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/".$imageName;
    if (file_exists($filePath)) {
        unlink($filePath); // This deletes the image file
    }

    // Delete the product entry from the database
    $query = mysqli_query($conn, "DELETE FROM products WHERE ID = '$productID'");

    return $productName; // Return the product name for displaying in messages
}

// Get a comma-separated string of product names based on their IDs
function getProductNamesString($productIDs) {
    $conn = openConn();
    $productNames = array();

    if(isset($_POST['addToCart'])){
        $productID = $_POST['productID'];
        if(!isset($_SESSION['USER'])){
            header('location: ../login.php?login');  
        } 
        addProductToCart($_SESSION['USER'], $productID);
        header('location: ../login.php?itemAddedToCart');
    }

    return implode(", ", $productNames);
}
function getStock($productID){
    $query = mysqli_query(openConn(), "SELECT * FROM products WHERE ID = '$productID'");
    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_assoc($query);
        return $row['stock'];
    }else{
        return -1;
    }
}
function decreaseStock($productID){
    $currStock = getStock($productID);
    if($currStock != -1){
        $currStock--;
        $query = mysqli_query(openConn(), "UPDATE products SET stock = '$currStock' WHERE ID = '$productID'");
        if($currStock == 0){
            deleteProduct($productID);
        }
    }
}
function getCartID($userID){
    $query = mysqli_query(openConn(), "SELECT * FROM cart WHERE userID = '$userID'");
    return mysqli_fetch_assoc($query)['cartID'] ??= null;
}
function createCart($userID){
    $query = mysqli_query(openConn(), "INSERT INTO carts (userID) VALUES ($userID)");
}
function getCardIDFromUserID($userID){
    $query = mysqli_query(openConn(), "SELECT cartID FROM carts WHERE userID = '$userID'");
    return mysqli_fetch_assoc($query)['cartID'];
}
function getProductsFromCart($userID){
    $cartID = getCardIDFromUserID($userID);
    $cartItems = mysqli_query(openConn(), "SELECT productID FROM cart_items WHERE cartID = '$cartID'");

    $products = mysqli_query(openConn(), "SELECT ci.cartItemID, p.fileImage, p.name, p.price, p.info, p.ID, ci.quantity 
    FROM cart_items ci
    JOIN products p ON ci.productID = p.ID
    WHERE ci.cartID = '$cartID'");

    return $products;
}

function addProductToCart($userID, $productID,$quantity = 1){
    $cartID = getCardIDFromUserID($userID);
    $query = mysqli_query(openConn(), "INSERT INTO cart_items VALUES (null,'$cartID','$productID','$quantity')");
    decreaseStock($productID);
}   


if(isset($_POST['addToCart'])){
    $productID = $_POST['productID'];
    if(!isset($_SESSION['USER'])) header('location: ../login.php?login');
    addProductToCart($_SESSION['USER'], $productID);
    header('location: ../login.php?itemAddedToCart');
}
?>
