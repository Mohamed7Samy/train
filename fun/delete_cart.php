<?php
    $id = $_GET['id'];
    
    require_once('../admin/function/connect.php');

    $del = " DELETE FROM cart WHERE id = '$id' ";

    if ($conn -> query($del)) {
        header("location: ../cart.php");
    }
?>