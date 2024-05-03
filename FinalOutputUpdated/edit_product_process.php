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

// Fetch product details based on ID
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT name, description, price, quantity FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $description = $row["description"];
        $price = $row["price"];
        $quantity = $row["quantity"];
    } else {
        echo "<script>alert('Product not found');</script>";
        exit();
    }
    $stmt->close();
} else {
    echo "<script>alert('Product ID not specified');</script>";
    exit();
}

// Close database connection
$conn->close();
?>