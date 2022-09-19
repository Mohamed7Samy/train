
                        <a href = "?action=add" class = "btn btn-info" >add product</a>
                    
                        

                    <br>
                    <br>
                    <table border = "3" cellspacing = "5" cellpadding = "5">
                        <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <!-- <th>sale</th> -->
                            <th>img</th>
                            <th>category</th>
                            <th>controls</th>
                        </thead>
                        <tbody>
        <?php
            require_once('function/connect.php');
            $select_products = " SELECT * FROM product";
            $query = $conn -> query($select_products);
            $id = 0;
            foreach ($query as $products) {
        ?>
                            <tr>
                                <td><?php echo ++$id?> </td>
                                <td><?php echo $products['name'] ?></td>
                                <td><?php echo $products['price'] ?></td>
                                <!-- <td><?php echo $products['sale'] ?></td> -->
                                <td><img style=" width:50px; height:50px" src="images/<?php  echo $products['images']?>"></td>
                                <td>
                                    <?php
                                      $cat_id = $products['cat_id'];
                                      $select_cat = " SELECT name FROM category WHERE id = $cat_id ";
                                      $category = $conn -> query($select_cat) -> fetch_assoc();
                                      echo $category['name'];
                                    ?>  
                                </td>
                                <td>
                                    <a href = "?action=edit&id=<?= $products['id']?>" class = "btn btn-primary">edit</a>
                                    <a href = "function/prodelete.php?id=<?= $products['id']?>" class = "btn btn-danger">delete</a>
                                    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
delete
</button>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
<!-- <div class="modal-dialog" role="document"> -->
<!-- <div class="modal-content"> -->
  <!-- <div class="modal-header"> -->
    <!-- <h5 class="modal-title" id="exampleModalLabel">warning :</h5> -->
    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
      <!-- <span aria-hidden="true">&times;</span> -->
    <!-- </button> -->
  <!-- </div> -->
  <!-- <div class="modal-body"> -->
  <!-- </div> -->
  <!-- <div class="modal-footer"> -->
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-danger">delete</button> -->
  <!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
                                </td>
                            </tr>
                <?php } ?>    
                        </tbody>
                    </table>