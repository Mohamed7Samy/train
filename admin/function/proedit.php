<?php
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
// $sale = $_POST['sale'];
$cat_id = $_POST['cat_id'];

include('connect.php');
$updatepro = "UPDATE product set name = '$name' , price = '$price'  , 
cat_id = '$cat_id' WHERE id = '$id' ";

$query = $conn -> query($updatepro);

if ($query) {
    header("location: ../products.php");
}else {
    echo $conn -> error ;
}
?>