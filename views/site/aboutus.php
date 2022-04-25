<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = '26-maktab';
?>

    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style='background-image: url("<?=Yii::$app->urlManager->baseUrl?>/img/bg-img/breadcumb.jpg");'>
        <div class="bradcumbContent">
            <h2>Biz haqimizda</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Eng yaxshilari</span>
                        <h3>Bizning maktabimiz</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                  <?php foreach($about as $a):?>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p> 
                        <?=$a->haqida?>
                    </p>
                </div>
                <?php endforeach;?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                       <?php foreach($rasmlar as $r):?>
                        <img src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$r->rasm?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="teachers-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Eng yaxshi</span>
                        <h3>Faxriy ustozlar</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Teachers -->
                <?php foreach($rahbariyat as $h):?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img class="thumbnail" src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$h->rasm?>" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5><?=$h->fish?></h5>
                            <span><?=$h->lavozimi?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
                <!-- Single Teachers -->
               </div>
            <div class="row">
                <div class="col-12">
                    <div class="view-all text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/oqtuvchilar')?>" class="btn academy-btn">Barcha o'qituvchilar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area Start ##### -->

