<?php
        session_start();
        $current = 'massages';
        require_once('includes/header.php');
        require_once('includes/sidebar.php');
    ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">massages</h1>
                        
                    </div>
                    <div>
                    <?php
                require_once('function/connect.php');
                
                $massages = " SELECT * FROM massages ";
                $query_m = $conn -> query($massages);
                ?>
                        
                        <br>
                        <br>
                        <table border = "3" cellspacing = "5" cellpadding = "5">
                            <thead>
                                <th>username</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>view</th>
                                <th>show message</th>                     
                            </thead>
                            <tbody>
                                <?php
                                    
                                    foreach ($query_m as $all_massages) {   
                                ?>
                                <tr>
                                    <td><?php echo $all_massages['name'] ?></td>
                                    <td><?php echo $all_massages['phone'] ?></td>
                                    <td><?php echo $all_massages['email'] ?></td>
                                    <td><?php echo $all_massages['view'] == 0 ?"UnRead":"Read" ?></td>
                                    <td>
                                    <button data-id="<?= $all_massages['id'] ?>" type="button" class="showModal btn btn-primary btn-sml" data-toggle="modal" data-target="#m<?php echo $all_massages['id'] ?>">
                                            show message
                                    </button>

                                                    <!-- The modal -->
                                        <div class="modal fade" id="m<?php echo $all_massages['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="modalLabel"></h4>
                                                    </div>
                                                        <div class="modal-body">
                                                            <?php echo $all_massages['messages'] ;?> 
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                    <?php } ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
     
    </script>
<?php
    include('includes/footer.php');
?>
<script src="js/message-ajax.js"></script>    