<?php
    session_start();
    $adminemail = $_SESSION['adminemail'];
    $name = $_POST['adminname'];
    $email = $_POST['adminemail'];
    $mobile = $_POST['adminmobile'];
    $address = $_POST['adminaddress'];
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = mysqli_query($conn,"UPDATE `admin` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `address` = '$address' WHERE `admin`.`email` = '$adminemail'");
    $adminemail = $_POST['adminemail'];
    $_SESSION['adminemail'] = $adminemail;
    $_SESSION['adminname'] = $name;
    $_SESSION['adminemail'] = $email;
    $_SESSION['adminmobile'] = $mobile;
    $_SESSION['adminaddress'] = $address;
    echo " 
    <script language='javascript'>
    alert('$name your data is updated successfully...');
    window.location.href = 'adminviewprofile.php';
    </script>
    ";
?>