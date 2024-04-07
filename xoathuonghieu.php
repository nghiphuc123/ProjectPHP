<?php 

    include "/wamp/www/DACN2/db/connect.php";

    if (isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $sql = "DELETE FROM thuonghieu WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header('location:thuonghieu.php');

?>