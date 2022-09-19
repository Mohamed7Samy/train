<?php
    $id = $_GET['id'];
    
    require_once('connect.php');

    $del = " DELETE FROM product WHERE id = '$id' ";

    if ($conn -> query($del)) {
        header("location: ../products.php");
    }
?>