<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travela - Tourism Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
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
                    <?php
                if(isset($_SESSION['mem'])){
                ?>
                    <a href="./api/logout.php">登出</a> |
                <?php
                }else{
                ?>
                     <a href="./login.php" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">會員登入</a>
                <?php
                }
                ?>
                <?php
                if(isset($_SESSION['admin'])){
                ?>
                    <a href="back.php">返回管理</a>
                <?php 
                }else{
                ?>
                     <a href="./admin.php" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">管理員登入</a>
                <?php    
                }
                ?>
                </div>
            </nav>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <!-- Header End -->

        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">關渡宮</h5>
                        <h1 class="text-white mb-4">會員合約</h1>
                        <p class="text-white mb-4"> 乙方願意成為關渡宮的註冊會員，同意遵守本合約的所有條款和條件。乙方保證提供的所有註冊信息是真實、完整、準確的，並同意在必要時更新該信息。乙方有權享受關渡宮提供的會員專屬服務，並遵守相關的使用條款和宮規。乙方應保護其會員帳戶和密碼的安全，並對所有使用其帳戶進行的活動負責。乙方同意不將其會員帳戶轉讓給任何第三方，並立即通知關渡宮任何未經授權使用其帳戶的情況。
                        </p>
                        <p class="text-white mb-4">關渡宮將提供會員專屬的福利和活動，具體內容由宮方決定，並提前通知會員。會員享有特定時段或活動的優先參與權益，詳情請參閱宮內通告或宮方公告。會員註冊可能需要支付相應的會員費用，金額和支付方式根據關渡宮的政策確定。乙方同意按照關渡宮的收費政策支付相關會員費用，並保持其支付信息的準確性。關渡宮將根據其隱私政策處理會員的個人信息。
                        </p>
                        <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">看更多</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">會員註冊</h1>
                        <!-- <p class="text-white mb-4">請註冊 <span class="text-warning" onclick="location.href='?do=reg'"></span></p> -->
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" name="acc" id="acc" placeholder="">
                                        <label for="text">帳號</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <button onclick="chkacc()" class="form-control bg-white border-0">檢測帳號</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" name="name" id="name" placeholder="">
                                        <label for="text">姓名</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-white border-0" name="pw" id="pw" placeholder="">
                                        <label for="password">密碼</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-white border-0" name="tel" id="tel" placeholder="">
                                        <label for="password">電話</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-white border-0" name="addr" id="addr" placeholder="">
                                        <label for="password">住址</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-white border-0" name="email" id="email" placeholder="">
                                        <label for="password">電子信箱</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control bg-white border-0" name="birthday" id="birthday" placeholder="">
                                        <label for="date">出生年月</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <button onclick="reg()" type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">註冊</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <button  onclick="clean()" type="button" class="btn btn-primary rounded-pill position-left top-0 end-0 py-2 px-4 mt-2 me-2">重置</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   

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

        <!-- function Javascript -->
        <script>
            function reg(){
                let user={
                    name:$("#name").val(),
                    acc:$("#acc").val(),
                    pw:$("#pw").val(),
                    tel:$("#tel").val(),
                    addr:$("#addr").val(),
                    email:$("#email").val(),
                    birthday:$("#birthday").val(),
                }
                $.get("./api/chk_acc.php",{acc:user.acc},(res)=>{
                    if(parseInt(res)==1 || user.acc=='admin'){
                        alert(`此帳號${user.acc}已被使用`)
                    }else{
                        $.post("./api/reg.php",user,()=>{
                            alert("註冊成功，歡迎加入")
                            location.href='?do=login'
                        })
            
                    }
                })
            }    
            function chkacc(){
                let acc=$("#acc").val()
                $.get("./api/chk_acc.php",{acc},(res)=>{
                    if(parseInt(res)==1 || acc=='admin'){
                        alert(`此帳號${acc}已被使用`)
                    }else{
                        alert(`此帳號${acc}可以使用`)
            
                    }
                })
                
            }
            function clean(){
                $("#name,#acc,#pw,#tel,#addr,#email,#birthday").val('');
            }
            </script>
    </body>

</html> 