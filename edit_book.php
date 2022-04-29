<?php
    session_start();
    require('functions.php');
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $book_no="";
    $book_name="";
    $author_id="";
    $cat_id="";
    $book_price="";
    $query = "select * from books where book_no = $_GET[bn]";
    $_SESSION['bn'] = $_GET['bn'];
    $sql = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($sql)){
        $book_no = $row['book_no'];
        $book_name = $row['book_name'];
        $book_price = $row['book_price'];
        $author_id = $row['author_id'];
        $cat_id = $row['cat_id'];
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
    <br><br><br><br>
    <br><br><br><br>
    <br><br>
    <center>
    <div class="addbookform">
    <form action="editbooksuccess.php" method="post" name="editbook">
    <label for="book_name">Book Name:</label><br>
    <input type="text" id="book_name" name="book_name" value="<?php echo $book_name; ?>"><br>
    <label for="author_id">Author ID:</label><br>
    <input type="text" id="author_id" name="author_id" value="<?php echo $author_id; ?>"><br>
    <label for="cat_id">Category ID:</label><br>
    <input type="text" id="cat_id" name="cat_id" value="<?php echo $cat_id; ?>"><br>
    <label for="book_no">Book Number:</label><br>
    <input type="text" id="book_no" name="book_no" value="<?php echo $book_no; ?>"><br>
    <label for="book_price">Book Price:</label><br>
    <input type="text" id="book_price" name="book_price" value="<?php echo $book_price; ?>"><br>
    <br>
    <input type="submit" class="editbook" name="editbook" value="Edit Book">
    </form>
    </div>
    <center>
</body>
</html>