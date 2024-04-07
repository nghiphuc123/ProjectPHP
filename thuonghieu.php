<?php
        include "../DACN2/db/connect.php";
    $sql = "SELECT * FROM thuonghieu";
    $query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop quần áo N&T</title>
    <link rel="stylesheet" href="../DACN2/css/style2.css">
    <link rel="stylesheet" href="icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-up-direction-arrow-icon-png-image_4243638.jpg"width="20" alt=""></button>

<style>

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
</style>


<script>
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
</script>
    
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
                <a href="" class="brand">
                    <img src="https://img.lovepik.com/free-png/20210924/lovepik-shopping-cart-icon-png-image_401363020_wh1200.png" width="20px" 
                    alt="Hinh brand">
                </a>
                </div>
            </div>
        

            <ul id="navadmin">
                <li><a href="index2.php">Trang chủ</a></li>
                <li><a href="danhmuc.php">Danh mục</a></li>
                <li><a href="admin.php">Sản phẩm </a></li>
                <li><a href="taikhoanadmin.php">Tài khoản</a></li>
                <li><a href="thuonghieu.php">Thương hiệu</a></li>
                <li><a href="admingiohang.php">Đơn hàng</a></li>  
                <li><a href="phanhoi.php">Phản hồi</a></li>         
            </ul>
        </div>
    </div>
    

    <div class="container-fluid">
        <div class="card-header" style="text-align: center;">
            <h2>Danh sách thương hiệu</h2>
        </div>

        <div class="nutthem">
            <a href="themthuonghieu.php" class="btn btn-success">Thêm</a>
        </div>

        <div class="card-body">
            <table class="table" method="post">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên thương hiệu</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                       
                    </tr>
                </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                            while($row = mysqli_fetch_array($query)){?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['tenthuonghieu'] ?></td>
                                    <td>
                                    <img src="hinhanh/<?php echo $row['imagethuonghieu'] ?>"width="150px;">
                                        
                                    </td>
                                    <td><?php echo $row['motathuonghieu'] ?></td>                                  
                                    <td><a class="btn btn-warning" href="suathuonghieu.php?id=<?php echo $row['id']; ?>">Sửa</a> <a class="btn btn-primary" href="xoathuonghieu.php?id=<?php echo $row['id']; ?>">Xóa</a></td>                                    
                                </tr>
                           <?php } ?>
                        
                    </tbody>
            </table>
        </div>

    </div>

        
    

        <div id="footer">
            <div style="float: left; margin-right: 200px;">
                Shop quần áo T&N</br>
                Chuyên quần áo chính hãng</br>
                Địa chỉ: 180 Cao Lỗ P2 Q8 Tp.Hcm</br>
                Email liên hệ: nnnttt123@gmail.com</br> 
                Điện thoại: </br>
                <div>
                    Liên hệ:
                    <a href="https://www.facebook.com/nghi.phuc.357"></a>
                    <a href="https://www.youtube.com/channel/UCZsmQgocAMru_7Ty6ZlDrAw"><img src="https://play-lh.googleusercontent.com/lMoItBgdPPVDJsNOVtP26EKHePkwBg-PkuY9NOrc-fumRtTFP4XhpUNk_22syN4Datc"width="20px" alt=""></a>
                </div>
                Thời gian hoạt động: 10:00 - 22:00</br>
            </div>

            <div style="float: right;">
                <div>
                    Hỗ trợ khách hàng</br>
                    ----------
                 </div>
                <a href="">Hướng dẫn khách mua hàng trực tuyến</a></br>
                <a href="">Hướng dẫn khách đổi trả hàng</a>
            </div>

            <div style="float: none; margin-right: 300px; margin-bottom: 50px; ">
                <div>
                    Thông tin cửa hàng</br>
                    ----------
                 </div>
                <a href="">About</a></br>
                <a href="">Hướng dẫn khách đổi trả hàng</a>
            </div>


        <div id="footer2">
            2023 Copyright @ Cửa hàng quần áo Chính hãng Tại TPHCM Web Design by T&N
        </div>
    </div>
    
</body>
</html>