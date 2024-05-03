<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_username"])) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "ecomm";

$conn = new mysqli($servername, $username_db, $password_db, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted for editing
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Update product details in the database
    $update_sql = "UPDATE products SET name=?, description=?, price=?, quantity=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssdii", $name, $description, $price, $quantity, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Product updated successfully');</script>";
        header("Refresh:0");
    } else {
        echo "<script>alert('Error updating product');</script>";
    }
    $stmt->close();
}

// Check if form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Delete product from the database
    $delete_sql = "DELETE FROM products WHERE id=?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<script>alert('Product deleted successfully');</script>";
        header("Refresh:0");
    } else {
        echo "<script>alert('Error deleting product');</script>";
    }
    $stmt->close();
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="manageproducts_style.css">
</head>
<body>
    <div class="container">
        <h2>Manage Products</h2>
        <a href="add_product.php" class="add-button">Add Product</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["description"] . "</td>
                            <td>" . $row["price"] . "</td>
                            <td>" . $row["quantity"] . "</td>
                            <td>
                                <form method='POST' action='edit_product.php'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <input type='submit' name='edit' value='Edit'>
                                </form>
                                <form method='POST' action=''>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <input type='hidden' name='name' value='" . $row["name"] . "'>
                                    <input type='hidden' name='description' value='" . $row["description"] . "'>
                                    <input type='hidden' name='price' value='" . $row["price"] . "'>
                                    <input type='hidden' name='quantity' value='" . $row["quantity"] . "'>
                                    <input type='submit' name='delete' value='Delete'>
                                </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No products found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>