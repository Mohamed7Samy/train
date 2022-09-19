<?php
                require_once('function/connect.php');
                $pointer_pr = $_SESSION['pr'];
                $select_pr = " SELECT * FROM users WHERE pr < '$pointer_pr'";
                $query_pr = $conn -> query($select_pr);
                $pr = $query_pr ->fetch_assoc();
                $id = 0;
                ?>
                        <a href = "?action=add" class = "btn btn-info" >add user</a>
                    
                        

                        <br>
                        <br>
                        <table border = "3" cellspacing = "5" cellpadding = "5">
                            <thead>
                                <th>id</th>
                                <th>username</th>
                                <th>address</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>privliges</th>
                                <th>gender</th>
                                <?php if ($pr['pr'] < 3) { ?>
                                <th>controls</th>
                                <?php }; ?> 
                                                    
                            </thead>
                            <tbody>
            <?php
                foreach ($query_pr as $users) {
            ?>
                                <tr>
                                    <td><?php echo ++$id?> </td>
                                    <td><?php echo $users['username'] ?></td>
                                    <td><?php echo $users['address'] ?></td>
                                    <td><?php echo $users['phone'] ?></td>
                                    <td><?php echo $users['email'] ?></td>
                                    <td><?php if($users['pr'] == 1){echo 'user';};
                                              if ($users['pr'] == 2) {echo 'admin';};
                                              if ($users['pr'] == 3) {echo 'owner';};?></td>
                                    <td><?php echo $users['gender'] == 1 ? 'male' : 'female' ?></td>
                                    <?php if ($users['pr'] <3) { ?>
                                    <td>
                                        <a href = "?action=edit&id=<?= $users['id']?>" class = "btn btn-primary">edit</a>

                                        <button data-id="<?= $users['id'] ?>" type="button" class=" btn btn-danger btn-sml" data-toggle="modal" data-target="#m<?php echo $users['id'] ?>">
                                            delete
                                    </button>

                                                    <!-- The modal -->
                                        <div class="modal fade" id="m<?= $users['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabel"></h4>
                                                    </div>
                                                        <div class="modal-body">
                                                            <p>are you srue</p> 
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button delete-id="<?= $users['id'] ?>" type="button" class="showModal btn btn-danger" data-dismiss="modal">Confirm</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <a href = "function/userdelete.php?id=<?= $users['id']?>" class = "btn btn-danger">delete</a> -->
                                        
                                    </td>
                                    <?php } ?> 
                                </tr>
                    <?php } ?>    
                            </tbody>
                        </table>
                        