<?php
// Include necessary files

include_once "Managers/productsManager.php";


    if (isset($_POST['removeSelected'])) {
        if (isset($_POST['removeProducts'])) {
            $productsToRemove = $_POST['removeProducts'];

            // Loop through the selected product IDs and delete them
            foreach ($productsToRemove as $productId) {
                deleteProduct($productId);
            }

            // Redirect to the same page with a success message
            header('location: index.php?productsRemoved');
        }
    }
?>
