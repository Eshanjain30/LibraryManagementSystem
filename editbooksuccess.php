<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    $bn = $_SESSION['bn'];
    if(isset($_POST['editbook'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $book_name = $_POST['book_name'];
    $book_no = $_POST['book_no'];
    $book_price = $_POST['book_price'];
    $author_id = $_POST['author_id'];
    $cat_id = $_POST['cat_id'];


    $query = mysqli_query($conn,"UPDATE `books` SET `book_name` = '$book_name', `author_id` = '$author_id', `cat_id` = '$cat_id', `book_no` = '$book_no', `book_price` = '$book_price' WHERE `books`.`book_no` = '$bn'");
    $sql = mysqli_query($conn,$query);
    $bn = $_POST['book_no'];
    $_SESSION['bn'] = $bn;
    echo "
    <script language='javascript'>
    alert('Book Number $bn edited successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    ";
    }
?>