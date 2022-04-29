<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminstyle.css">
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


            <div class="clearfix">

            </div>

    </section>
    <section class="navbar1">
        <div class="menu1 container2">
            <ul>
                    <li>
                    <div class="dropdown">
                    <button class="dropbtn" onclick='window.location.href = "admindashboard.php"'>Dashboard</button>
                    </div>
                    </li>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">Books</button>
                        <div class="dropdown-content">
                            <a href="addbook.php">Add New Book</a>
                            <a href="managebook.php">Manage Books</a>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">Category</button>
                        <div class="dropdown-content">
                            <a href="addcat.php">Add New Category</a>
                            <a href="managecat.php">Manage Category</a>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn">Author</button>
                        <div class="dropdown-content">
                            <a href="addauthor.php">Add New Author</a>
                            <a href="manageauthor.php">Manage Authors</a>
                        </div>
                        </div>
                    </li>
                    <li>
                    <div class="dropdown">
                    <button class="dropbtn" onclick='window.location.href = "issue.php"'>Issue Books</button>
                    </div>
                    </li>
            </ul>
        </div>
    </section>
    <div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br>
        <center>
        <table border="1" cellspacing="10">
            <tr>
                <th>Book Name</th>
                <th>Author Id</th>
                <th>Category Id</th>
                <th>Book Number</th>
                <th>Book Price</th>
                <th>action</th>
            </tr>
            <?php
                $query = "select * from books";
                $sql = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                <td><?php echo $row['book_name']; ?></td>
                <td><?php echo $row['author_id']; ?></td> 
                <td><?php echo $row['cat_id']; ?></td> 
                <td><?php echo $row['book_no']; ?></td> 
                <td><?php echo $row['book_price']; ?></td> 
                <td>
                <button class="btn1"><a  style = "text-decoration: none;" href="edit_book.php?bn=<?php echo $row['book_no']; ?>">Edit</a></buttton>
                <button class="btn1"><a   style = "text-decoration: none;" href="delete_book.php?bn=<?php echo $row['book_no']; ?>">Delete</a></buttton>
                </td>
                </tr> 
                <?php 
                }
            ?>
        </table>
        </center>
    </div>
</body>
</html>