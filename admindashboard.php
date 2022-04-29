<?php
    require('functions.php');
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
    <section class="dashboard">
        <div class="cards">
            <div class="cardhead">Registered User</div>
            <div class="cardboady">
                <p>No. of registered users :  <?php echo get_user_count(); ?> </p>
            </div>
            <div class="cardbtn">
                <button class="btn" onclick='window.location.href = "registeredusers.php"'>View Registered Users</button>
            </div>
        </div>
        <div class="cards">
            <div class="cardhead">Registered Books</div>
            <div class="cardboady">
                <p>No. of registered books: <?php echo get_book_count(); ?></p>
            </div>
            <div class="cardbtn">
                <button class="btn" onclick='window.location.href = "regbooks.php"'>View Registered Books</button>
            </div>
        </div>
        <div class="cards">
            <div class="cardhead">Registered Category</div>
            <div class="cardboady">
                <p>No. of registered category: <?php echo get_cat_count(); ?></p>
            </div>
            <div class="cardbtn">
                <button class="btn" onclick='window.location.href = "regcat.php"'>View Registered Category</button>
            </div>
        </div>
        <div class="cards">
            <div class="cardhead">Registered Authors</div>
            <div class="cardboady">
                <p>No. of registered authors: <?php echo get_author_count(); ?></p>
            </div>
            <div class="cardbtn">
                <button class="btn" onclick='window.location.href = "regauthor.php"'>View Registered Authors</button>
            </div>
        </div>
        <div class="cards">
            <div class="cardhead">Issued Books</div>
            <div class="cardboady">
                <p>No. of issued books: <?php echo get_issued_books_count(); ?></p>
            </div>
            <div class="cardbtn">
                <button class="btn" onclick='window.location.href = "issuebooks.php"'>View Issued Books</button>
            </div>
        </div>
    </section>
</body>
</html>