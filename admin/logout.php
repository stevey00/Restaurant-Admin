<?php

include('security.php');

if(session_destroy()){
    header('location:login.php');
}


?>