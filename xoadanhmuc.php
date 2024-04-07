<?php 

    include "/wamp/www/DoAnChuyenNghanh2/db/connect.php";

    if (isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $sql = "DELETE FROM danhmuc WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header('location:danhmuc.php');
?>