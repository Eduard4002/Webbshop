<?php
// Include necessary files
include_once "Managers/productsManager.php";

if (isset($_POST['removeSelected'])) {
    if (isset($_POST['removeProducts'])) {
        $productsToRemove = $_POST['removeProducts'];

        // Loop through the selected product IDs and delete them
        foreach ($productsToRemove as $productId) {
            $removedProductName = deleteProduct($productId);
            // Display a message with the removed product name
            header('location: admin.php');
        }
    }
}
?>
