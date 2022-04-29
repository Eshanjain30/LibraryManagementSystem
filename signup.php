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
    <h1>User Registration Form</h1>  
    <form action="signupsuccess.php" method="post" name="userregister">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="mobile">Mobile Number:</label><br>
    <input type="text" id="mobile" name="mobile"><br>
    <label for="address">Address:</label><br>
    <textarea rows="3" col="40" name="address" id="address"></textarea>
    <br>
    <input type="submit" class="submit" value="Register">
    </form>
</body>
</html>