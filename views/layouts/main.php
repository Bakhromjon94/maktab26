<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html">
                                <img src="<?=Yii::$app->urlManager->baseUrl?>/img/26-maktab.png"></a>
                            </div>
                                <div  class="blog-post-search-widget mb-300 col-lg-md-4 col-sm-4 col-xs-4">
                                    <form action="<?=\yii\helpers\Url::to('search')?>" method="get">
                                        <input  type="search" name="q" id="Search" placeholder="Search">
                                    <button name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                  <li class="active"><a href="<?=Yii::$app->urlManager->createUrl('')?>">Bosh sahifa    </a></li>
                                  <li><a href="<?=Yii::$app->urlManager->createUrl('site/blog')?>">Yangiliklar</a></li>
                                  <li><a href="<?=Yii::$app->urlManager->createUrl('site/course')?>">Qo'shimcha darslar</a></li>
                                  <li><a href="<?=Yii::$app->urlManager->createUrl('site/aboutus')?>">Biz haqimizda</a></li>
                                  <li><a href="<?=Yii::$app->urlManager->createUrl('site/contact')?>">Bog'lanish</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+998694821294"><i class="icon-telephone-2"></i> <span>+99869 48-21-294</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
<div class="wrap">
        <?= $content ?>
</div>
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a style="color: white;" href="#">26-MAKTAB</a>
                            </div>
                            <p>Maktab xayoti va yangiliklar haqida batafsil yetkizish uchun ushbu sayt yo'lga qo'yilgan. Kelajakda yangi imkoniyatlar qo'shib yanada mukammallashtirish maqsadimiz.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Foydali saytlar</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="www.xt.uz">Xalq ta'lim vazirligi</a></li>
                                    <li><a href="www.ziyonet.uz">Ziyonet.uz portali</a></li>
                                    <li><a href="www.arxiv.uz">Arxiv.uz</a></li>
                                    <li><a href="www.dtm.uz">DTM sayti</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Rasmlar</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/m1.jpg" class="gallery-img" title="Gallery Image 1"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/m2.jpg" alt=""></a>
                                <a href="img/bg-img/m3.jpg" class="gallery-img" title="Gallery Image 2"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/m4.jpg" alt=""></a>
                                <a href="img/bg-img/m5.jpg" class="gallery-img" title="Gallery Image 3"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/m6.jpg" alt=""></a>
                                <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 4"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 5"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Bog'lanish</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Namangan viloyati Uychi tumani 26-maktab</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Asosiy: +998969 48-21-294 <br></p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>maktab26.uz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
Dasturchilar &copy;<script>document.write(new Date().getFullYear());</script> UIX Software firmasi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
