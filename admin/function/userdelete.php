<?php
    $id = $_GET['id'];
    
    require_once('connect.php');

    $del = " DELETE FROM users WHERE id = '$id' ";

    if ($conn -> query($del)) {
        echo "message updated";
    }

    else {
        echo $conn -> error ;
    }
    
?>