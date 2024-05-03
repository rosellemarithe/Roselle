<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields (you can add more validation as needed)
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $role = $_POST["role"];
    $address = $_POST["address"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $religion = $_POST["religion"];

    // Basic validation - you might want to enhance this further
    if (empty($username) || empty($password) || empty($name) || empty($role) || empty($address) || empty($contact_number) || empty($email) || empty($birthday) || empty($religion)) {
        // Handle invalid input - redirect back to the registration page with an error message
        header("Location: registration.php?error=missing_fields");
        exit();
    }

    // Database connection (adjust these details according to your database setup)
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "ecomm";
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert user data into the database
    $sql = "INSERT INTO info_table (name, role, address, contact_no, email_address, birthday, religion, username, password)
            VALUES ('$name', '$role', '$address', '$contact_number', '$email', '$birthday', '$religion', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful - redirect to a success page or login page
        header("Location: choose.php?registration=success");
        exit();
    } else {
        // Handle database error - redirect back to the registration page with an error message
        header("Location: registration.php?error=database_error");
        exit();
    }

    // Close database connection
    $conn->close();
} else {
    // Redirect back to the registration page if accessed directly without submitting the form
    header("Location: registration.php");
    exit();
}
?>