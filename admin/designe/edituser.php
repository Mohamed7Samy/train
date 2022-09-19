<?php
require_once('function/connect.php');
$id = $_GET['id'];
$selectuser = "SELECT * FROM users WHERE id = '$id' ";
$query = $conn -> query($selectuser);
$user = $query -> fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">

        <form method="post" action="function/useredit.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <label for="username" style="font-weight: bold;"> username :</label>
                <input type="text" class="form-control" value="<?= $user['username']?>" name="username">
            </div>
            <div class="form-group">
                <label for="password" style="font-weight: bold;"> password :</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold;"> email :</label>
                <input type="text" class="form-control" value="<?= $user['email']?>" name="email">
            </div>
            <div class="form-group">
                <label for="phone" style="font-weight: bold;"> phone :</label>
                <input type="text" class="form-control" value="<?= $user['phone']?>" name="phone">
            </div>
            <div class="form-group">
                <input type="radio" name="gender" id="inlineradio1" value="1" 
                <?= $user['gender'] == 0 ? 'checked' : '' ?>>
                <label for="inlineradio1">male</label>
            <div class="form-group">
            <div class="form-group">
                <input type="radio" name="gender" id="inlineradio2" value="2"
                <?= $user['gender'] == 1 ? 'checked' : '' ?>>
                <label for="inlineradio2">female</label>
            <div class="form-group">
                <label for="exampleInputEmail" style="font-weight: bold;"> address :</label>
                <input type="text" class="form-control" value="<?= $user['address']?>" name="addresss" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail" style="font-weight: bold;"> privliges :</label>
                <select class="form-control" name="priv" >
                <option value = "0"  <?= $user['pr'] == 0 ? 'selected' : '' ?>>admin</option>
                <option value = "1"  <?= $user['pr'] == 1 ? 'selected' : '' ?>>user</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>   
    </div>  
</div>         