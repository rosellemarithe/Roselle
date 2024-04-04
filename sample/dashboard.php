<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: welcome.php");
    exit;
}

// Include database connection file
require_once 'databaseconn.php';

// Fetch user details from the database
$email = $_SESSION['email'];
$sql = "SELECT * FROM student_table WHERE email_address = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name1 = $row['last_name'];
    $name2 = $row['first_name'];
    $name3 = $row['middle_name'];
    $studentid = $row['student_id'];
    $address = $row['address'];
    $contact = $row['contact_no'];
    $email = $row['email_address'];
    $bday = $row['birthday'];
    $age = $row['age'];
    $rel = $row['religion'];
} else {
    echo "User not found.";
    exit;
}

// Update user details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated data from the form
    $newName1 = $_POST['name1'];
    $newName2 = $_POST['name2'];
    $newName3 = $_POST['name3'];
    $newStudentid = $_POST['studentid'];
    $newAddress = $_POST['address'];
    $newContact = $_POST['contact'];
    $newEmail = $_POST['email'];
    $newBday = $_POST['bday'];
    $newAge = $_POST['age'];
    $newRel = $_POST['rel'];
    $newPassword = $_POST['pas'];

    // Update the user's details in the database
    $updateSql = "UPDATE student_table SET 
                  last_name = ?, 
                  first_name = ?, 
                  middle_name = ?, 
                  student_id = ?, 
                  address = ?, 
                  contact_no = ?, 
                  email_address = ?, 
                  birthday = ?, 
                  age = ?, 
                  religion = ?, 
                  password = ? 
                  WHERE email_address = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("ssssssssssss", $newName1, $newName2, $newName3, $newStudentid, $newAddress, $newContact, $newEmail, $newBday, $newAge, $newRel, $newPassword, $email);

    if ($stmt->execute()) {
        echo "Details updated successfully.";
        // Redirect or display success message
    } else {
        echo "Error updating details: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $name2; ?></h2>
    <h3>Update Details</h3>
    <form method="POST" action="">
        <label for="name">Student Name:</label><br>
        <input type="text" id="name1" name="name1" value="<?php echo $name1; ?>" placeholder="Enter your Last Name" required><br>
        <input type="text" id="name2" name="name2" value="<?php echo $name2; ?>" placeholder="Enter your First Name" required><br>
        <input type="text" id="name3" name="name3" value="<?php echo $name3; ?>" placeholder="Enter your Middle Name" required><br>

        <label for="studentid">Student ID:</label><br>
        <input type="text" id="studentid" name="studentid" value="<?php echo $studentid; ?>" placeholder="Enter your Student ID  ex.Ct01-0001" required><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" placeholder="Enter your Address" required><br>

        <label for="contact">Contact No:</label><br>
        <input type="text" id="contact" name="contact" value="<?php echo $contact; ?>" placeholder="Enter contact number" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="usermail@gmail.com" required><br>
                    
        <label for="bday">Birthday:</label><br>
        <input type="text" id="bday" name="bday" value="<?php echo $bday; ?>" placeholder="dd/mm/yy" required><br>

        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age" value="<?php echo $age; ?>" placeholder="20 yrs old" required><br>

        <label for="rel">Religion:</label><br>
        <input type="text" id="rel" name="rel" value="<?php echo $rel; ?>" placeholder="Roman Catholic" required><br>

        <label for="pas">Password:</label><br>
        <input type="password" id="pas" name="pas" placeholder="*******" required><br>

        <label for="cpas">Confirm Password:</label><br>
        <input type="password" id="cpas" name="cpas" placeholder="*******" required><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>