<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        // Handle missing fields
        header("Location: admin_login.php?error=missing_fields");
        exit();
    }

    // Database connection (adjust these details according to your database setup)
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "ecomm";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to fetch admin data from the database
    $sql = "SELECT * FROM info_table WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Admin found, verify password
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];
        $role = $row["role"]; // Retrieve admin's role

        if ($password === $stored_password) {
            // Password is correct, set session variables
            $_SESSION["admin_username"] = $username;
            $_SESSION["admin_role"] = $role; // Set admin's role in session

            // Redirect based on role
            if ($role == "admin") {
                // Admin role has access to product management
                header("Location: admin_dashboard.php");
                exit();
            } elseif ($role == "user") {
                // User role has limited access
                header("Location: user_dashboard.php");
                exit();
            }
        } else {
            // Password is incorrect
            header("Location: admin_login.php?error=invalid_credentials");
            exit();
        }
    } else {
        // Admin not found
        header("Location: admin_login.php?error=invalid_credentials");
        exit();
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect back to the login page if accessed directly without submitting the form
    header("Location: admin_login.php");
    exit();
}
?>