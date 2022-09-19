<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    require_once('connect.php');

    $selectlogin = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
    $querylogin = $conn -> query($selectlogin);

    $user = $querylogin ->fetch_assoc();

    $id = $user['id'];
    $pr = $user['pr'];



    if ($querylogin -> num_rows > 0) {
        session_start();
        $_SESSION['login_id'] = $id;
        $_SESSION['pr'] = $pr;
        
        header("location: ../index.php");
    }else {
        header("location: ../login.php");
    }
?>