<?php 
    include "../DACN2/db/connect.php";
    session_destroy();
    header('location:index2.php');
?>