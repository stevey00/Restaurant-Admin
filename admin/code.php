<?php

    include('security.php');
    // session_start();

    require 'database/dbconfig.php';


    if(isset($_POST['registerbtn']))
    {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $category = $_POST['category'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
       

        if($password === $confirmpassword){
            $query = "INSERT INTO register (username, email, password, salary, category)
            VALUES ('$username', '$email', '$password', $salary, '$category')";
            // $query_run = mysqli_query($connection, $query);
            $query_run = $connection->query($query);

            if($query_run){
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                header('location: register.php');
            }
            else{
                $_SESSION['status'] = "Admin Profile Not Added";
                header('location: register.php');
            }
        }
        else{
            $_SESSION['status'] = "Password and Confirm Password does not match";
            header('location: register.php');
        }

    }


    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $salary = $_POST['edit_salary'];
        $category = $_POST['edit_category'];

        $query = "UPDATE register SET username='$username', email='$email', password='$password', salary='$salary', category='$category' WHERE user_id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = 'Your data is updated successfully';
            header('location: register.php');
        }
        else
        {
            $_SESSION['status'] = 'Your data is not updated';
            header('location: register.php');
        }
    }

    
    if(isset($_POST['delete_btn']))
    { 
        $id = $_POST['delete_id'];


        $query = "DELETE FROM register WHERE user_id = '$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = 'Your data has been deleted successfully';
            header('location: register.php');
        }
        else
        {
            $_SESSION['status'] = 'Your data has not been deleted';
            header('location: register.php');
        }

    }


    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['emaill'];
        $password_login = $_POST['passwordd'];

        $query = "SELECT * FROM register WHERE email = '$email_login' AND password = '$password_login'";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_fetch_array($query_run))
        {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else
        {
            $_SESSION['status'] = 'Invalid email or password';
            header('Location: login.php');
        }
    }

?>