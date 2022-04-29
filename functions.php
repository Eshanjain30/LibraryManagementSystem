<?php
    function get_user_count(){
        $conn = mysqli_connect("localhost","root","","library");
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $user_count="";
        $query = 'select count(*) as user_count from user';
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            $user_count = $row['user_count'];
        }
        return($user_count);

    }
    function get_book_count(){
        $conn = mysqli_connect("localhost","root","","library");
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $book_count="";
        $query = 'select count(*) as book_count from books';
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            $book_count = $row['book_count'];
        }
        return($book_count);

    }
    function get_cat_count(){
        $conn = mysqli_connect("localhost","root","","library");
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $cat_count="";
        $query = 'select count(*) as cat_count from category';
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            $cat_count = $row['cat_count'];
        }
        return($cat_count);

    }
    function get_author_count(){
        $conn = mysqli_connect("localhost","root","","library");
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $author_count="";
        $query = 'select count(*) as author_count from authors';
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            $author_count = $row['author_count'];
        }
        return($author_count);

    }
    function get_issued_books_count(){
        $conn = mysqli_connect("localhost","root","","library");
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $issued_books_count="";
        $query = 'select count(*) as issued_books_count from issued_books';
        $sql = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($sql)){
            $issued_books_count = $row['issued_books_count'];
        }
        return($issued_books_count);

    }
?>