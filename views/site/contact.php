<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = '26-maktab';
?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url("<?=Yii::$app->urlManager->baseUrl?>"/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Bog'lanish</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area wow fadeInUp" data-wow-delay="300ms">
        <div id="googleMap"></div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span>Asosiy</span>
                                        <h3>Biz bilan bo'lanish</h3>
                                        <p class="mt-30">Agar sizga birorta taklif yoki etirozlar bo'lsa biz bilan bog'lanishingiz mumkin, biz uni albatta ko'rib chiqamiz va natijalarini albatta yo'llaymiz</p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>Namangan viloyati uychi tumani,<br> 26-mktab</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Asosiy: +99869 482 12 94 <br> Qo'shimcha: +99869 482 12 94</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>maktab26.uz</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">

                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <?php $forma=ActiveForm::begin([
                                    'method'=>'post',
                                    'action'=>Yii::$app->urlManager->createUrl('site/contact'),
                                    'class'=>'wow fadeInLeft animated'
                                    ]);?>
                                        <?=$forma->field($form,'ism')->textInput(['class'=>'form-control']);?>
                                        <?=$forma->field($form,'email')->textInput(['class'=>'form-control'])?>
                                        <?=$forma->field($form,'matn')->textarea(['class'=>'form-control'])?>
                                        <?=Html::SubmitButton('junatish', ['class' => 'btn academy-btn mt-30']);?>
                                    <?php ActiveForm::end();?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
