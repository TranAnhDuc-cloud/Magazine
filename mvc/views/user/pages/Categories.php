
<!-- Categories -->
<section class="bg-body section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            <?php
                            while ($chuyenmuc = mysqli_fetch_array($data["ChuyenMuc"])) {
                                # code...
                        ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="Magazine/public/img/category/ctg1.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs"><?php echo $chuyenmuc["TenCM"]; ?></div>
                        <h3 class="title-regular-light size-lg">
                            <a
                                href="Magazine/Home/ChuyenMuc/<?php echo $chuyenmuc["idCM"]; ?>"><?php echo $chuyenmuc["TieuDe"]; ?></a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span><?php echo $chuyenmuc["Ngay"]; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Main -->
<section class="bg-body section-space-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="mb-20-r ne-isotope">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar">Tin Mới Nhất</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <!-- List The Loai -->
                            <a href="#" data-filter=".politics" class="current">Politics</a>
                        </div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            <!-- ADAM -->
                            <?php
                                        while ($tinmoinhat = mysqli_fetch_array($data["TinMoiNhat"])) {
                                        //     # code...
                                        ?>
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>">
                                        <img src="Magazine/public/img/news/news5.jpg" alt="news"
                                            class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span><?php echo $tinmoinhat["Ngay"] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a
                                                href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>"><?php echo $tinmoinhat["TieuDe"]; ?>...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <!-- $4 Cột -->
                            <div class="col-md-6 col-sm-12">
                                <?php
                                            while ($tinmoinhat = mysqli_fetch_array($data["TinMoiNhat1"])) {
                                            //     # code...
                                            ?>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover"
                                        href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>">
                                        <img src="Magazine/public/img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span><?php echo $tinmoinhat["Ngay"] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a
                                                href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>"><?php echo $tinmoinhat["TieuDe"]; ?>.</a>
                                        </h3>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row fashion">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="Magazine/Home/TinContent/<?php echo $tinmoinhat["idTin"]; ?>">
                                        <img src="Magazine/public/img/news/news46.jpg" alt="news"
                                            class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-azure-radiance mb-20">Fashion</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted
                                                ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>February 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="Magazine/public/img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>January 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training
                                                ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="Magazine/public/img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>December 15, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>November 23, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row travel">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news48.jpg" alt="news"
                                            class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-web-orange mb-20">Gadget</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted
                                                ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>February 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="Magazine/public/img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>January 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training
                                                ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="Magazine/public/img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>December 15, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>November 23, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gadget">
                            <div class="col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news49.jpg" alt="news"
                                            class="img-fluid width-100">
                                    </a>
                                    <div class="mask-content-lg">
                                        <div class="topic-box-sm color-web-orange mb-20">Gadget</div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Adams</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>March 22, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title-medium-light size-lg">
                                            <a href="single-news-1.html">Government launches are inquiry into tainted
                                                ...</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news6.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>February 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-2.html">
                                        <img src="Magazine/public/img/news/news7.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>January 10, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-3.html">UAE athlete dies after inden London training
                                                ground.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-3.html">
                                        <img src="Magazine/public/img/news/news8.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>December 15, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-1.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="media mb-30">
                                    <a class="width38-lg width40-md img-opacity-hover" href="single-news-1.html">
                                        <img src="Magazine/public/img/news/news9.jpg" alt="news" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>November 23, 2016
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="single-news-2.html">Blog post look better they are with a
                                                featured.</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tab-space1 mb-25">
                    <div class="col-12">
                        <div class="topic-border color-apple mb-30 width-100">
                            <div class="topic-box-lg color-apple">Tin Nổi Bật</div>
                        </div>
                    </div>
                    <?php
                                    while ($tinnoibat = mysqli_fetch_array($data["TinNoiBat"])) {
                                    //     # code...
                                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">

                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span><?php
                                                        echo $tinnoibat["Ngay"] ?>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-light">
                                    <a href="Magazine/Home/TinContent/<?php echo $tinnoibat["idTin"]; ?>"><?php echo $tinnoibat["TieuDe"] ?>
                                    </a>
                                </h3>
                            </div>
                            <img src="Magazine/public/img/news/news10.jpg" alt="news" class="img-fluid width-100">
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
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
        <div class="row">
            <div class="col-12">
                <div class="ne-banner-layout1 mt-20-r text-center">
                    <a href="#">
                        <img src="Magazine/public/img/banner/banner2.jpg" alt="ad" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>