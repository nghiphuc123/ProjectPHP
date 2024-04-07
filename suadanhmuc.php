<?php 

    include "/wamp/www/DoAnChuyenNghanh2/db/connect.php";

    
    $id = $_GET['id'];
    

    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($query);

    if(isset($_POST['submitSua'])){
        $usersua = $_POST['productnameSua'];
        $imagesua = $_POST['imageSua'];
        $pricesua = $_POST['priceSua'];

        $sql = "UPDATE sanpham SET image = '$imagesua', tensp = '$usersua', gia = '$pricesua' WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header('location:admin.php');
    }

?>



<form method="POST" action="" enctype="multipart/form-data">
                <label>Tên sản phẩm</label>
                <input type="text" name="productnameSua" value="<?php echo $rows['$usersua']; ?>"><br>
                
                <label>Hình Ảnh</label>
                <input type="file" name="imageSua" value="<?php echo $rows['$imagesua']; ?>"><br>

                <label>Giá</label>
                <input type="text" name="priceSua" value="<?php echo $rows['$pricesua']; ?>"><br>

                <input type="submit" name="submitSua" value="Sửa Sản phẩm">
        </form>


