<?php
    session_start();
    if(isset($_POST['adminlogin'])){
        $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $adminemail = $_POST['adminemail'];
    $adminpassword = $_POST['adminpassword'];
    $query = "select * from admin where email = '$adminemail' and password = '$adminpassword' ";

    $sql = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($sql);
    if(!$row == "")
    {
        $_SESSION['adminemail'] = $_POST['adminemail'];
        $_SESSION['adminid'] = $row['id'];
        $_SESSION['adminname'] = $row['name'];
        $_SESSION['adminemail'] = $row['email'];
        $_SESSION['adminpassword'] = $row['password'];
        $_SESSION['adminmobile'] = $row['mobile'];
        $_SESSION['adminaddress'] = $row['address'];

        $adminname = $row['name'];
        echo "
                <script language='javascript'>
                alert('Admin Login Successful... Welcome $adminname');
                    window.location.href = 'admindashboard.php';
                </script> ";
    }
    else{

        echo "
        <script language='javascript'>
        alert('Wrong Email ID/Password Entered....Please Re enter to login');
            window.location.href = 'adminlogin.php';
        </script>"; 
    }
}
?>