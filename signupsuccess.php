<?php
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $query = "insert into user values(null,'$name','$email','$password',$mobile,'$address')";
    $sql = mysqli_query($conn,$query);
?>
<script language="javascript">
    alert("User Registration Successful..You can login now");
    window.location.href = "login.php";
</script>