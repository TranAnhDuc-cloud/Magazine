<div class="container">
    <div class="row">
    
        <?php
            while ($tin  = mysqli_fetch_array($data["Content"])) {
                # code...
            
        ?>
        <!-- Content -->
        <div class="col-lg-8  col-md-12">
            <br>
            <div>
                <h1><?php echo $tin["TieuDe"] ?></h1>
            </div>
            <br>
            <img src="Magazine/public/img/news/<?php echo $tin["urlHinh"]; ?>" alt="news" class="img-fluid width-100">
            <br>
            <br>
            <div><?php echo $tin["Content"] ?></div>
        </div>
        <?php } ?>
        <!-- Siderbar -->
        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
            <div class="sidebar-box">
                <div class="topic-border color-cod-gray mb-30">
                    <div class="topic-box-lg color-cod-gray">Liên Hệ</div>
                </div>
                <ul class="stay-connected overflow-hidden">
                    <li class="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <div class="connection-quantity">50.2 k</div>
                        <p>Fans</p>
                    </li>
                    <li class="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <div class="connection-quantity">10.3 k</div>
                        <p>Followers</p>
                    </li>
                    <li class="linkedin">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <div class="connection-quantity">25.4 k</div>
                        <p>Fans</p>
                    </li>
                    <li class="rss">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                        <div class="connection-quantity">20.8 k</div>
                        <p>Subscriber</p>
                    </li>
                </ul>
            </div>
            <div class="sidebar-box">
                <div class="ne-banner-layout1 text-center">
                    <a href="#">
                        <img src="Magazine/public/img/banner/banner3.jpg" alt="ad" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="topic-border color-scampi mb-5">
                    <div class="topic-box-lg color-scampi">Tin Mới Cùng Loại</div>
                </div>
                <div class="row">
                    <?php
                            while ($tinmoicungloai = mysqli_fetch_array($data["TinMoiCungLoai"])) {
                                        //     # code...
                        ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="mt-25">
                            <a href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>"
                                class="img-opacity-hover">
                                <img src="Magazine/public/img/news/news42.jpg" alt="ad"
                                    class="img-fluid mb-10 width-100">
                            </a>
                            <h3 class="title-medium-dark size-md mb-none">
                                <a
                                    href="Magazine/Home/TinContent/<?php echo $tinmoicungloai["idTin"]; ?>"><?php echo $tinmoicungloai["TieuDe"] ?></a>
                            </h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>