<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../DACN2/css/style.css">
</head>
<body>
<div class="boxcenter">
<h2>Login Form</h2>

<form action="formdangnhap.php" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
  </div>

      </form>
    </div>

  </body>
</html>

<?php 
    
    include "../DACN2/db/connect.php";
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['psw'];
        $Rpassword = md5($password);
        $sql = "SELECT * FROM khachhang WHERE username = '$username' AND password = '$password'";
        $user = mysqli_query($conn, $sql);
        if(mysqli_num_rows($user) > 0){
          $_SESSION['username'] = $sql;
          header('location:index2.php');
        }else {
          echo "Bạn đã nhập sai username hoặc password";
        }

        if($username == 'admin@gmail.com' && $password == '123456'){
          header('location:admin.php');
        }
        else{
          echo "Tài khoản hoặc mật khẩu sai!";
        }
      }
?>