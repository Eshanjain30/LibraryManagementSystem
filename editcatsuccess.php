<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    $ci = $_SESSION['ci'];
    if(isset($_POST['editcat'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $cat_name = $_POST['cat_name'];


    $query = mysqli_query($conn,"UPDATE `category` SET `cat_name` = '$cat_name' WHERE `category`.`cat_id` = '$ci'");
    $sql = mysqli_query($conn,$query);
    echo "
    <script language='javascript'>
    alert('Category $ci edited successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    ";
    }
?>