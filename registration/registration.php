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
            <input type="name" id="name" name="name" placeholder="Enter your First Name" required><br>
            <input type="name" id="name" name="name" placeholder="Enter your Last Name" required><br>

            <label for="gender">Gender:</label><br>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="usermail@gmail.com" required><br>
                <label for="studentid">Student ID:</label><br>
                <input type="studentid" id="studentid" name="studentid" placeholder="Enter your Student ID  ex.Ct01-0001" required><br>
                
                
                <label for="classes">Lists of Classes:</label><br>
                <select name="classes" id="classes">
                    <option value="E-Commerce Technologies">E-Commerce Technologies</option>
                    <option value="System Integration and Architecture 2">System Integration and Architecture 2</option>
                    <option value="Human Computer Interaction 1">Human Computer Interaction 1</option>
                    <option value="Information Assurance and Security 1">Information Assurance and Security 1</option>
                    <option value="Capstone Project and Research 1">Capstone Project and Research 1</option>
                    <option value="Application Development and Emerging Technologies">Application Development and Emerging Technologies</option>
                </select><br>

                <div class="buttons-container" id="btns">
                    <button type="submit" class="btn" id="register" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>