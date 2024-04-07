<?php 
 session_start();
 require_once '../DoAnChuyenNghanh2/db/connect.php';
    $sql_pdc = "SELECT * FROM thuonghieu";
    $query_pdc = mysqli_query($conn,$sql_pdc);

    if(isset($_POST['submitThem'])){

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        $thuonghieuName = $_POST['thuonghieuname'];
        $mota = $_POST['mota'];
        
        
        $sql_product = "UPDATE thuonghieu SET tenthuonghieu = '$thuonghieuName' , imagethuonghieu = '$image' , motathuonghieu = '$mota'";
        move_uploaded_file($image_tmp, 'hinhanh/'.$image);
        $query = mysqli_query($conn, $sql_product);
        header('location: admin.php?page_layout=danhsach'); 

        if($query){
            header('location:thuonghieu.php');
        }
        
    }else{
        echo "Lỗi!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thương Hiệu</title>
</head>
<body>
    <div class="card-them">
        <form method="POST" action="" enctype="multipart/form-data">
                <label>Tên thương hiệu</label>
                <input type="text" name="thuonghieuname"><br>
                
                <label>Hình Ảnh</label>
                <input type="file" name="image"><br>

                <label>mô tả</label>
                <input type="text" name="mota"><br>

                <input type="submit" name="submitThem" value="Thêm thương hiệu">
        </form>
    </div>
</body>
</html>