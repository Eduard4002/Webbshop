<?php
    include_once "productsManager.php";
    $productID = $_POST['productID'];
    $userID = $_POST['userID'];
    removeProductFromCart($userID, $productID);
    header('location: ../cart.php');

?>
