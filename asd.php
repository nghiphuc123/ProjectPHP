<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="ten" placeholder="Nhập tên"><br>
        Tuổi: <input type="text" name="tuoi" placeholder="Nhập tuổ  i "><br>
        <input type="submit" name="submit" value="Gửi">
        </form>


        <?php 
            while ($row = mysqli_fetch_array($queryy)){

                echo $row['tenn'];
            }
        
        ?>
</body>
</html>


<?php 

    include "../DACN2/db/connect.php";

    if(isset($_POST['submit'])){
        $ten = $_POST['ten'];
        $tuoi = $_POST['tuoi'];

        $sqlasd = "INSERT INTO tentuoi(tenn, tuoii) VALUES ('$ten', '$tuoi')";
        $queryy = mysqli_query($conn, $sqlasd);
    }

?>