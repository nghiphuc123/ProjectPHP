<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0"> 
    <title>Form Đăng Ký HTML</title>
    <link rel="" href="css/style1.css">  
</head>
<body>
    <div id="form">
    <header>
        <div>
        <h1>Trở Thành Thành Viên Của Chúng Tôi</h1>
        </div>
    </header>

    <main>
        <h3>Lợi ích của việc trở thành thành viên</h3>
        <ul>
            <li>Đăng nhập vào bất kỳ lúc nào để kiểm tra trạng thái đơn hàng</li>
            <li>Cá nhân hóa việc mua sắm theo nhu cầu và sở thích của quý khách</li>
            <li>Mua hàng và thanh toán nhanh hơn trong lần tiếp theo</li>
        </ul>
        <h3>Thông tin tài khoản</h3>
        <form method="POST" name="#">
            <table>
                <tr>
                    <td>Tài khoản</td>
                    <td><input type="text" name="userdky" required ></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="passdky" required ></td>
                </tr>
                <tr>
                    <td>Xác nhận mật khẩu</td>
                    <td><input type="password" name="rpassdky" required></td>
                </tr>
            </table> -->
            <!-- <h3>Thông tin liên hệ</h3>
            <table>
                <tr>
                    <td>Họ và Tên</td>
                    <td><input type="text" name="hotendky" required></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="date" name="datedky" required></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="tel" name="sdtdky" required ></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="emaildky"required></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><textarea rows="2" cols="30" name="diachidky"></textarea required ></td>
                </tr>
                <td>
                    <select>
                        <option value="1">TP.Hồ Chí Minh</option>
                        <option value="2">TP.Gò Công</option>
                        <option value="3">TP.Bắc Ninh</option>
                    </select>
                </td> -->
                <!-- <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Đăng ký" name="submitdky"></td>
                </tr>
            </table>
        </form>
    </main>
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

<form action="formdangky.php" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Tài tài khoản" name="userdky" required>

    <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Mật khẩu" name="passdky" required>

          <label for="psw"><b>Confirm Password</b></label>
          <input type="password" placeholder="Xác nhận mật khẩu" name="rpassdky" required>
        
    <button type="submit" name="submit">Đăng ký</button>
  </div>

      </form>
    </div>

  </body>
</html>



<?php 

    include "../DACN2/db/connect.php";
    if(isset($_POST['submit'])){
        
        $userdky = $_POST['userdky'];
        $passdky = $_POST['passdky'];
        $rpassdky = $_POST['rpassdky'];

        $sql = "INSERT INTO khachhang (username,password) VALUES ('$userdky','$passdky')";
        if(mysqli_query($conn, $sql)){
            echo "Thêm dữ liệu thành công";
            header('location:index2.php');
        }
        else{
            echo "Đăng ký không thành công".$sql."<br>".mysqli_error($conn);
        }
        mysqli_close($conn);
        
    }

?>