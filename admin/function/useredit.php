<?php
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];
$addresss = $_POST['address'];

if (!empty($password)) {
    $pass = md5($password);
    $updatepass = "UPDATE users set password = '$pass' WHERE id = $id ";
    $conn ->query($updatepass);
}

require_once('connect.php');
$updateuser = "UPDATE users set username = '$username' , phone = '$phone' , email = '$email' , 
gender = '$gender' , pr = '$priv' , addresss = '$addresss' WHERE id = '$id' ";

$query = $conn -> query($updateuser);

if ($query) {
    header("location: ../users.php");
}else {
    echo $conn -> error ;
}
?>