<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="add_productformstyle.css">
</head>
<body>
    <h2>Add Product</h2>
    <form action="addproduct_process.php" method="POST" enctype="multipart/form-data">
        <label for="id">Product ID:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>