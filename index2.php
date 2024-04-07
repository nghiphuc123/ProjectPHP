<?php 

    include "../DACN2/db/connect.php";
    $sql_pro = "SELECT * FROM sanpham WHERE "
?>

<?php 



$selectuser = "SELECT * FROM khachhang WHERE username ";
$result = mysqli_query($conn,$selectuser);
$user = [];
(isset($_SESSION['username']) ? $user = $_SESSION['username']: []);
$_SESSION['username'] = $user;
?>


<?php 

    $selectpro = "SELECT * FROM sanpham";
    $ketqua = mysqli_query($conn,$selectpro);
    while ($row = mysqli_fetch_array($ketqua)){

    }

?>


<!-- hàm tìm kiếm -->
<!-- <?php 

    if(isset($_POST['submittimkiemindex2'])){
        $tukhoa = $_POST['timkiemindex'];
    }

    $sql_look = "SELECT * FROM sanpham WHERE tensp LIKE '%".$tukhoa."%'";
    $query_look = mysqli_query($conn,$sql_look);

?> -->

<?php
    $selectdanhmuc = "SELECT * FROM danhmuc";
    $query = mysqli_query($conn,$selectdanhmuc);
?>






<!-- giỏ hàng -->
<?php 

    if(isset($_POST['themgiohang'])){
        $hinhanhgiohang = $_POST['hinhanhgiohang'];
        $tensanphamgiohang = $_POST['tenspgiohang'];
        $giagiohang = $_POST['giagiohang'];
        $soluonggiohang = $_POST['soluonggiohang'];

        $sqlgiohang = mysqli_query($conn, "INSERT INTO giohang(imagegiohang, tenspgiohang, giagiohang, soluong) VALUES ('$hinhanhgiohang','$tensanphamgiohang','$giagiohang','$soluonggiohang')");
        $count = mysqli_num_rows($sqlgiohang);

        if($sqlgiohang == 0){
            header('location:giohang.php');
        }
        else
            header('location:giohang.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop quần áo N&T</title>
    <link rel="stylesheet" href="css/style1.css">
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
                <a href="giohang.php" class="brand">
                    <img src="https://img.lovepik.com/free-png/20210924/lovepik-shopping-cart-icon-png-image_401363020_wh1200.png" width="20px" 
                    alt="Hinh brand">
                </a>
                </div>
            </div>
        

            <ul id="nav">
                <li><a href="">Trang chủ</a></li>
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
                        <?php } ?>
                    </li>
                    </ul>
                    <li>
                        <a href="">Thương hiệu</a>
                        <ul class="subnav"><?php
                        $selectpro = "SELECT * FROM thuonghieu WHERE tenthuonghieu";
                $ketquathuonghieu = mysqli_query($conn,$selectpro);
                while ($row = mysqli_fetch_array($ketquathuonghieu)){
                    
                    ?>
                            <li><a href=""><?php echo $row['tenthuonghieu'] ?></a></li>
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

    

            <!-- <div id="box_dangnhap">
                <div class="dnhap_dky">
                    <a href="formdangnhap.php">Đăng nhập</a>
                    <a href="formdangky.php">Đăng ký</a>
                </div>
            </div>
        </div> -->


        <div class="row">
            <div class="col-sm-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
              
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="https://i.ytimg.com/vi/CXSko9ySpyo/maxresdefault.jpg" alt="Image">
                        <div class="carousel-caption"></div>      
                    </div>
              
                    <div class="item">
                        <img src="https://intphcm.com/data/upload/poster-giay-dep-mat.jpg" alt="Image">
                        <div class="carousel-caption"></div> 
                    </div>

                    <div class="item">
                        <img src="https://media.licdn.com/dms/image/C5112AQEaaI6z3NxGLQ/article-inline_image-shrink_1000_1488/0/1520238935596?e=1703116800&v=beta&t=WEenr70Lj_PQ7ikrEmUOpstc5h5GOrJRiXLgDl102EM" alt="Image">
                        <div class="carousel-caption"></div> 
                    </div>

                </div>
              
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                   </a>
                
                   
            </div>

            <div id="cam_ket">
                <div>
                    <img src="https://footgearh.vn/thumb/60x60/2/upload/news/like-2028.png" alt="">
                </div>
                <div>
                    <div class="camket_text">
                    <h3>Cam kết chính hãng</h3>
                     </div>
                    <b>100% Authentic</b><br>
                    Cam kết sản phẩm chính hãng từ Châu Âu, Châu Mỹ
                </div>

                <div>
                    <img src="https://footgearh.vn/thumb/60x60/2/upload/news/s1-5755.png" alt="">
                </div>
                <div>
                    <div class="camket_text">
                    <h3>Đăng ký thành viên</h3>
                     </div>
                    <b>100% Authentic</b><br>
                   Hướng dẫn thao tác đăng ký làm thành viên
                </div>

                <div>
                    <img src="https://footgearh.vn/thumb/60x60/2/upload/news/trade-8166.png" alt="">
                </div>
                <div>
                    <div class="camket_text">
                    <h3>Chính sách đổi trả</h3>
                     </div>
                    <b>100% Authentic</b><br>
                    Đổi trả sản phẩm trong 24h
                </div>

                <div>
                    <img src="https://footgearh.vn/thumb/60x60/2/upload/news/free-shipping-5000.png" alt="">
                </div>
                <div>
                    <div class="camket_text">
                    <h3>Giao hàng toàn quốc</h3>
                     </div>
                    <b>100% Authentic</b><br>
                    Nhận giao hàng toàn quốc
                </div>
            </div>

            
                  
                
         </div>
        </div>

        <div id="bar">
            <a href="">Sản phẩm mới </a>
        </div>
        


             <?php 
                $selectpro = "SELECT * FROM sanpham";
                $ketqua = mysqli_query($conn,$selectpro);
                while ($row = mysqli_fetch_array($ketqua)){
                    
                    ?>
                    
                    <div class="product_box">
                        <div class="img_box">
                            <img src="hinhanh/<?php echo $row['image'] ?>"width="50px;">
                        </div>
                        <div style="text-align:center;"><?php echo $row['tensp']; ?></div>
                        <div class="price">Giá: <?php echo $row['gia']; ?></div>
                        <!-- <div class="buy1"><a href="chitiet.php">Mua ngay</a></div> -->
                        <!-- <div style="text-align:center;">Số lượng: <input type="number" value="1" min="1" name="soluonggiohang" size="2"></div> -->
                        <form action="?quanly=giohang" method="post">
                            <input type="hidden" name="hinhanhgiohang"value="<?php echo $row['image'] ?>">
                            <input type="hidden" name="tenspgiohang"value="<?php echo $row['tensp'] ?>">
                            <input type="hidden" name="giagiohang"value="<?php echo $row['gia'] ?>">
                            <input type="text" name="soluonggiohang" value="" placeholder="Nhập số lượng">
                           <input class="btn btn-success" type="submit" name="themgiohang" value="Add Your Cart">
                         
                        </form>
                        </div>
                        
                        
                        <?php } ?>

                        <div id="bar">
                             <a href="">Tìm kiếm sản phẩm </a>
                        </div>


            <form method="post">
                            <div class="banner">    
                                <div class="hotline">
                                    <input class="search" type="text"  name="timkiemindex" placeholder="Tìm kiếm">
                                    <input type="submit" name="submittimkiemindex2">
                                </div> 
            </form>
                        <?php 
                $selectpro = "SELECT * FROM sanpham";
                $query_look = mysqli_query($conn,$sql_look);
                while ($row = mysqli_fetch_array($query_look)){
                    
                    ?>
                    
                    <div class="product_box">
                        <div class="img_box">
                            <img src="hinhanh/<?php echo $row['image'] ?>"width="50px;">
                        </div>
                        <div style="text-align:center;"><?php echo $row['tensp']; ?></div>
                        <div class="price">Giá: <?php echo $row['gia']; ?></div>
                        <!-- <div class="buy1"><a href="chitiet.php">Mua ngay</a></div> -->
                        <!-- <div style="text-align:center;">Số lượng: <input type="number" value="1" min="1" name="soluonggiohang" size="2"></div> -->
                        <form action="?quanly=giohang" method="post">
                            <input type="hidden" name="hinhanhgiohang"value="<?php echo $row['image'] ?>">
                            <input type="hidden" name="tenspgiohang"value="<?php echo $row['tensp'] ?>">
                            <input type="hidden" name="giagiohang"value="<?php echo number_format($row['gia']); ?>">
                            <input type="text" name="soluonggiohang"value="" placeholder="Nhập số lượng" >
                           <input class="btn btn-success" type="submit" name="themgiohang" value="Thêm giỏ hàng">
                        </form>
                        </div>
                        
                        
                        <?php } ?>
       

        

 

        

        
        


       
        <div id="thuonghieu">
            <div class="thuonghieu_title">
                THƯƠNG HIỆU
            </div>
            <div class="imgthuonghieu">
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/nhung-luu-y-khi-thiet-ke-logo-thuong-hieu-cho-trang-website-removebg-preview-5707.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/logoadis-removebg-preview-6364.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/puma-logo-white-3140.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/new-balance-png-logo-brands-5494-1466.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/new-project-1-3728.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/61fe77895703714b1632baf7204bc1f7-removebg-preview-9781.png" alt=""></a>
            <a href=""><img src="https://footgearh.vn/thumb/185x95/1/upload/sanpham/new-project-3-4411.png" alt=""></a>
            </div>
        </div>


        <div id="vechungtoi">
            <h3>Phản hồi cho chúng tôi</h3>
            <div>
                Trường Đại học Công nghệ Sài Gòn (tiếng Anh: SaiGon Technology University) là một trường đại học tư thục tại Việt Nam
                được thành lập theo quyết định số 798/QĐ-TTg ngày 24/09/1997 của Thủ thướng Chính phủ
            </div>
        </div>

        <form action="" method="post">
       <thead>
        <div>
            Tên khách hàng: <input type="text" name="tenkhphanhoi">
        </div>

        <div>
            Địa chỉ: <input type="text" name="diachiphanhoi">
        </div>

        <div>
            Số điện thoại: <input type="text" name="sdtphanhoi">
        </div>
        
        <div>
            Mô tả: <input type="text" name="motaphanhoi">
        </div>

        <div>
            <input type="submit" name="submitgiohang" value="Nộp phản hồi">
        </div>
       </thead>
        </form>

        <?php 
            if(isset($_POST['submitgiohang'])){
                $tennguoinhan = $_POST['tenkhphanhoi'];
                $tendiachi = $_POST['diachiphanhoi'];
                $motaph = $_POST['sdtphanhoi'];
                $giaohang = $_POST['motaphanhoi'];

                $sql_phanhoii = mysqli_query($conn, "INSERT INTO phanhoi(tenkhachangphanhoi, diachiphanhoi, sdtphanhoi, motaphanhoi) VALUES ('$tennguoinhan','$tendiachi','$motaph','$giaohang')");

            }

       ?>

       <div id="bar">
                             <a href="">Bản đồ</a>
                        </div>

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.998332826695!2d106.67525717480439!3d10.737997189408476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f62a90e5dbd%3A0x674d5126513db295!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgU8OgaSBHw7Ju!5e1!3m2!1svi!2s!4v1703699386411!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    

        <div id="footer">
            <div style="float: left; margin-right: 200px;">
                Shop quần áo T&N</br>
                Chuyên quần áo chính hãng</br>
                Địa chỉ: 180 Cao Lỗ P2 Q8 Tp.Hcm</br>
                Email liên hệ: nnnttt123@gmail.com</br> 
                Điện thoại: </br>
                <div>
                    Liên hệ:
                    <a href="https://www.facebook.com/nghi.phuc.357"><img src="data:image/png;base64,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" width="20px"></a>
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



    <div id="demo" class="carousel slide" data-ride="carousel">


</div>
    
</body>
</html>

