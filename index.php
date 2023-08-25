<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add a new product</title>
    <link rel="stylesheet" href="AdminPage.css">
</head>
<body>
    <section>
        <h2>Add New Product</h2>
        <form action="Add_Product.php" method="post" enctype="multipart/form-data">

            <label for="image">Product Image:</label><br />
            <input type="file" id="image" name="image" accept="image/*"><br><br>

            <label for="name">Product Name:</label><br />
            <input type="text" id="name" name="name" required><br><br>
        
            <label for="description">Description:</label><br />
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="secondhand">Second Hand?</label><br>
            <input type="checkbox" id="secondhand" name="secondhand" onclick="toggleStockField()"><br><br>
        
            <div id="stockField" style="display:none;">
                <label for="stock">Stock Quantity:</label><br />
                <input type="number" id="stock" name="stock"><br><br>
            </div>
        
            <label for="price">Price:</label><br />
            <input type="number" id="price" name="price" step="0.01" required><br><br>
        
            <input type="submit" name="addProduct" value="Add Product">
        </form>

    </section> 


    <?php
        if(isset($_GET['itemAdded'])){
            echo "<p style='color:green'>Product has been added to the database</p>";
        }
    ?>
    
    <script>
        function toggleStockField() {
            var stockField = document.getElementById('stockField');
            var secondHandCheckbox = document.getElementById('secondhand');
            
            // If the checkbox is checked, show the stock field; otherwise, hide it
            if (secondHandCheckbox.checked) {
                stockField.style.display = 'block';
            } else {
                stockField.style.display = 'none';
            }
        }
    </script>
</body>
</html>
