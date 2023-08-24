<?php
    include "./db_connection.php";
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
?>