<?php
include_once "Managers/productsManager.php";


// Get all products
$query = getAllProducts();

if ($query != null) {
    while ($row = mysqli_fetch_assoc($query)) {
        $productId = $row['ID'];
        $name = $row['name'];
        $price = $row['price'];

        // Output the product name, price, and checkbox with product ID as value
        echo '<label><input type="checkbox" name="removeProducts[]" value="' . $productId . '"> ';
        echo 'Name: ' . $name . ' - Price: $' . $price;
        echo '</label><br>';
    }
}
?>
