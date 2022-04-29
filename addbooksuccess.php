<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    if(isset($_POST['addbook'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $book_name = $_POST['book_name'];
    $author_id = $_POST['author_id'];
    $cat_id = $_POST['cat_id'];
    $book_no = $_POST['book_no'];
    $book_price = $_POST['book_price'];
    $query = "insert into books values(null,'$book_name','$author_id','$cat_id','$book_no','$book_price')";
    $sql = mysqli_query($conn,$query);

    echo "
    <script language='javascript'>
    alert('Book Added Successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    
    ";
    }
?>