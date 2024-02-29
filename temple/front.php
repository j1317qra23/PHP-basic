<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <title>Temple - Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- js -->
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="./reg.php"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>註冊</small></a>
                    <a href="./login.php"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>會員登入</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> 首頁</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

 <!-- Carousel Start -->
 <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">關渡宮</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4"></h1>
                                    <p class="mb-5 fs-5">關渡宮創建於清康熙，歷經多次擴建，成為當地信仰中心。透過祈福祭祀，居民感念神恩，廟宇成為社區見證歷史和發展的象徵。
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">開始</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">關渡宮</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4"></h1>
                                    <p class="mb-5 fs-5">廟宇建築融合中國傳統元素，精湛雕刻展現藝術之美。神龕供奉眾多神祇，構建完整的道教信仰體系，吸引信徒和遊客。
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">關渡宮</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4"></h1>
                                    <p class="mb-5 fs-5">關渡宮每年舉辦豐富多彩的文化活動，包括傳統祭祀儀式、遶境和文藝表演，凝聚社區共體精神，保護並傳承台灣豐富多元的宗教文化。
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-5">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa-solid fa-gopuram fa-2xs" style="color: #ffffff;"></i>&nbsp;關渡宮</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link active">首頁</a>
                    <a href="#about" class="nav-item nav-link">關於我們</a>
                    <a href="#serve" class="nav-item nav-link">服務</a>
                    <a href="#product" class="nav-item nav-link">產品</a>
                    <a href="#order" class="nav-item nav-link">網路點燈</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">相關連結</a>
                        <div class="dropdown-menu m-0">
                            <a href="#news" class="dropdown-item">最新消息</a>
                            <a href="#question" class="dropdown-item">常見問題</a>
                            <a href="#cooperate" class="dropdown-item">導覽影片</a>
                            <a href="#blog" class="dropdown-item">活動照片</a>
                            <a href="#address" class="dropdown-item">聯絡地址</a>

                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">聯絡我們</a>
                </div>
             
        </nav>

    </div>
    <div id="main">
        <div class="container">
            <div>
                <div>
                <div>
                <a href="?">回首頁</a> |
                <!-- <a href="?do=news">最新消息</a> | -->
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |

                    <?php
                    if (isset($_SESSION['mem'])) {
                    ?>
                        <a href="./api/logout.php">登出</a> |
                    <?php
                    } else {
                    ?>
                        <a href="./login.php" >會員登入</a>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['admin'])) {
                    ?>
                        <a href="back.php">返回管理</a>
                    <?php
                    } else {
                    ?>
                        <a href="./admin.php">管理員登入</a>
                    <?php
                    }
                    ?>
                </div>
                </div>
                <div id="left" class="ct">
                    <div>
                        <a href='?type=0'>全部商品(<?= $Goods->count(['sh' => 1]); ?>)</a>
                        <?php
                        $bigs = $Type->all(['big_id' => 0]);
                        foreach ($bigs as $big) {
                        ?>
                            <div class="ww">
                                <a href="?type=<?= $big['id']; ?>"><?= $big['name']; ?>(<?= $Goods->count(['sh' => 1, 'big' => $big['id']]); ?>)</a>
                                <div class="s">
                                    <?php
                                    if ($Type->count(["big_id" => $big['id']]) > 0) {
                                        $mids = $Type->all(["big_id" => $big['id']]);
                                        foreach ($mids as $mid) {
                                    ?>
                                            <a href="?type=<?= $mid['id']; ?>"><?= $mid['name']; ?>(<?= $Goods->count(['sh' => 1, 'mid' => $mid['id']]) ?>)</a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <span>
                        <div>進站總人數</div>
                        <div style="color:#f00; font-size:28px;">
                            00005 </div>
                    </span>
                </div>
                <div id="right">

                    <?php
                    $do = $_GET['do'] ?? 'main';
                    $file = "./{$do}.php";
                    if (file_exists($file)) {
                        include $file;
                    } else {
                        include "./main.php";
                    }
                    ?>
                </div>
                <!-- <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
                    <?= $Bottom->find(1)['bottom']; ?>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
       <!-- Copyright Start -->
       <div id="contact" class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">xxx公司</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">Jason Tsai</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>