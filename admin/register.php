<?php
include('security.php');
// session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="./code.php " method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">User name:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter User name">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm password</label>
                        <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm password">
                    </div>
                    <div class="form-group">
                        <label for="">Salary:</label>
                        <input type="number" class="form-control" name="salary" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Role:</label><br><br>
                        <label for="">Admin</label>
                        <input type="radio" name="category" value="admin">
                        <label for="">Worker</label>
                        <input type="radio" name="category" value="worker">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Button trigger modal -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin profile
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Add Admin Profile
                </button>
            </h6>
        </div>
        <div class="card-body">


            <?php

            if (isset($_SESSION['success']) &&  $_SESSION['success'] != "") {
                echo '<h2 class="bg-primary text.white">' . $_SESSION['success'] . '</h2>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['status']) &&  $_SESSION['status'] != "") {
                echo '<h2 class="bg-danger text.white">' . $_SESSION['status'] . '</h2>';
                unset($_SESSION['status']);
            }

            ?>

            <div class="table-responsive">

                <?php

                require 'database/dbconfig.php';

                $query = "SELECT * FROM register";
                // $query_run = mysqli_query($connection, $query);
                $query_run = $connection->query($query);

                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Salary</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>

                                <tr>
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['salary']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td>
                                        <form action="./register_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['user_id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['user_id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<?php
include('includes/scripts.php');
// include('includes/footer.php');
?>