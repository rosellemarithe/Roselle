<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-style.css"/>
    <title>User Login</title>
</head>
<body>
    <div class="registration" id="user-login">
        <div class="registration-container">
            <div class="label">
                <p><b>USER LOGIN</b></p>
            </div>
            <form method="POST" action="user_authenticate.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
                <button type="submit" class="btn" id="user-login-btn" name="user-login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

