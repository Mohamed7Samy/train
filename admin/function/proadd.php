<?php

include('connect.php');
    $name = $_POST['name'];
    $price = $_POST['price'];
    // $sale = $_POST['sale'];
    $category = $_POST['category'];

    $imagename = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
        
if ($_FILES['img']['error'] == 0) {
    $extension = ['jpg','gif','png','jpeg'];
    $ext = pathinfo($imagename , PATHINFO_EXTENSION);
    
    if (in_array($ext , $extension)) {
        
        if ($_FILES['img']['size'] < 2000000) {
            $newname = md5(uniqid()) . "." .$ext;
            move_uploaded_file($temp, '../images/'.$newname);
        }else {
            echo "file is too big";
        }
    }else {
        echo "wrong file";
    }
}else {
    echo "you must upload an image";
}

    
    $inser = "INSERT INTO product( name , price , images , cat_id,seller_id) 
    VALUES ('$name','$price','$newname','$category')";

    $query = $conn -> query($inser);

    if ($query) {
        header("location: ../products.php");
    }else {
        echo $conn -> error ;
    }
?>