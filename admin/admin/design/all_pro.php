<div class="row">
    <div class="col-lg-12">

        <table class="table  table-hover table-bordered text-center ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">category</th>
                    <th scope="col">brand</th>
                    <th scope="col">count</th>
                    <th scope="col">rate</th>
                    <th scope="col">control</th>
                </tr>
            </thead>

            <?php
            include('fun/connect.php');

            $select = "SELECT * FROM product";
            $result = $conn->query($select);

            while ($row = $result->fetch_assoc()) 
            {  
            ?>



                <tbody>
                    <tr>
                        <td scope="col"><?php echo $row['id'];   ?></td>
                        <td scope="col"><?php echo $row['name'];   ?></td>
                        <td scope="col"><?php echo $row['price'];   ?></td>
                        <td scope="col"><?php $cover = $row['image'];  ?>
                            <img style="width: 100px;
                            height: 100px;" src="image/<?php echo $cover  ?>"></td>
                        <td scope="col"><?php $cat_id = $row['cat_id'];
                                        $sql = "SELECT * FROM category WHERE id = '$cat_id' ";
                                        $res = $conn->query($sql);
                                        $cat = $res->fetch_assoc();
                                        echo $cat['name'];

                                        ?></td>
                        <td scope="col"><?php $brand_id = $row['brand_id'];
                                        $sql = "SELECT * FROM brand WHERE id = '$brand_id' ";
                                        $res = $conn->query($sql);
                                        $brand = $res->fetch_assoc();
                                        echo $brand['name'];?></td>
                        <td scope="col"><?php echo $row['count'];   ?></td>
                        <td scope="col"><?php echo $row['rate'];   ?></td>
                        <td scope="col">
                            <button class="btn btn-success"><a href="">edit</a></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $row['id'];   ?>">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $row['id'];   ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want delete this product ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                                            <button class="btn btn-danger"><a href="fun/delete_pro.php?id=<?php echo $row['id'];   ?>">confirm</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <?php
                }   
                ?>

        </table>
        <!-- <br> -->
        <button class="btn btn-info" href="">add new</button>

    </div>
</div>