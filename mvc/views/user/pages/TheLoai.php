<section class="bg-accent section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ne-isotope">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">Loại Tin</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <?php
                                        while ($inTL = mysqli_fetch_array($data["inTL"])) {
                                            # code...
                                        
                                    ?>
                            <a href="Magazine/Home/LoaiTin/<?php echo $inTL["idTL"] ?>" data-filter=".<?php  ?>" class="current"><?php echo $inTL["Ten"]; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            <?php
                                            while ($tinxemnhieu = mysqli_fetch_array($data["TinXemNhieu"])) {
                                                # code...
                                            
                                        ?>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="Magazine/public/img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span><?php echo $tinxemnhieu["Ngay"]; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html"><?php echo $tinxemnhieu["TieuDe"]; ?></a>
                                        </h3>
                                        <p><?php echo $tinxemnhieu["TomTat"]; ?>
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="ne-banner-layout1 text-center">
                        <a href="#">
                            <img src="Magazine/public/img/banner/banner6.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Thông Báo</div>
                    </div>
                    <div class="newsletter-area bg-primary">
                        <h2 class="title-medium-light size-xl">Like Và Đăng Ký Tài Khoản Để Nhận Thông Báo Về Những Mới
                            Nhất</h2>
                        <img src="Magazine/public/img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-40">
                        <p>Gửi Mail Về Chúng Tôi Để Được Hỗ Trợ, Tư Vấn Và Giải Đáp Các Thắc Mắc</p>
                        <div class="input-group stylish-input-group">
                            <input type="text" placeholder="Enter your mail" class="form-control">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>