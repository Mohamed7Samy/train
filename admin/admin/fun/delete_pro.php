<?php

$id = $_GET['id'];

include('connect.php');
$delete = " DELETE FROM product WHERE id = '$id' ";
$conn->query($delete);

header('location:../products.php');