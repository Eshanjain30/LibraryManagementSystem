<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    if(isset($_POST['addcat'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $cat_name = $_POST['cat_name'];
    $query = "insert into category values(null,'$cat_name')";
    $sql = mysqli_query($conn,$query);

    echo "
    <script language='javascript'>
    alert('New Category Added Successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    
    ";
    }
?>