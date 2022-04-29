<?php
    session_start();
    $name = $_SESSION['name'];
    $emailinp = $_SESSION['emailinp'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = mysqli_query($conn,"UPDATE `user` SET `password` = '$newpassword' WHERE `user`.`password` = '$password'");
    echo " 
    <script language='javascript'>
    alert('$name your password is updated successfully...');
    window.location.href = 'viewprofile.php';
    </script>
    ";
?>