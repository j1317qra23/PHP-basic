<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tea shop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib01/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib01/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib01/animate/animate.min.css" rel="stylesheet">
  <link href="lib01/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib01/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib01/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <?php include "./front/marquee.php"; ?>
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Aroma Sips Corner</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#portfolio">Beverage Outlets</a></li>
          <li><a href="#about">Drink Roulette</a></li>
          <li><a href="#services">Updates News</a></li>
          <li><a href="#facts">Visitor Count</a></li>
          <li><a href="#footer">Copyright</a></li>
          <li class="menu-has-children"><a href="">


            </a>

          </li>
          <li><a href="./front/login.php">Login</a>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php
          $title = $Title->find(['sh' => 1]);
          ?>
          <a title="<?= $title['text']; ?>" href="index.php">
            <div class="carousel-item active" style="background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div><!--標題-->
          </a>
        </div>
        <!-- <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section  id="featured-services" >
      <div class="container">
        <div class="row">
          <div style="width: 100%; height: 480px; position: relative;" class="dbor">
            <span class="t botli">校園映象區</span>
            <div style="position: absolute; top: 50%; left: -100px; transform: translateY(-50%);" onclick="pp(-1)">
              <i class="fa-solid fa-square-caret-left"></i>
            </div>

            <div style="display: flex; align-items: center; overflow: hidden; height: 400px;">
              <?php
              $imgs = $Image->all(['sh' => 1]);

              foreach ($imgs as $idx => $img) {
              ?>
                <div id="ssaa<?= $idx; ?>" class='im cent' style="flex: 0 0 300px; display: none; margin-right: 110px;">
                  <img src="./img/<?= $img['img']; ?>" style="width: 100%; height: 400px; border: 3px solid orange; margin: 3px;">
                </div>
              <?php
              }
              ?>
            </div>

            <div style="position: absolute; top: 50%; right: -100px; transform: translateY(-50%);" onclick="pp(1)">
              <i class="fa-solid fa-square-caret-right"></i>
            </div>

            <script>
              var totalImages = <?= count($imgs); ?>;
              var imagesPerPage = 3; // Number of images displayed at once
              var currentPage = 0;

              function showPage(page) {
                $(".im").hide();
                for (var i = page * imagesPerPage; i < (page + 1) * imagesPerPage; i++) {
                  $("#ssaa" + i).show();
                }
              }

              function pp(direction) {
                if (direction === 1) {
                  currentPage++;
                  if (currentPage >= Math.ceil(totalImages / imagesPerPage)) {
                    currentPage = 0;
                  }
                } else if (direction === -1) {
                  currentPage--;
                  if (currentPage < 0) {
                    currentPage = Math.ceil(totalImages / imagesPerPage) - 1;
                  }
                }
                showPage(currentPage);
              }

              // Auto slide every 3 seconds
              var slideInterval = setInterval(function() {
                pp(1); // Next slide
              }, 3000);

              // Stop auto sliding on hover
              $(".dbor").hover(
                function() {
                  clearInterval(slideInterval);
                },
                function() {
                  slideInterval = setInterval(function() {
                    pp(1); // Next slide
                  }, 3000);
                }
              );

              showPage(currentPage); // Show initial images
            </script>

          </div>
        </div>
 
    </section>
    <!-- #featured-services -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">TOP3</li>
              <li data-filter=".filter-card">TOP6</li>
              <li data-filter=".filter-web">TOP9</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/501.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/502.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="menu"><i class="ion ion-eye"></i></a>
                <a href="http://50lan.com/web/news.asp" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">50嵐</a></h4>
                <p>50嵐</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/dayungs1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/dayungs2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.dayungs.com/" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">大苑子</a></h4>
                <p>大苑子</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/chingsin1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/chingsin2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.chingshin.tw/product.php" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">清心</a></h4>
                <p>清心</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/kebuke1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/kebuke2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.kebuke.com/" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">可不可</a></h4>
                <p>可不可</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/wootea1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/wootea2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.wootea.com/?gad_source=1&gclid=EAIaIQobChMIsMqPstXRgwMVCNoWBR3ZuA9BEAAYASAAEgKEqvD_BwE" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">五桐號</a></h4>
                <p>五桐號</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/milksha1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/milksha2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.milksha.com/" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">迷客夏</a></h4>
                <p>迷客夏</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/chafortea1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/chafortea2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.tenren.com.tw/" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">天仁茗茶</a></h4>
                <p>天仁茗茶</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/macu1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/macu2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://macutea.com.tw/drink.php?utm_source=google&utm_medium=cpc&utm_campaign=wn_sem&gad_source=1&gclid=EAIaIQobChMI5N-aj9bRgwMV29tMAh21DgYTEAAYASAAEgL3w_D_BwE" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">麻古</a></h4>
                <p>麻古</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="./img/teashop/truedan1.jpg" class="img-fluid" alt="">
                <a href="./img/teashop/truedan2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="menu"><i class="ion ion-eye"></i></a>
                <a href="https://www.truedan.com.tw/product.php" class="link-details" title="Website"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">珍煮丹</a></h4>
                <p>珍煮丹</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #portfolio -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
       <p>飲料店轉盤</p>
      <div id="app" v-cloak>
    <!-- status buttons-->
    <div class="game-status">
      <div style="fontsize:10px" class="toggle" @click="isToggle = !isToggle"></div>
      <transition name="slide-fade">
        <div class="status-container" v-if="isToggle">
          <div class="times">CHANCE <span>{{time_remaining}}</span></div>
          <div class="buttons">
            <button class="btn btn-primary" :class="{'active':current_year===2017}"
              @click="setCurrentYear(2017)">飲料店</button>
            <button class="btn btn-primary" :class="{'active':current_year===2018}"
              @click="setCurrentYear(2018)">飲品</button>
            <button class="btn btn-secondary" @click="restart">Restart</button>
          </div>
        </div>
      </transition>
    </div>

    <div class="lucky-wheel">
      <div class="pointer-container">
        <!-- pointer -->
        <div class="pointer" ref="pointer" id="pointer" :style="{'transform':rotate_deg,'transition': prize_transition}"
          @click="rotateHandler(num)">
        </div>
      </div>
      <!-- lucky wheel -->
      <div :class="containerClass">
        <div v-for="(item,index) in prizes" :key="item.name" ref="item" :class="itemClass">
          <div :class="contentClass">
            <i class="material-icons">
              {{item.icon}}
            </i>
            <span>{{item.name}}
              <span :class="countClass">{{item.count}}</span>
            </span>
          </div>
        </div>
      </div>

      <!-- display results -->
      <transition name="slide-fade">
        <div class="prize" v-if="isShow==isClicked">
          <div class="prize-container">
            <div class="prize-title">WELL</br> DONE!</div>
            <div class="prize-title">YOU GET A ...</br>
              <span class="prize-item">{{prize_name}}</span>
            </div>
            <div class="prize-background">
              <template v-for="(prizeIcon,index) in 9">
                <i class="material-icons">
                  {{prize_icon}}
                </i>
              </template>
            </div>
          </div>
        </div>
      </transition>
    </div>
  </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.8/vue.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js'></script>
  <script src="./all.js"></script>

<div>
  
</div>


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>最新消息</h3>
          <p>新年新氣象！2023限時超值優惠狂歡開跑！品味驚喜滋味，每天午後2-5點，第二杯飲品半價優惠！更有VIP會員獨享禮遇，累積消費贈好禮，立即加入！不只是飲品，更是生活品味。無論冷熱，獨特鮮美口味總在這裡。快來店內，享受美味與省荷的完美組合！優惠期間有限，等你來品嚐不同滋味！</p>
        </header>
        <?php
        if ($News->count(['sh' => 1]) > 5) {
          echo "<a href='?do=news' style='float:right'>More...</a>";
        }
        ?>
        </span>
        <ul class="ssaa" style="list-style-type:decimal;">
          <?php
          $news = $News->all(['sh' => 1], ' limit 5');
         

          ?>
        </ul>
        <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">

        </div>
        <script>
          $(".ssaa li").hover(
            function() {

              $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
              $("#altt").show()
            }
          )
          $(".ssaa li").mouseout(
            function() {
              $("#altt").hide()
            }
          )
        </script>
        <?php
        $do = $_GET['do'] ?? 'main';
        ?>
        <div style="height:32px; display:block;"></div>
        <hr>
        <?php
        $total = $DB->count(['sh' => 1]);
        $div = 5;
        $pages = ceil($total / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;
        $news = $News->all(['sh' => 1], " limit $start,$div");
        ?>
        <ol start='<?= $start + 1; ?>'>
          <?php

          foreach ($news as $n) {
            echo "<li class='sswww'>";
            echo mb_substr($n['text'], 0,100);
            echo "<div class='all' style='display:none'>";
            echo $n['text'];
            echo "</div>";
            echo "</li>";
          }

          ?>
        </ol>
        <div class="cent">

          <?php

          if ($now > 1) {
            $prev = $now - 1;
            echo "<a href='?do=$do&p=$prev'> < </a>";
          }

          for ($i = 1; $i <= $pages; $i++) {
            $fontsize = ($now == $i) ? '24px' : '16px';
            echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
          }

          if ($now < $pages) {
            $next = $now + 1;
            echo "<a href='?do=$do&p=$next'> > </a>";
          }
          ?>
        </div>

      </div>

      <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
      </div>
      <script>
        $(".sswww").hover(
          function() {

            $("#alt").html('<pre>' + $(this).children(".all").html() + '</pre>').css({
              "top": $(this).offset().top - 50
            })
            $("#alt").show()
          }
        )
        $(".sswww").mouseout(
          function() {
            $("#alt").hide()
          }
        )
      </script>


      </div>

      </div>
    </section>
    <!-- #services -->


    <!--==========================
      Facts Section
    ============================-->
    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>來客人數</h3>
          <p>飲料店歡迎並感謝每一位光顧者的到來。自從開業以來，我們始終致力於提供最優質、新鮮和美味的飲品，以及一流的服務體驗。在過去的時光裡，我們深感榮幸能夠見證越來越多的顧客蒞臨本店，分享我們的熱情和美味飲品。每一位顧客都是我們店家重要的一份子，您們的支持和信任是我們不斷前進的動力。我們期待著未來與您共同創造更多美好時刻，並為您呈現更多令人驚喜的美味體驗。感謝您一直以來的支持，我們將繼續努力，為您帶來更多的驚喜和滿足</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= $Total->find(1)['total']; ?></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= $Total->find(1)['total']; ?></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= $Total->find(1)['total']; ?></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= $Total->find(1)['total']; ?></span>
            <p>Hard Workers</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->



  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><?= $Bottom->find(1)['bottom']; ?></h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Aroma Sips Corner</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib01/jquery/jquery.min.js"></script>
  <script src="lib01/jquery/jquery-migrate.min.js"></script>
  <script src="lib01/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib01/easing/easing.min.js"></script>
  <script src="lib01/superfish/hoverIntent.js"></script>
  <script src="lib01/superfish/superfish.min.js"></script>
  <script src="lib01/wow/wow.min.js"></script>
  <script src="lib01/waypoints/waypoints.min.js"></script>
  <script src="lib01/counterup/counterup.min.js"></script>
  <script src="lib01/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib01/isotope/isotope.pkgd.min.js"></script>
  <script src="lib01/lightbox/js/lightbox.min.js"></script>
  <script src="lib01/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>