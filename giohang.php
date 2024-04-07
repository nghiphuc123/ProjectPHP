<?php
        include "../DACN2/db/connect.php";
   $sql_giohang = mysqli_query($conn, "SELECT * FROM giohang");
   
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop quần áo N&T</title>
    <link rel="stylesheet" href="../DACN2/css/style1.css">
    <link rel="stylesheet" href="icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-up-direction-arrow-icon-png-image_4243638.jpg"width="20" alt=""></button> -->

<!-- <style>

#myBtn {
    display: none;
    position: fixed;
    bottom: 10px;
    right: 43px;
    z-index: 99;
    font-size: 18px;
    border: 1px;
    outline: none; 
    background-color: rgb(246, 236, 236);
    color: rgb(9, 9, 9);
    cursor: pointer;
    padding: 15px;
    border-radius: 100px;
}

#myBtn:hover {
  background-color: #555;
}
</style> -->


<!-- <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script> -->
    
</head>
<body>


    <div id="App">
        <div id="header">
            <div id="logo">
                <a href="" class="brand">
                    <img src="https://beedesign.com.vn/wp-content/uploads/2020/08/tao-logo-shop-quan-ao-ny.jpg" 
                    alt="Hinh brand">
                </a>
            </div>

            <div id="logo">
                <div style="position: fixed;">
                <a href="../DACN2/giohang.php" class="brand">
                    <img src="https://img.lovepik.com/free-png/20210924/lovepik-shopping-cart-icon-png-image_401363020_wh1200.png" width="20px" 
                    alt="Hinh brand">
                </a>
                </div>
            </div>
        

           <ul id="nav">
                <li><a href="index2.php">Trang chủ</a></li>
                <li><a href="">Bán chạy</a></li>
                <li><a href="">Khuyến mãi</a></li>
                <li><a href="">Sản phẩm mới</a></li>
                <li>
                    <a href="">Danh mục</a>
                    <ul class="subnav"><?php
                    while($row = mysqli_fetch_array($query)){?>
                        <li><a href=""><?php echo $row['tendanhmuc']; ?></a></li>
                        <!-- <li><a href="">Thời trang nam  </a></li>
                        <li><a href="">Phụ kiện </a></li>
                        <li><a href="">Unisex</a></li> -->
                    </li>
                    <?php } ?>
                    </ul>
                    <li>
                        <a href="">Thương hiệu</a>
                        <ul class="subnav"><?php
                        $selectpro = "SELECT * FROM danhmuc WHERE tendanhmuc";
                $ketqua = mysqli_query($conn,$selectpro);
                while ($row = mysqli_fetch_array($query_look)){
                    
                    ?>
                            <li><a href="">Adidas</a></li>
                            <!-- <li><a href="">Nike</a></li>
                            <li><a href="">Puma</a></li>
                            <li><a href="">New Balance</a></li>
                            <li><a href="">Zara</a></li>
                            <li><a href="">Vans</a></li>
                            <li><a href="">Fila</a></li> -->
                        </li>
                        <?php } ?>
                        
                        
                    </li>
                </ul>
                <li>
                    <a href="">Tài khoản: <?=$_SESSION['username']; ?></a>
                    <ul class="subnav">
                            <li><a href="formdangnhap.php">Đăng nhập</a></li>
                            <li><a href="formdangky.php">Đăng ký</a></li>
                            <li><a href="dangxuat.php">Đăng xuất</a></li>
                        </li>
                </li>
        </div>
    </div>
    

    <div class="container-fluid">
        <div class="card-header" style="text-align: center;">
            <h2>Giỏ hàng</h2>
        </div>

        <!-- <div class="nutthem">
            <a href="formthem.php" class="btn btn-success">Thêm</a>
        </div> -->

        <!-- <form action="admin.php?quanly=submittimkiemadmin" method="post">
            <div>
                <input type="text" name="tukhoaadmin">
                <input type="submit" name="submittimkiemadmin">
            </div>
        </form> -->

        <form action="" method="post">

        <div class="card-body">
            <table class="table" method="post">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá Tổng</th>
                        <th>Thao tác</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $total = 0;
                        $i = 1;
                        while($row = mysqli_fetch_array($sql_giohang)){
                            $subtotal = $row['soluong'] * $row['giagiohang'];
                            $total += $subtotal;
                               ?> <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td>
                                        <img src="hinhanh/<?php echo $row['imagegiohang'] ?>"width="150px;">
                                        
                                    </td>
                                    <td><?php echo $row['tenspgiohang'] ?></td>
                                    <td><?php echo number_format($row['giagiohang']). " VNĐ" ?></td>    
                                    <td><?php echo $row['soluong'] ?></td>     
                                    <td><?php echo number_format($subtotal). " VNĐ" ?></td>                             
                                    <td> <a class="btn btn-primary" href="xoagiohang.php?id=<?php echo $row['id']; ?>">Xóa</a> <a class="btn btn-success"href="suagiohang.php?id=<?php echo $row['id']; ?>">Sửa số lượng</a></td>                                    
                                </tr>

                                <?php } ?>
                                <tr>
                                    <td style="text-align: center;" colspan="7">Tổng tiền: <?php echo number_format($total). " VNĐ" ?></td>
                                </tr>
                                
                                <tr>
                                    <td style="text-align: center;" colspan="7"><a href="index2.php">Tiếp tục mua hàng</a></td>
                                </tr>
                        
                    </tbody>
            </table>
        </div>
        <!-- <div style="left:10px; margin-bottom:20px;">
            <input type="submit" class="btn btn-success" name="submitgiohang" value="Cập nhật giỏ hàng">
        </div> -->
        </form>


        <form action="" method="post">
       <thead>
        <div>
            Tên người nhận: <input type="text" name="txtten">
        </div>

        <div>
            Địa chỉ: <input type="text" name="txtdiachi">
        </div>

        <div>
            Số điện thoại: <input type="text" name="txtsdt">
        </div>
        
        <div>
            Mô tả: <input type="text" name="motagiohang">
        </div>

        <div>
            <select name="giaohang">
                <option>Chọn hình thức thanh toán</option>
                <option value="1">Thanh toán ATM hoặc MoMo</option>
                <option value="0">Thanh toán tiền mặt trực tiếp</option>
            </select>
        </div>
        
        <div>
             <input type="submit" name="submitgiohang" value="Gửi hàng">
        </div>

        </form>

       </thead>

       <?php 
            if(isset($_POST['submitgiohang'])){
                $tennguoinhan = $_POST['txtten'];
                $tendiachi = $_POST['txtdiachi'];
                $sodienthoai = $_POST['txtsdt'];
                $motaph = $_POST['motagiohang'];
                $giaohang = $_POST['giaohang'];

                $sql_phanhoii = mysqli_query($conn, "INSERT INTO tbl_khachhang(tenkh, diachikh, sdtkh, motakh, hinhthuc) VALUES ('$tennguoinhan','$tendiachi','$sodienthoai','$motaph','$giaohang')");

            }

       ?>





