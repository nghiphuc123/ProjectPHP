<?php 
$host = "localhost";
$userlocal = "root";
$passlocal = "";
$dbname = "webbangiay";

    $conn = new mysqli($host, $userlocal, $passlocal,$dbname);

    if($conn -> connect_error){
        die("Kết nối không thành công". $conn->connect_error);
    }
    // echo "Kết nối thành công";
    session_start();
?>