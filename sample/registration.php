<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $lastName = $_POST['name1'];
    $firstName = $_POST['name2'];
    $middleName = $_POST['name3'];
    $studentID = $_POST['studentid'];
    $studentNo = $_POST['studentno'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $birthday = $_POST['bday'];
    $age = $_POST['age'];
    $religion = $_POST['rel'];
    $password = $_POST['pas'];
    $confirmPassword = $_POST['cpas'];

    // Validation (You may add more validation as per your requirement)
    if ($password != $confirmPassword) {
        echo "Passwords do not match!";
        exit;
    }

    // Database connection and data insertion code can be placed here
    // You should use prepared statements to prevent SQL injection

    // For demonstration purposes, let's just store the data in session
    $_SESSION['registration_data'] = [
        'lastName' => $lastName,
        'firstName' => $firstName,
        'middleName' => $middleName,
        'studentID' => $studentID,
        'studentNo' => $studentNo,
        'address' => $address,
        'contact' => $contact,
        'email' => $email,
        'birthday' => $birthday,
        'age' => $age,
        'religion' => $religion,
        'password' => $password
    ];

    // Redirect to a success page or any other page as per your requirement
    header("Location: dashboard.php");
    exit;
} else {
    // If accessed directly without submitting the form, redirect back to the registration page
    header("Location: index.php");
    exit;
}
?>

<?php
// Include database connection file
require_once 'databaseconn.php';

// Process your form submission here
// ...
?>