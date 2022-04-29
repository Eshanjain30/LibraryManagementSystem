<?php
    session_start();
    if(isset($_POST['login'])){
        $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $emailinp = $_POST['emailinp'];
    $password = $_POST['password'];
    $query = "select * from user where email = '$emailinp' and password = '$password' ";

    $sql = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($sql);
    if(!$row == "")
    {
        $_SESSION['emailinp'] = $_POST['emailinp'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['address'] = $row['address'];

        $name = $row['name'];
        echo "
                <script language='javascript'>
                alert('User Login Successful... Welcome $name');
                    window.location.href = 'userdashboard.php';
                </script> ";
    }
    else{

        echo "
        <script language='javascript'>
        alert('Wrong Email ID/Password Entered....Please Re enter to login');
            window.location.href = 'login.php';
        </script>"; 
    }
}
?>