<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:index.php');
}

include('includes/header.php');
include('includes/sidebar.php');

?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">products</h1>

        </div>
    </div>
    <!--/.row-->

            <?php
            if(!isset($_GET['do'])){
                include('design/all_pro.php');
            }





?>



    <?php
    include('includes/footer.php');
    ?>