<?php 
    include "connect.php";
    if(isset($_GET['no'])){
        $no = $_GET['no'];
        mysqli_query($db,"DELETE FROM userdata WHERE no='$no'");
        header("Location: myrecycle.php");
    }

?>