<?php
    session_start();
    $adminname = $_SESSION['adminname'];
    if(isset($_POST['addauthor'])){
    $conn = mysqli_connect("localhost","root","","library");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $author_name = $_POST['author_name'];
    $query = "insert into authors values(null,'$author_name')";
    $sql = mysqli_query($conn,$query);

    echo "
    <script language='javascript'>
    alert('New Author Added Successfully by $adminname');
    window.location.href = 'admindashboard.php';
    </script>
    
    ";
    }
?>