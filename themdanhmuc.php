
<?php 
    require('db/connect.php');
    if(isset($_POST['submitThem'])){
        $danhmucName = $_POST['tendanhmuc'];
        $sql_danhmuc = "INSERT INTO danhmuc(tendanhmuc) VALUE('".$danhmucName."')";
        mysqli_query($conn, $sql_danhmuc);    
        header('location:danhmuc.php'); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh Mục</title>
</head>
<body>
    <div class="card-them">
        <form method="post" >
            <thead>
                <label>Tên danh mục</label>
                <input type="text" name="tendanhmuc"><br>
                <input type="submit" name="submitThem" value="Thêm danh mục"></input>
                </thead>
        </form>
    </div>
</body>
</html>