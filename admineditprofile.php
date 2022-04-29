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
    <form action="adminupdate.php" method="post" name="adminedit">
    <label for="adminname">Full Name:</label><br>
    <input type="text" id="adminname"  size = "40" name="adminname" value="<?php echo $name; ?>"><br><br>
    <label for="adminemail">Email:</label><br>
    <input type="text" id="adminemail" size = "40" name="adminemail" value="<?php echo $email; ?>"><br><br>
    <label for="adminmobile">Mobile Number:</label><br>
    <input type="text" id="adminmobile" size = "40" name="adminmobile" value="<?php echo $mobile; ?>"><br><br>
    <label for="adminaddress">Address:</label><br>
    <textarea rows="7" cols="42" name="adminaddress" id="adminaddress" value=""><?php echo $address; ?></textarea>
    <br><br>
    <input type="submit" class="adminupdate" value="Update">
    </form>
    </center>
</body>
</html>