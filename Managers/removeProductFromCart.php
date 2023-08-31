<?php
include_once "productsManager.php";
echo "Statement is called";
$productID = $_POST['productID'];
$userID = $_POST['userID'];
removeProductFromCart($userID, $productID);
header('location: ../cart.php');

?>
