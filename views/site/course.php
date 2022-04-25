<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = '26-maktab';
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Qo'shimcha darslar</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Tavsiya etilgan</span>
                        <h3>Qo'shimcha darslar</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Top Popular Course -->
                <?php foreach($kurslar as $k):?>
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="900ms">
                        <div class="popular-course-content">
                            <h5><?=$k->nomi?></h5>
                            <span><?=$k->fish?>   |  <?=$k->sana?></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                             <?php if(strlen($k->matn)>100):?>
                                <?=substr($k->matn,0,100)."...";?>
                            <?php else:?>
                            <p><?=$k->matn;?></p>
                            <?php endif;?>
                            <a href="<?=Yii::$app->urlManager->createUrl(['site/kurslar','id'=>$k->id])?>" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style='background-image: url("<?=Yii::$app->urlManager->baseUrl?>/img/<?=$k->rasm?>");'></div>
                    </div>
                </div>


            <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <?php foreach($ixtirochilar as $i):?>
            <div class="popular-course-content">
                <h5>Yosh ixtirochilar</h5>
                <span><?=$i->fish?>  |  <?=$i->data?></span>
                <div class="course-ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p><?=$i->text?></p>
                <a href="<?=Yii::$app->urlManager->createUrl(['site/kurslar','id'=>$i->id])?>" class="btn academy-btn btn-sm mt-15">Batafsil</a>
            </div>
            <div class="popular-course-thumb bg-img" style='background-image: url("<?=Yii::$app->urlManager->baseUrl?>/img/<?=$i->rasm?>");'></div>
        <?php endforeach;?>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    <!-- ##### Course Area Start ##### -->

    <!-- ##### Course Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
        <!-- ##### CTA Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
