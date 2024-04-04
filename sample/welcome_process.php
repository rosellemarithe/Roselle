<?php
session_start();

$email = "user@example.com";
$password = "password";

// Check if user submitted the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the submitted credentials are correct
    if ($email === $email && $password === $password) {
        // Authentication successful, set session variables
        $_SESSION['email'] = $email;

        // Redirect to dashboard or any other page after successful login
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: index.php?error=1");
        exit;
    }
} else {
    // Redirect to login page if accessed directly without submitting the form
    header("Location: welcome.php");
    exit;
}
?>