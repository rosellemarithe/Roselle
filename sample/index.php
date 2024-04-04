<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .registration {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px 2px rgba(110, 108, 108, 0.7);
        }

        .registration-container {
            padding: 20px;
        }

        .label {
            text-align: center;
            margin-bottom: 20px;
        }

        .label p {
            font-size: 24px;
            margin: 0;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"],
        button[type="button"] {
            width: 49%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="registration" id="user">
        <div class="registration-container">
            <div class="label">
                <p><b>Sign Up</b></p>
            </div>
            <form method="POST" action="dashboard.php">

            <label for="name">Student Name:</label><br>
                <input type="text" id="name1" name="name1" placeholder="Enter your Last Name" required><br>
                <input type="text" id="name2" name="name2" placeholder="Enter your First Name" required><br>
                <input type="text" id="name3" name="name3" placeholder="Enter your Middle Name" required><br>

                <label for="studentid">Student ID:</label><br>
                <input type="text" id="studentid" name="studentid" placeholder="Enter your Student ID  ex.Ct01-0001" required><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" placeholder="Enter your Address" required><br>

                <label for="contact">Contact No:</label><br>
                <input type="text" id="contact" name="contact" placeholder="Enter contact number" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="usermail@gmail.com" required><br>
                    
                <label for="bday">Birthday:</label><br>
                <input type="text" id="bday" name="bday" placeholder="dd/mm/yy" required><br>

                <label for="age">Age:</label><br>
                <input type="text" id="age" name="age" placeholder="20 yrs old" required><br>

                <label for="rel">Religion:</label><br>
                <input type="text" id="rel" name="rel" placeholder="Roman Catholic" required><br>

                <label for="pas">Password:</label><br>
                <input type="password" id="pas" name="pas" placeholder="*******" required><br>

                <label for="cpas">Confirm Password:</label><br>
                <input type="password" id="cpas" name="cpas" placeholder="*******" required><br>

                <button type="submit" class="btn" id="register" name="register">Register</button>
                <button type="button" class="btn" onclick="window.location.href='welcome.php'">Cancel</button>
            </form>
        </div>
    </div>
</body>
</html>