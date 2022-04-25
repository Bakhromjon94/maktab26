<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = '26-maktab';
?>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url("<?=Yii::$app->urlManager->baseUrl?>"/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Yangiliklar</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">
                            <!-- Single Blog Start -->
                            <?php foreach($yangiliklar as $y):?>
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$y->rasm?>" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title"><?=$y->title?></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#"><?=$y->fish?></a> | <a href="#"><?=$y->data?></a> | <a href="#">3 fikrlar</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <?php if(strlen($y->content)>100):?>
                                    <?=substr($y->content,0,100)."...";?>
                                    <?php else:?>
                                    <p><?=$k->content;?></p>
                                    <?php endif;?>
                                    <!-- Read More btn -->
                                    <a href="<?=Yii::$app->urlManager->createUrl(['site/yangilik','id'=>$y->id])?>" class="btn academy-btn btn-sm mt-15">Batafsil</a>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Yo'nalishlar</h5>
                            <ul>
                                <li><a href="#">Qo'shimcha darslar</a></li>
                                <li><a href="#">Ta'lim</a></li>
                                <li><a href="#">Uztozlar</a></li>
                                <li><a href="#">Bitiruvchilar</a></li>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>So'ngi po'stlar</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?=Yii::$app->urlManager->baseUrl?>/img/blog-img/lb-1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Aqliy faoliyat</h6>
                                    </a>
                                    <a href="#" class="post-date">March 10, 2019</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?=Yii::$app->urlManager->baseUrl?>/img/blog-img/lb-2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Rasm chizishni yoqtiradiganlar uchun qo'shimcha to'garaklar zarur</h6>
                                    </a>
                                    <a href="#" class="post-date">March 20, 2019</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?=Yii::$app->urlManager->baseUrl?>/img/blog-img/lb-3.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Foydali ichimliklar</h6>
                                    </a>
                                    <a href="#" class="post-date">Yanvar 18, 2019</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="<?=Yii::$app->urlManager->baseUrl?>/img/blog-img/lb-4.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Aqliy faoliyatni rivojlantiruvchi o'yinlar</h6>
                                    </a>
                                    <a href="#" class="post-date">March 25, 2019</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="<?=Yii::$app->urlManager->baseUrl?>/img/blog-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->