<?php
/**
 * Created by PhpStorm.
 * User: 73488
 * Date: 2017/12/30
 * Time: 21:07
 */
include('php/session.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<!DOCTYPE html>

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->
    <meta name="keywords"
          content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>Photography</title>


    <!--
    CSS
    ============================================= -->
    <!-- 幻灯片>图标 -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- 显示图片的边框 -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- 幻灯片效果 -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- 动画效果 -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- 主体css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- 响应式布局 -->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <!-- 响应式导航栏按钮 -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"
                    aria-expanded="false" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /响应式导航栏按钮 -->

            <!-- logo -->
            <h1 class="navbar-brand">
                <a href="#">
                    <img src="img/icons/logo.png">
                </a>
            </h1>
            <!-- /logo -->


        </div>

        <!-- 导航栏选项 -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="active dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Home <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#home">Top</a></li>
                            <li class="divider"></li>
                            <li><a href="#service">Services</a></li>
                            <li class="divider"></li>
                            <li><a href="#footer">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="webpages/photos.html">Photos</a></li>
                    <li><a href="webpages/media.html">Media</a></li>
                    <li><a href="webpages/technique.html">Technique</a></li>
                    <li>
                        <?php
                        if (empty($login_session))
                            echo "<a href=\"webpages/logintable.php\">Sign up/Login</a>";
                        else {
                            echo " <a href=\"php/logout.php\">$login_session(Logout)</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /导航栏选项 -->
    </div>

    </div>
</header>
<!--
End Fixed Navigation
==================================== -->


<!--
Home Slider
==================================== -->
<section id="home">
    <div id="home-carousel" class="carousel slide" data-interval="false">

        <!--幻灯片下的三个点-->
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
            <li data-target="#home-carousel" data-slide-to="2"></li>
        </ol>
        <!--/.carousel-indicators-->
        <!--幻灯片墙-->
        <div class="carousel-inner">
            <!--第一幅图-->
            <div class="item active" style="background-image: url('img/slider/bg1.jpg')">
                <div class="carousel-caption">
                    <div class="animated bounceInRight">
                        <a href="img/slider/bg1.jpg" title="小街夜景" rel="photos" class="fancybox"><h2>小街夜景</h2></a>
                        <p>和自然环境不同，城市的夜景往往比白天更有魅力.</p>
                    </div>
                </div>
            </div>

            <!--第二幅图-->
            <div class="item" style="background-image: url('img/slider/bg2.jpg')">
                <div class="carousel-caption">
                    <div class="animated bounceInDown">
                        <a href="img/slider/bg2.jpg" title="纽约街头" rel="photos" class="fancybox"><h2>纽约街头</h2></a>
                        <p> 在拥挤的街头，你在忙碌的追求什么？</p>
                    </div>
                </div>
            </div>

            <!--第三幅图-->
            <div class="item" style="background-image: url('img/slider/bg3.jpg')">
                <div class="carousel-caption">
                    <div class="animated bounceInUp">
                        <a href="img/slider/bg3.jpg" title="水乡风情" rel="photos" class="fancybox"><h2>水乡风情</h2></a>
                        <p>宁静的清晨、迷离的夜晚、熙来攘往的白天.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.carousel-inner-->
        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
            <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a class="sl-next" href="#home-carousel" data-slide="next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>

    </div>
</section>
<!--
End #home Slider
========================== -->


<!--
#service
========================== -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown">
                    <h2>Service</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-sm-12 wow fadeInLeft">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/master.png" class="media-object" alt="Monitor">
                    </a>
                    <div class="media-body">
                        <h3>大师作品</h3>
                        <p>纵观摄影艺术</p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/lovers.png" alt="Cog">
                    </a>
                    <div class="media-body">
                        <h3>爱好者交流</h3>
                        <p>启发创作灵感</p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInLeft">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/study.png" alt="Ruler">
                    </a>
                    <div class="media-body">
                        <h3>基础入门</h3>
                        <p>人像入门 手动必学 风光入门</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/camera.png" alt="Camera">
                    </a>
                    <div class="media-body">
                        <h3>技巧提升</h3>
                        <p>人像技巧 冬季人像 星空星轨</p>
                    </div>
                </div>
            </div>

        </div> <!-- end .row -->
    </div> <!-- end .container -->
</section>
<!--
End #service
========================== -->

<!--
#footer
========================== -->
<footer id="footer" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="footer-logo wow fadeInDown">
                    <img src="img/icons/logo.png" alt="logo">
                </div>

                <div class="footer-social wow fadeInUp">
                    <p style="color: #fff">如果您有意见或建议,欢迎联系我们,帮助我们完善网站</p><br>
                    <h3><a  href="webpages/message.php">发送信息或通过社交软件:</a></h3>
                    <ul class="text-center list-inline">
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</footer>
<!--
End #footer
========================== -->


<!--
JavaScripts
========================== -->

<!-- main jQuery -->
<script src="js/jquery-3.2.1.min.js"></script>
<!--<script src="js/vendor/jquery-1.11.1.min.js"></script>-->
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery.nav -->
<script src="js/jquery.nav.js"></script>
<!-- Portfolio Filtering -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- Fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- Parallax sections -->
<script src="js/jquery.parallax-1.1.3.js"></script>
<!-- countTo -->
<script src="js/jquery-countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- WOW script -->
<script src="js/wow.min.js"></script>
<!-- theme custom scripts -->
<script src="js/main.js"></script>
</body>
</html>


