<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="stylefront.css">
</head>
<body>
    <div class="registration">
        <div class="registration-container">
            <div class="label">
                <h2>Register</h2>
            </div>
            <form method="POST" action="register.php">
                
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required><br>

                <label for="role">Role:</label><br>
                <input type="radio" id="admin" name="role" value="admin" required>
                <label for="admin">Admin</label><br>
                <input type="radio" id="user" name="role" value="user" required>
                <label for="user">User</label><br>

                <label for="address">Address:</label><br>
                <textarea id="address" name="address" placeholder="Enter your address" required></textarea><br>

                <label for="contact_number">Contact Number:</label><br>
                <input type="text" id="contact_number" name="contact_number" placeholder="Enter your contact number" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                <label for="birthday">Birthday:</label><br>
                <input type="date" id="birthday" name="birthday" required><br>

                <label for="religion">Religion:</label><br>
                <input type="text" id="religion" name="religion" placeholder="Enter your religion" required><br>
                
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
                
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <button type="submit" class="btn" name="register">Register</button>
            </form>
        </div>
    </div>
</body>
</html>