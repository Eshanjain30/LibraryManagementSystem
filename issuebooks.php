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
    <br><br><br><br>
    <br><br><br><br>
    <br><br>
    <div class="usertable">
        <center>
        <table class="tabledata" border="3" cellspacing="5">
            <tr>
                <th>Sr. No.</th>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Book ID</th>
                <th>Book name</th>
                <th>Book Author</th>
                <th>Date-Time of Issue</th>

                <?php
                        $s_no = "";
                        $name="";
                        $book_id="";
                        $book_name="";
                        $book_author="";
                        $student_id="";
                        $date="";
                    
                        $query = "select issued_books.s_no,issued_books.issue_date,issued_books.book_name,authors.author_name,user.name,books.book_id,issued_books.student_id from issued_books left join user on issued_books.student_id = user.id left join books on issued_books.book_name = books.book_name left join authors on issued_books.book_author = authors.author_name";
                        $sql = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($sql)){
                            $s_no = $row['s_no'];
                            $name = $row['name'];
                            $book_id = $row['book_id'];
                            $book_name = $row['book_name'];
                            $book_author = $row['author_name'];
                            $student_id = $row['student_id'];
                            $date = $row['issue_date'];
                ?>
            </tr>
            <tr>
                <td> 
                    <?php
                        echo $s_no;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $student_id;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $name;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $book_id;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $book_name;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $book_author;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $date;
                    ?>
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