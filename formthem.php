<?php 
 session_start();
    $sql_pdc = "SELECT * FROM sanpham";
    // $query_pdc = mysqli_query($conn,$sql_pdc);
    require_once '../DoAnChuyenNghanh2/db/connect.php';

    if(isset($_POST['submitThem'])){

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        $productName = $_POST['productname'];
        $gia = $_POST['price'];
        
        
        $sql_product = "INSERT INTO sanpham(image, tensp, gia) VALUE('".$image."', '$productName', '$gia')";
        move_uploaded_file($image_tmp, 'hinhanh/'.$image);
        $query = mysqli_query($conn, $sql_product);
        header('location: admin.php?page_layout=danhsach'); 
        if($query){
            header('location:admin.php');
        }
        
    }else{
        echo "Lỗi!";
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản phẩm</title>
</head>
<body>
    <div class="card-them">
        <form method="POST" action="" enctype="multipart/form-data">
                <label>Tên sản phẩm</label>
                <input type="text" name="productname"><br>
                
                <label>Hình Ảnh</label>
                <input type="file" name="image"><br>

                <label>Giá</label>
                <input type="text" name="price"><br>

                <input type="submit" name="submitThem" value="Thêm Sản phẩm">
        </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../DACN2/css/style.css">
</head>
<body>
<div class="boxcenter">
<h2>Đăng ký thành viên</h2>

<form action="" method="post" enctype="multipart/form-data">
    <!-- <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar"> 
    </div> -->

  <div class="container">
    <label for="uname"><b>Tên sản phẩm</b></label>
          <input type="text" placeholder="Nhập tên sản phẩm" name="productname" required>

    <label for="psw"><b>Hình ảnh</b></label>
          <input type="file" placeholder="Mật khẩu" name="image" required><br>

          <label for="psw"><b>Giá</b></label>
          <input type="text" placeholder="Nhập giá sản phẩm" name="price" required>
        
    <button type="submit" name="submitThem">Thêm sản phẩm</button>
  </div>

      </form>
    </div>

  </body>
</html>