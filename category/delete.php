<?php
    include_once("../config.php");
    session_start();
    
        $id = $_GET['id'];
        $action = mysqli_query($connect, "DELETE FROM categories WHERE id='$id'");

        if($action){
            echo "<script>alert('Berhasil delete')</script>";
        } else {
            echo "<script>alert('Gagal delete')</script>";
        }

        header("Location: ".$baseURL."/category/index.php");
?>