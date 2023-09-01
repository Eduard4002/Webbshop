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
    $query = mysqli_query(openConn(), "SELECT * FROM products WHERE secondHand = '$isSecondHand' AND stock > 0");
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

    $products = mysqli_query(openConn(), "SELECT ci.cartItemID, p.fileImage, p.name, p.price, p.info, p.ID,p.stock, ci.quantity 
    FROM cart_items ci
    JOIN products p ON ci.productID = p.ID
    WHERE ci.cartID = '$cartID'");

    if(mysqli_num_rows($products) == 0){
        return null;
    }else{
        return $products;
    }
}


function removeProductFromCart($userID, $productID){
    $cartID = getCardIDFromUserID($userID);
    $query = mysqli_query(openConn(), "DELETE FROM cart_items WHERE cartID = '$cartID' AND productID = '$productID'");
}
function decreaseQuantity($userID, $productID){
    $cartID = getCardIDFromUserID($userID);
    $cartItem = mysqli_query(openConn(), "SELECT cartItemID, quantity FROM cart_items WHERE cartID = '$cartID' AND productID = '$productID'");
    $row = mysqli_fetch_assoc($cartItem);
    $newQuantity = $row['quantity'] - 1;
    mysqli_query(openConn(), "UPDATE cart_items SET quantity = '$newQuantity' WHERE cartItemID = '{$row['cartItemID']}'");
    
    //Increase the stock back
    $product = mysqli_query(openConn(), "SELECT stock FROM products WHERE ID = '$productID'");
    $row =  mysqli_fetch_assoc($product);
    $currStock = $row['stock'];
    $newStock = $currStock + 1;
    
    mysqli_query(openConn(), "UPDATE products SET stock = '$newStock' WHERE ID = '$productID'");
}
function increaseQuantity($userID, $productID){
    //Check if enough in stock
    $product = mysqli_query(openConn(), "SELECT stock FROM products WHERE ID = '$productID'");
    $currStock =  mysqli_fetch_assoc($product)['stock'];

    if($currStock != 0){
        $cartID = getCardIDFromUserID($userID);
        $existingProduct = mysqli_query(openConn(), "SELECT cartItemID, quantity FROM cart_items WHERE cartID = '$cartID' AND productID = '$productID'");
        $row = mysqli_fetch_assoc($existingProduct);
        $quantity = $row['quantity'];
        $quantity++;

        mysqli_query(openConn(), "UPDATE cart_items SET quantity = '$quantity' WHERE cartItemID = '{$row['cartItemID']}'");
        
        $newStock = $currStock - 1;
        mysqli_query(openConn(), "UPDATE products SET stock = '$newStock' WHERE ID = '$productID'");
    }

    
}
function addProductToCart($userID, $productID){
    $cartID = getCardIDFromUserID($userID);
    // Check if the product already exists in the cart
    $existingProduct = mysqli_query(openConn(), "SELECT cartItemID, quantity FROM cart_items WHERE cartID = '$cartID' AND productID = '$productID'");
    if(mysqli_num_rows($existingProduct) > 0) {
        $row = mysqli_fetch_assoc($existingProduct);
        $newQuantity = $row['quantity'] + 1;
        mysqli_query(openConn(), "UPDATE cart_items SET quantity = '$newQuantity' WHERE cartItemID = '{$row['cartItemID']}'");
    }else{
         // Product doesn't exist, insert a new row
         mysqli_query(openConn(), "INSERT INTO cart_items (cartID, productID, quantity) VALUES ('$cartID', '$productID', '1')");
    }
    decreaseStock($productID);

    //$query = mysqli_query(openConn(), "INSERT INTO cart_items VALUES (null,'$cartID','$productID','$quantity')");
    //decreaseStock($productID);
}

if(isset($_POST['addToCart'])){
    $productID = $_POST['productID'];
    $userID = $_POST['userID'];

    if($userID === null) {
        header('location: ../index.php?login');
    }
    addProductToCart($userID, $productID);
    header('location: ../index.php?itemAddedToCart');
}else if(isset($_POST['decreaseQuantity'])){
    $productID = $_POST['productID'];
    $userID = $_POST['userID'];
    decreaseQuantity($userID, $productID);
    header('location: ../cart.php');

}else if(isset($_POST['increaseQuantity'])){
    $productID = $_POST['productID'];
    $userID = $_POST['userID'];
    increaseQuantity($userID, $productID);
    header('location: ../cart.php');
}
?>
