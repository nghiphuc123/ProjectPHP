<?php 

    include "/wamp/www/DoAnChuyenNghanh2/db/connect.php";

    
    $id = $_GET['id'];
    $sql = "SELECT * FROM giohang WHERE id = $id";
    $querysql = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($querysql);

    if(isset($_POST['submitSua'])){
        $soluongsua = $_POST['soluong'];
        $hinhanhsua = $_POST['hinhanhsua'];
        $tenspgh = $_POST['tenspgh'];
        $giagh = $_POST['giagh'];

        $sqlli = mysqli_query($conn,"UPDATE giohang SET imagegiohang = '$hinhanhsua', tenspgiohang = '$tenspgh',giagiohang = '$giagh', soluong = '$soluongsua' WHERE id = $id"); 
        header('location:giohang.php');
    }

?>



<form method="post" action="" enctype="multipart/form-data">
            <div style="text-align: center;">
                <label>Số lượng</label>
                <input type="number" name="soluong" min="1" value="<?php echo $rows['soluong']; ?>"><br>
            </div>       
           
                
                <input type="hidden" name="hinhanhsua" value="<?php echo $rows['imagegiohang']; ?>">
                <input type="hidden" name="tenspgh" value="<?php echo $rows['tenspgiohang']; ?>">
                <input type="hidden" name="giagh" value="<?php echo $rows['giagiohang']; ?>">


                <div  style="text-align:center; margin-top:20px; size:20px;">
                <input class="btn btn-primary" type="submit" name="submitSua" value="Sửa">
                </div>
        </form>


