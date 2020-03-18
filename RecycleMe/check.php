<?php
    session_start();
    include "connect.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users WHERE username='$username' and password='$password'"));
        if($query){
            $_SESSION['username'] = $query["username"];
            $_SESSION['id'] = $query['id'];
            header("Location: home.php");
        }
        else{
            echo "<script>alert('Password atau username salah')</script>";
            header("Location: login.php");
        }

    }
?>