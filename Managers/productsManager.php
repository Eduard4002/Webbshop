<?php
    
    include $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/db_connection.php";
     //get all products TODO: Order by price?
     function getProducts($isSecondHand){
        $query = mysqli_query(openConn(), "SELECT * FROM products WHERE secondHand = '$isSecondHand'");
        return $query;
    }
    
    
    //add product to the database, $isSecondHand is either 0 or 1
    function addProduct($fileToImage,$name,$price,$info,$isSecondHand){
        $query = mysqli_query(openConn(), "INSERT INTO products VALUES(null, '$fileToImage', '$name', '$price', 'info', '$isSecondHand')");
    }
    //delete the product with product ID
    function deleteProduct($productID){
        $query = mysqli_query(openConn(), "DELETE FROM products WHERE ID = '$productID'");
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
    }   
    

    if(isset($_POST['addToCart'])){
        $productID = $_POST['productID'];
        if(!isset($_SESSION['USER'])) header('location: ../login.php?login');
        addProductToCart($_SESSION['USER'], $productID);
        header('location: ../login.php?itemAddedToCart');
    }
?>