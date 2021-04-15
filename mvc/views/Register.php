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
    <title>Register</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->

            
            <!-- Login Form -->
            <form action="Magazine/Register/KhachHangDangKy" method="POST">

                <input type="text" id="fullname_id" class="fadeIn second cssclass" name="fullname"
                    placeholder="Full Name">

                <input type="text" id="login" class="fadeIn second cssclass" name="username" placeholder="UserName">

                <input type="password" id="password" class="fadeIn second cssclass" name="password"
                    placeholder="Password">

                <input type="text" id="diachi_id" class="fadeIn second cssclass" name="diachi" placeholder="Dia Chi">

                <input type="email" id="email" class="fadeIn second cssclass" name="email" placeholder="Email">

                <input type="submit" name="register" class="fadeIn fourth " value="Register">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="Magazine/Login">Login</a>
            </div>
            

            <?php
                if(isset($data["result"])){
                    if($data["result"]== true){
                        echo "<script>alert('đăng ký thành công')</script>";
                    }else{
                        echo "<script>alert('đăng ký thất bại')</script>";
                    }
                }
            ?>
        </div>
</body>

</html>