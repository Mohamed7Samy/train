<?php
    $name = $_GET['name'];
    

    include('../admin/function/connect.php');

    $query = " SELECT * FROM product WHERE name = %'$name'%";

    $search = $conn->query($query);

    $m=$search->fetch_assoc();
    if ($conn -> query($query)) {
        echo $m['name'];
    }

    else {
        echo $conn -> error ;
    }
    
?>