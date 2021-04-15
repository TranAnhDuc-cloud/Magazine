<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/Magazine">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Magazine/public/css/login.css">
    <!------ Include the above in your HEAD tag ---------->
    <style>


    </style>
    <title>Login</title>
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    
<?php
  if(isset($data["result"])){
      if($data["result"] == "true"){
        
      }else{
        echo "<script>alert('Đăng Nhập Thất Bại')</script>";
      }
  }

?>
    <!-- Login Form -->
    <form action="Magazine/Login/KhachHangDangNhap" method="POST">
      
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="User">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
      <div id="formFooter">
      <a class="underlineHover" href="Magazine/Register">Register</a>
    </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </div>
</body>

</html>