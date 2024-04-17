<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefront.css"/>
    <title>Registration Form</title>
</head>
<body>
    <div class="registration" id="user">
        <div class="registration-container">
            <div class="label">
            <p><b>LOGIN</b></p>
            </div>
            <form method="POST" action="database.php">

            <label for="unames">USERNAME:</label><br>
            <input type="unames" id="unames" name="unames" placeholder="Enter your User Name" required><br>
            
            <label for="pas">PASSWORD:</label><br>
            <input type="pas" id="pas" name="pas" required><br>


                <div class="buttons-container" id="btns">
                    <button type="submit" class="btn" id="login" name="login">LOGIN</button>
                    <p>Don't have an account? <a href="practical.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
    
    </body>
</html>