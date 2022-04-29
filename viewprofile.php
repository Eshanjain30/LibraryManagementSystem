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
            <br>
            <br>
            <br>

            <table border='1'style="width: 1000px;">
                <tr>
                    <th>Sr.No.</th>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Id</td>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Name</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Password</td>
                    <td><?php echo $password; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mobile</td>
                    <td><?php echo $mobile; ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Address</td>
                    <td><?php echo $address; ?></td>
                </tr>
            </table>
    </center>
</body>
</html>