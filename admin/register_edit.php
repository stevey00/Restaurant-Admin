<?php
include('security.php');
// session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
            <div class="card-body">

                <?php


                require 'database/dbconfig.php';

                if (isset($_POST['edit_btn'])) {
                    $id = $_POST['edit_id'];

                    $query = "SELECT * FROM register WHERE user_id = '$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                ?>

                        <form action="./code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['user_id'] ?>">
                            <div class="form-group">
                                <label for="">User name:</label>
                                <input type="text" class="form-control" value="<?php echo $row['username'] ?>" name="edit_username" placeholder="Enter User name">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="edit_email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" value="<?php echo $row['password'] ?>" name="edit_password" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="">Salary:</label>
                                <input type="number" class="form-control" value="<?php echo $row['salary'] ?>" name="edit_salary" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Current role:</label><br>
                                <input type="text" class="form-control" value="<?php echo $row['category'] ?>" readonly="readonly">
                                <label for="">Change role:</label><br>
                                <label for="">Admin</label>
                                <input type="radio" name="edit_category" value="admin">
                                <label for="">Worker</label>
                                <input type="radio" name="edit_category" value="worker">
                            </div>

                            <a href="register.php" class="btn btn-danger"> Cancel</a>
                            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                        </form>
                <?php
                    }
                }

                ?>

            </div>
        </div>
    </div>

</div>







<?php
include('includes/scripts.php');
?>