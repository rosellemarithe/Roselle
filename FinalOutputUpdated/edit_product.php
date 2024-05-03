<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="edit_product_style.css">
</head>
<body>
    <h2>Edit Product</h2>
    <form action="edit_product_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($description); ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?php echo $price; ?>" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?php echo $quantity; ?>" required><br><br>

        <input type="submit" name="edit" value="Update">
    </form>
</body>
</html>