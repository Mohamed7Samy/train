<div class="row">
    <div class="col-lg-12">

        <form method="post" action="function/proadd.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username" style="font-weight: bold;"> name :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight: bold;"> price :</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="phone" style="font-weight: bold;"> sale :</label>
                <input type="text" class="form-control" name="sale">
            </div>
            <div class="form-group">
                <label for="phone" style="font-weight: bold;"> image :</label>
                <input type="file" class="form-control" name="img" multiple="" placeholder="img">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail" style="font-weight: bold;"> category :</label>
                <select class="form-control" name="category" >
                <?php
                include('function/connect.php');
                $sel_cat = " SELECT * FROM category ";
                $query = $conn -> query($sel_cat);
                foreach ($query as $category){
                ?>
                <option value = "<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>   
    </div>  
</div>            