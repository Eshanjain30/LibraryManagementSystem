<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    echo "<script language='javascript'> alert('$adminname you have logged out successfully....Please Visit Again')</script> ";
    session_unset();
    session_destroy();
?>
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
</body>
</html>