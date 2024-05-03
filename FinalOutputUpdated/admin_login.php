<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-style.css"/>
    <title>Admin Login</title>
</head>
<body>
    <div class="registration" id="admin-login">
        <div class="registration-container">
            <div class="label">
                <p><b>ADMIN LOGIN</b></p>
            </div>
            <form method="POST" action="admin_authenticate.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
                <button type="submit" class="btn" id="admin-login-btn" name="admin-login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>