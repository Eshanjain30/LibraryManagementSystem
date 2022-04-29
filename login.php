<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <section class="navbar">
        <div class="container1">
            <div class="logo">
                <a href="index.php">
                    <h1>Library Management System</h1>
                </a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="adminlogin.php">Admin Login</a>
                    </li>

                    <li>
                        <a href="login.php">User Login</a>
                    </li>

                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix">

            </div>
    </section>
    <h1>User Login Form</h1>  
    <form action="loginsuccess.php" method="post" name="userregister">
    <label for="emailinp">Email:</label><br>
    <input type="text" id="emailinp" name="emailinp"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <br>
    <input type="submit" class="login" name="login" value="Login">
    </form>
</body>
</html>