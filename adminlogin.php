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
    <h1>Admin Login Form</h1>  
    <form action="adminloginsuccess.php" method="post" name="adminregister">
    <label for="adminemail">Email:</label><br>
    <input type="text" id="adminemail" name="adminemail"><br>
    <label for="adminpassword">Password:</label><br>
    <input type="password" id="adminpassword" name="adminpassword"><br>
    <br>
    <input type="submit" class="adminlogin" name="adminlogin" value="Login">
    </form>
</body>
</html>