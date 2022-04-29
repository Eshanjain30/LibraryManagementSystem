<?php
    session_start();
    $name = $_SESSION['adminname'];
    $adminemail = $_SESSION['adminemail'];
    $password = $_POST['adminpassword'];
    $newpassword = $_POST['adminnewpassword'];
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = mysqli_query($conn,"UPDATE `admin` SET `password` = '$newpassword' WHERE `admin`.`password` = '$password'");
    echo " 
    <script language='javascript'>
    alert('$name your password is updated successfully...');
    window.location.href = 'adminviewprofile.php';
    </script>
    ";
?>