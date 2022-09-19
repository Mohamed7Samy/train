<?php
require_once('function/connect.php');
$id = $_GET['id'];
$selectpro = "SELECT * FROM product WHERE id = '$id' ";
$query = $conn -> query($selectpro);
$products = $query -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">

        <form method="post" action="function/proedit.php" enctype="multipart/form-data">
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $products['id']; ?>">
                <label for="username" style="font-weight: bold;" > name :</label>
                <input type="text" class="form-control" value="<?= $products['name']?>" name="name">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold;"> price :</label>
                <input type="text" class="form-control" value="<?= $products['price']?>" name="price">
            </div>
            <!-- <div class="form-group">
                <label for="phone" style="font-weight: bold;"> sale :</label>
                <input type="text" class="form-control" value="<?= $products['sale']?>" name="sale">
            </div> -->
            <div class="form-group">
                <label for="phone" style="font-weight: bold;"> image :</label>
                <input type="file" class="form-control" name="img" value="<?= $products['img'] ?>">
            </div>
            <div class="form-group">
            <select class="form-control" name="cat_id" >
                <?php
                include('function/connect.php');
                $sel_cat = " SELECT * FROM category ";
                $query = $conn -> query($sel_cat);
                foreach ($query as $category){
                ?>
                <option value = "<?php echo $category['id'] ?>"
                <?= $category['id'] == $id ? 'selected' : "" ?> ><?php echo $category['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>