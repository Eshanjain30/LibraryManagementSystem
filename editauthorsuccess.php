<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    $ai = $_SESSION['ai'];
    if(isset($_POST['editauthor'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $author_name = $_POST['author_name'];


    $query = mysqli_query($conn,"UPDATE `authors` SET `author_name` = '$author_name' WHERE `authors`.`author_id` = '$ai'");
    $sql = mysqli_query($conn,$query);
    echo "
    <script language='javascript'>
    alert('Author $ai edited successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    ";
    }
?>