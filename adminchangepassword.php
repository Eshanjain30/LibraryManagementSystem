<?php
    session_start();
    $adminemail = $_SESSION['adminemail'];
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id = "";
    $name = "";
    $email = "";
    $password = "";
    $mobile = "";
    $address = "";

    $sql = mysqli_query($conn,"select * from admin where email = '$adminemail'");
    while($row = mysqli_fetch_assoc($sql)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $mobile = $row['mobile'];
        $address = $row['address'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="navbar">
        <div class="container1">
            <div class="logo">
                <a href="admindashboard.php">Library Management System
                </a>
            </div>
            <span><strong> <?php echo "Welcome:  " . $_SESSION['adminname']; ?></strong></span>
            <div class="menu text-right">
                <ul>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">My Profile</button>
                        <div class="dropdown-content">
                            <a href="adminviewprofile.php">View Profile</a>
                            <a href="admineditprofile.php">Edit Profile</a>
                            <a href="adminchangepassword.php">Change Password</a>
                        </div>
                        </div>
                    </li>
                    <li>
                    <div class="dropdown">
                    <button class="dropbtn" onclick='window.location.href = "adminlogout.php"'>Logout</button>
                    </div>
                    </li>
                </ul>
            </div>
    </section>
    <center>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <form action="adminupdatepassword.php" method="post" name="adminpassedit">
    <label for="adminpassword">Enter Old Password:</label><br><br>
    <input type="password" id="adminpassword" size = "40" name="adminpassword"><br><br>
    <label for="adminnewpassword">Enter New Password:</label><br><br>
    <input type="password" id="adminnewpassword" size = "40" name="adminnewpassword"><br><br>
    <input type="submit" class="adminnewpass" value="Update Password">
    </form>
    </center>
</body>
</html>