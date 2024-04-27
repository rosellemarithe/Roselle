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
            <th> Name</th>
            <th> Role</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Email Address</th>
            <th>Birthday</th>
            <th>Religion</th>
            <th>Username</th>
            <th>Password</th>
        </tr>



<?php
    $servername ="localhost";
    $username="root";
    $password="";
    $database="ecomm";
    $conn= new mysqli($servername, $username, $password, $database);


    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    $sql = "SELECT * FROM info_table";
    $result =$conn->query($sql);

    if ($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row ["name"]."<br>"; 
            echo "<td>".$row ["role"]."<br>"; 
            echo "<td>".$row ["address"]."<br>"; 
            echo "<td>".$row ["contact_no"]."<br>"; 
            echo "<td>".$row ["email_address"]."<br>"; 
            echo "<td>".$row ["birthday"]."<br>"; 
            echo "<td>".$row ["religion"]. "<br>";
            echo "<td>".$row ["username"]. "<br>";
            echo "<td>".$row ["password"]. "<br>";
        }
    }else {
        echo "O results";
    }
    $conn->close();
    ?>
    </table>
</body>
</html>

