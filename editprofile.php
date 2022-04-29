<?php
    session_start();
    $emailinp = $_SESSION['emailinp'];
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

    $sql = mysqli_query($conn,"select * from user where email = '$emailinp'");
    while($row = mysqli_fetch_array($sql)){
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
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="navbar">
        <div class="container1">
            <div class="logo">
                <a href="userdashboard.php">Library Management System
                </a>
            </div>
            <span><strong> <?php echo "Welcome:  " . $_SESSION['name']; ?></strong></span>
            <div class="menu text-right">
                <ul>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">My Profile</button>
                        <div class="dropdown-content">
                            <a href="viewprofile.php">View Profile</a>
                            <a href="editprofile.php">Edit Profile</a>
                            <a href="changepassword.php">Change Password</a>
                        </div>
                        </div>
                    </li>
                    <li>
                    <div class="dropdown">
                    <button class="dropbtn" onclick='window.location.href = "logout.php"'>Logout</button>
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
    <form action="update.php" method="post" name="useredit">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name"  size = "40" name="name" value="<?php echo $name; ?>"><br><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" size = "40" name="email" value="<?php echo $email; ?>"><br><br>
    <label for="mobile">Mobile Number:</label><br>
    <input type="text" id="mobile" size = "40" name="mobile" value="<?php echo $mobile; ?>"><br><br>
    <label for="address">Address:</label><br>
    <textarea rows="7" cols="42" name="address" id="address" value=""><?php echo $address; ?></textarea>
    <br><br>
    <input type="submit" class="update" value="Update">
    </form>
    </center>
</body>
</html>