<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_username"])) {
    header("Location: admin_login.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product details from form submission
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Database connection
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "ecomm";

    $conn = new mysqli($servername, $username_db, $password_db, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert product details into the database
    $sql = "INSERT INTO products (id, name, description, price, quantity) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssi", $id, $name, $description, $price, $quantity);

    if ($stmt->execute()) {
        // Product added successfully
        header("Location: manage_products.php?success=product_added");
        exit();
    } else {
        // Error occurred while adding product
        header("Location: add_product.php?error=product_add_error");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirect back to the add product page if accessed directly without submitting the form
    header("Location: add_product.php");
    exit();
}
?>