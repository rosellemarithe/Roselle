<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Registration Form</title>
</head>
<body>
    <div class="registration" id="user">
        <div class="registration-container">
            <div class="label">
            <p><b>USER REGISTRATION</b></p>
            </div>
            <form method="POST" action="register.php">

            <label for="name">Student Name:</label><br>
            <input type="name1" id="name1" name="name1" placeholder="Enter your Last Name" required><br>
            <input type="name2" id="name2" name="name2" placeholder="Enter your First Name" required><br>
            <input type="name3" id="name3" name="name3" placeholder="Enter your Middle Name" required><br>

            <label for="studentid">Student ID/No.:</label><br>
            <input type="studentid" id="studentid" name="studentid" placeholder="Enter your Student ID  ex.Ct01-0001" required><br>
            <input type="studentno" id="studentno" name="studentno" placeholder="Enter your Student NO ex.Ct01-0001" required><br>


            <label for="address">Address:</label><br>
            <input type="address" id="address" name="address" placeholder="Enter your Address" required><br>

            <label for="contact">Contact No:</label><br>
            <input type="contact" id="contact" name="contact" placeholder="Enter contact number" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="usermail@gmail.com" required><br>
                
            <label for="bday">Birthday:</label><br>
            <input type="bday" id="bday" name="bday" placeholder="dd/mm/yy" required><br>

            <label for="age">Age:</label><br>
            <input type="age" id="age" name="age" placeholder="20 yrs old" required><br>

            <label for="rel">Religion:</label><br>
            <input type="rel" id="rel" name="rel" placeholder="Roman Catholic" required><br>

                <div class="buttons-container" id="btns">
                    <button type="submit" class="btn" id="register" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>

  <?php
    $servername ="localhost";
    $username="root";
    $password="";
    $database="firstconnection";
    $conn= new mysqli($servername, $username, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $studentid =$_POST ["studentid"];
        $name1 =$_POST ["name1"];
        $name2 =$_POST ["name2"];
        $name3 =$_POST ["name3"];
        $address =$_POST ["address"];
        $contact =$_POST ["contact"];
        $email =$_POST ["email"];
        $bday =$_POST ["bday"];
        $age =$_POST ["age"];
        $rel =$_POST ["rel"];
        $studentid =$_POST ["studentid"];

        $insert ="INSERT INTO student_table (student_no, student_id, last_name, first_name, middle_name, address, contact_no, email_address, birthday, age, religion) VALUES('','$studentid', '$name1', '$name2', '$name3', '$address', '$contact', '$email', '$bday', '$age', '$rel')";
        mysqli_query($conn, $insert);
    }
    ?>

</body>
</html>