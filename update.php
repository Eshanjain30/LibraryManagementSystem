<?php
    session_start();
    $emailinp = $_SESSION['emailinp'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = mysqli_query($conn,"UPDATE `user` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `address` = '$address' WHERE `user`.`email` = '$emailinp'");
    $emailinp = $_POST['email'];
    $_SESSION['emailinp'] = $emailinp;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['address'] = $address;
    echo " 
    <script language='javascript'>
    alert('$name your data is updated successfully...');
    window.location.href = 'viewprofile.php';
    </script>
    ";
?>