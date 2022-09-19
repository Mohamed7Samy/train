<?php
     session_start();
     if(isset($_SESSION['login_site'])){
         $user_id = $_SESSION['login_site']['id'];
     }
    $id_pro = $_GET['id'];
    
   

    require_once('../admin/function/connect.php');
    $insert = "INSERT INTO cart ( user_id,pro_id  ) 
    VALUES ('$user_id','$id_pro')";

    $query = $conn -> query($insert);

    if ($query) {
        header("location: ../cart.php");
    }else {
        echo $conn -> error ;
    }
?>