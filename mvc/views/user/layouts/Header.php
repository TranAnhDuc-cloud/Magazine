<?php
    //  if(!isset($_SESSION["idUser"])){
    //      header("Location:http://localhost/Magazine/Login");
    //  }
?>
<!doctype html>
<html class="no-js" lang="">
<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 08:41:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <base href="http://localhost:81/Magazine">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewsEdge | Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Magazine/public/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="Magazine/public/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="Magazine/public/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Magazine/public/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="Magazine/public/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="Magazine/public/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="Magazine/public/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="Magazine/public/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="Magazine/public/css/meanmenu.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="Magazine/public/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="Magazine/public/css/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Magazine/public/style.css">
    <!-- For IE -->
    <link rel="stylesheet" type="text/css" href="Magazine/public/css/ie-only.css" />
    
    <!-- Modernizr Js -->
    <script src="Magazine/public/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-layout1" class="header-style1">
                <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="logo-area">
                                    <a href="Magazine">
                                        <img src="Magazine/public/img/logo.png" alt="logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 position-static min-height-none">
                                <div class="ne-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active">
                                                <a href="Magazine">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="Magazine/Contact">
                                                    Contact
                                                </a>
                                            </li>
                                            <?php 
                                                while ($theloai = mysqli_fetch_assoc($data["TheLoai"])) {
                                                    # code...
                                            ?>
                                            <li class="active">
                                                <a href="Magazine/Home/TheLoai/<?php echo $theloai["idTL"]; ?>">
                                                <?php echo $theloai["TenTL"]; ?></a>
                                                <ul class="ne-dropdown-menu">
                                                    <?php 
                                                while ($loaitin = mysqli_fetch_array($data["LoaiTin"])) {
                                                    # code...
                                                ?>
                                                    <li class="active">
                                                        <a href="Magazine/Home/LoaiTin/<?php echo $loaitin["idLT"]; ?>">
                                                            <?php echo $loaitin["Ten"]; ?>
                                                        </a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-12 text-right position-static">
                                <div class="header-action-item">
                                    <ul>
                                        <li>
                                            <form id="top-search-form" class="header-search-light">
                                                <input type="text" class="search-input" placeholder="Search...."
                                                    required="" style="display: none;">
                                                <button class="search-button">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <button type="button" class="login-btn">
                                                <i class="fa fa-user" aria-hidden="true"></i><a>
                                                    <?php
                                                        if(isset($_SESSION["Username"]))
                                                        echo $_SESSION["Username"];
                                                    ?>
                                                </a>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="login-btn">
                                                <i class="fa fa-user" aria-hidden="true"></i><a
                                                    href="Magazine/Login/Logout">Log out</a>
                                            </button>
                                        </li>

                                        <li>
                                            <div id="side-menu-trigger" class="offcanvas-menu-btn">
                                                <a href="#" class="menu-bar">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                                <a href="#" class="menu-times close">
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
        <!-- News Feed Area Start Here -->
        <section class="bg-accent border-bottom add-top-margin">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="topic-box topic-box-margin">Warning</div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                        <div class="feeding-text-dark">
                            <ol id="sample" class="ticker">
                                <li>
                                    <a href="#">Kh??ng ai tr??? n??n ngh??o kh?? b???ng vi???c chia s??? v?? cho ??i ??? Tran Anh Duc.</a>
                                </li>
                                <li>
                                    <a href="#">H???nh ph??c l?? m???t s??? l???a ch???n. ??au kh??? c??ng l?? m???t s??? l???a ch???n. H??y l???a ch???n kh??n ngoan ??? Roy T. Bennett.</a>
                                </li>
                                <li>
                                    <a href="#">Trong ?????i ng?????i c?? ba ??i???u quan tr???ng: th??? nh???t l?? s???ng t??? t???, th??? hai l?? t??? t???, v?? th??? ba l?? ph???i t??? t??? ??? Henry James.</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Feed Area End Here -->
        <!-- News Info List Area Start Here -->
        <section class="bg-body">
            <div class="container">
                <ul class="news-info-list text-center--md">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Australia
                    </li>
                    <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span>
                    </li>
                    <li>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am
                    </li>
                    <li>
                        <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Sydney, Australia
                    </li>
                </ul>
            </div>
        </section>
        <!-- ????ng nh???p-->
        <!-- <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">????ng nh???p</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form>
                                <label>T??n ????ng nh???p *</label>
                                <input name="username" type="text" placeholder="T??n ????ng nh???p" />
                                <label>M???t kh???u *</label>
                                <input name="password" type="password" placeholder="M???t kh???u" />
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox" checked>
                                    <label for="checkbox">Nh??? m???t kh???u</label>
                                </div>
                                <button type="submit" value="Login">????ng nh???p</button>
                                <button class="form-cancel" type="submit" value="">H???y</button>
                                <label class="lost-password">
                                    <a href="#">Qu??n m???t kh???u?</a>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- ????ng nh??p End-->
        <!-- ????ng k??-->
        <!-- <div class="modal fade" id="signup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">????ng k??</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form method="post">
                                <label>T??n ????ng nh???p *</label>
                                <input type="text" name="username" placeholder="T??n ????ng nh???p" />
                                <label>M???t kh???u *</label>
                                <input type="password" name="password" placeholder="M???t kh???u" />
                                <button type="submit" value="Login" name="signup">????ng k??</button>
                                <button class="form-cancel" type="submit" value="">H???y</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- ????ng k?? End -->