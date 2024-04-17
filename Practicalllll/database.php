<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="databasestyle.css"/>
    <title>Database</title>
</head>
<body>
    <table> 
        <tr> 
            <th>User ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
            <th>Email Address</th>
            <th>Religion</th>
            <th>Type</th>
        </tr>



<?php
    $servername ="localhost";
    $username="root";
    $password="";
    $database="practicalmidterm";
    $conn= new mysqli($servername, $username, $password, $database);


    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result =$conn->query($sql);

    if ($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row ["user_id"]. "<br>";
            echo "<td>".$row ["last_name"]."<br>";  
            echo "<td>".$row ["first_name"]."<br>"; 
            echo "<td>".$row ["middle_name"]."<br>"; 
            echo "<td>".$row ["address"]."<br>"; 
            echo "<td>".$row ["age"]."<br>"; 
            echo "<td>".$row ["birthday"]."<br>"; 
            echo "<td>".$row ["contact_no"]."<br>"; 
            echo "<td>".$row ["email_address"]."<br>"; 
            echo "<td>".$row ["religion"]. "<br>";
            echo "<td>".$row ["type"]. "<br>";
        }
    }else {
        echo "O results";
    }
    $conn->close();
    ?>
    </table>
</body>
</html>

