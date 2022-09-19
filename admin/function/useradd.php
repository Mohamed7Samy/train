<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $addresss = $_POST['address'];
    $phone = $_POST['phone'];
    $priv = $_POST['priv'];
    $gender = $_POST['gender'];

    require_once('connect.php');
    $insert = "INSERT INTO users( username, password, email , address, phone, pr, gender) 
    VALUES ('$username','$password','$email','$addresss','$phone','$priv','$gender')";

    $query = $conn -> query($insert);

    if ($query) {
        header("location: ../users.php");
    }else {
        echo $conn -> error ;
    }
?>