<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */

$this->title = '26-maktab';
?>
<!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <?php foreach($slider as $s): ?>
            <div class="single-hero-slide bg-img" style="background-image: url(img/<?=$s->rasm?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"><?=$s->content?></h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Xush kelibsiz!!!</h2>
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/batafsil','id'=>$s->id])?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Btafsil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>    

            <!-- Single Hero Slide -->
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <a href="<?=Yii::$app->urlManager->createUrl('site/darsliklar')?>">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Online Darsliklar</h5>
                                </div>
                                </a>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <a href="#team">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Tajribali O'qituvchilar</h5>
                                </div>
                                </a>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <a href="#contact">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Qo'llab quvvatlash</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/biznesmaktab')?>">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        </a>
                        <div class="course-content">
                            <h4>Biznes maktab</h4>
                            <p>O'quvchilarga tabiyat ne'matlaridan oqilona foydalanishni o'rgatish, o'zlari qiziqqan kasblarga yo'naltirish, qo'shimcha kasb xunar bilan band qilish</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/marketing')?>">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        </a>
                        <div class="course-content">
                            <h4>Marketing</h4>
                            <p>Obuna, kitob va boshqa resurslar uchun standart belgilangan narxlar</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/rasmlar')?>">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        </a>
                        <div class="course-content">
                            <h4>Rasmlar</h4>
                            <p>Maktab davrida unutilmas lahzalarni yodga solib turadinga ajoyib rasmlar, birinchi qo'ngiroq va so'ngi qo'ng'iroq tadbirlari lavhalari</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/iqtidorlilar')?>">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        </a>
                        <div class="course-content">
                            <h4>Iqtidorli o'quvchilar</h4>
                            <p>O'z iqtidori bilan ko'plab tadbirlar va olimpiadalarda faol ishtirok etadigan o'quvchilar haqida ma'lumotlar</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="<?=Yii::$app->urlManager->createUrl('site/rivojlanish')?>">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        </a>
                        <div class="course-content">
                            <h4>Rivojlanish</h4>
                            <p>Maktabimiz tashkil topganligi va shu kunga qadar bunyodkorlik ishlari. Eng so'ngi zamonaviy axborot texnologiyalari bilan joxozlangan xonalar.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            <h4>Ko'rinish</h4>
                            <p>Songi yuborilgan takliflar va javoblar. Bog'lanish</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->
<!-- services -->
<div class="services" id="services" style="background-image: url('img/se2.jpg');">
        <h3>Xizmatlar</h3>
        <div class="row">
        <div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                <a href="#" class="hi-icon"><img src="img/book.png" alt=" " /></a>
            </div>
            <a href="<?=Yii::$app->urlManager->createUrl('site/darsliklar')?>">
            <h4>Maktab darsliklari va qo'shimcha adabiyotlar</h4>
            </a>
            <p>Maktab darsliklari va boshqa adabiyotlarni elektron ravishda foydalanish</p>
        </div>
        <div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                <a href="#" class="hi-icon"><img src="img/edu.png" alt=" " /></a>
            </div>
            <a href="<?=Yii::$app->urlManager->createUrl('site/bitiruvchilar')?>">
            <h4>Bitiruvchilar</h4>
            </a>
            <p>Bitiruvchi sinflarning o'quvchilar haqida ma'lumotlar</p>
        </div>
        <div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                <a href="#" class="hi-icon"><img src="img/uni.png" alt=" " /></a>
            </div>
            <a href="<?=Yii::$app->urlManager->createUrl('site/aboutus')?>">
            <h4>Maktab haqida</h4>
            </a>
            <p>Maktabimiz tarixi va muhim yangiklar</p>
        </div>
        <div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                <a href="#" class="hi-icon"><img src="img/hourglass.png" alt=" " /></a>
            </div>
            <a href="<?=Yii::$app->urlManager->createUrl('site/talimnidavomi')?>">
            <h4>Ta'limni davom ettirish</h4>
            </a>
            <p>Maktab bitiruvchilari va iqtisoslashgan maktablarda(litseylarda) ta'limni davom ettirmoqchi bo'lgaan o'quvchilar</p>
        </div>
        <div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                <a href="#" class="hi-icon"><img src="img/book2.png" alt=" " /></a>
            </div>
            <h4>Reyting natijalar</h4>
            <p>O'qituvchi va o'quvchilarning reyting natijalari</p>
        </div>
        </div>

        <div class="clearfix"> </div>
</div>
<!-- //services -->


<!-- gallery -->
<div class="portfolio" id="gallery">
    <h3>Rasmlar</h3>
        <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
            <div class="row">
                <div class="col-md-4 grid slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal1"  data-toggle="modal">
                    <img src="img/g1.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4>Kitob sexri</h4>
                            <p> Davlatimizda yoshlar orasida kitobxonlikni keng targ'ib qilish, maktab o'quvchilar uchun muhum kitoblarni maktab kutubxonalarida mavjudligini ta'minlash</p>
                        </figcaption>
                    </a>                        
                </figure>
            </div>
            <div class="col-md-4 grid slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal2"  data-toggle="modal">

                    <img src="img/g2.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4>Hayr maktab</h4>
                            <p> Maktab bitiruvchilarini kelajak hayotga tayyorlash, o'z sohalari bo'yicha ta'lmni davom ettirmoqchi bo'lgan o'quvchilarga ta'lim dargohlari tog'risida ma'lumot berish</p>                            
                        </figcaption>   
                        </a>                        
                </figure>
            </div>
            <div class="col-md-4 grid slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal3"  data-toggle="modal">
                    <img src="img/g3.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4>Boshlang'ich sinfga qabul qilingan o'quvchilar</h4>
                            <p> Boshlang'ich sinfga qabul qilingan o'quvchilarga davlat tomonidan berilgan sovg'alar, birinchi sinfdan o'tiladigan qo'shimcha fanlar
                            <br>ingliz tili .</p>                            
                        </figcaption>
                    </a>                        
                </figure>
            </div>
            </div>
            <div class="clearfix"></div>
         </div>
        <div class="row portfolio-top wow fadeInUp animated" data-wow-delay=".5s">
            <div class="col-lg-3 grid grid-wi slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal4"  data-toggle="modal">

                    <img src="img/g4.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4 class="effcet-text"> Zamonaviy jihozlangan xonalar</h4>
                            <p> Innovatsion tarzda darslarni olib borish uchun barcha sharoitlar bilan johozlangan honalar </p>                           
                        </figcaption>   
                    </a>                        
                </figure>
            </div>
            <div class="col-lg-3 grid grid-wi slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal5"  data-toggle="modal">

                    <img src="img/g5.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4 class="effcet-text"> Navro'z umumxalq bayrami</h4>
                            <p>Maktabimizda navro'z bayrami katta tantana bilan o'tkazildi va milliy o'yinlarimiz va taomlarimiz tayyorlandi</p>                            
                        </figcaption>
                        </a>                        
                </figure>
            </div>
            <div class="col-lg-3 grid grid-wi slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal6"  data-toggle="modal">

                    <img src="img/g6.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4 class="effcet-text">Maktabimiz kutubxonasi</h4>
                            <p>Bizning kutubxonami juda katta va kitiblarga boy . U yerda barcha turdagi kitoblarni topishingiz mumkin.</p>                            
                        </figcaption>
                    </a>                        
                </figure>
            </div>
            <div class="col-lg-3 grid grid-wi slideanim">
                <figure class="effect-jazz">
                <a href="#portfolioModal7"  data-toggle="modal">

                    <img src="img/g7.jpg" alt="img25" class="img-responsive"/>
                        <figcaption>
                            <h4 class="effcet-text"> Jamoatchi o'quvchilar</h4>
                            <p> Maktabimizda o'tkizilayotgan tadbirlar o'quvchilar uchun juda foydali. Ham sport, bilim, san'at va quvnoqik bilan o'tadi. </p>                           
                        </figcaption>
                    </a>                        
                </figure>
            </div>
            <div class="clearfix"></div>
         </div>
    </div>
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
              <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Kitob sexri</h3>
                        
                        <img src="img/g1.jpg" class="img-responsive" alt="">
                        <p> Davlatimizda yoshlar orasida kitobxonlikni keng targ'ib qilish, maktab o'quvchilar uchun muhum kitoblarni maktab kutubxonalarida mavjudligini ta'minlash</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
         
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Hayr maktab</h3>
                      
                        <img src="img/g2.jpg" class="img-responsive" alt="">
                        <p>Maktab bitiruvchilarini kelajak hayotga tayyorlash, o'z sohalari bo'yicha ta'lmni davom ettirmoqchi bo'lgan o'quvchilarga ta'lim dargohlari tog'risida ma'lumot berish</p>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Boshlang'ich sinfga qabul qilingan o'quvchilar</h3>
                     
                        <img src="img/g3.jpg" class="img-responsive" alt="">
                        <p>Boshlang'ich sinfga qabul qilingan o'quvchilarga davlat tomonidan berilgan sovg'alar, birinchi sinfdan o'tiladigan qo'shimcha fanlar
                            <br>ingliz tili.</p>
                    </div>
                </div>
            </div>
       
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Zamonaviy jihozlangan xonalar</h3>
                       
                        <img src="img/g4.jpg" class="img-responsive" alt="">
                        <p> 
                            Innovatsion tarzda darslarni olib borish uchun barcha sharoitlar bilan johozlangan honalar </p>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Navro'z umumxalq bayrami</h3>
                       
                        <img src="img/g5.jpg" class="img-responsive" alt="">
                        <p>
                            Maktabimizda navro'z bayrami katta tantana bilan o'tkazildi va milliy o'yinlarimiz va taomlarimiz tayyorlandi</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Maktabimiz kutubxonasi</h3>
                       
                        <img src="img/g6.jpg" class="img-responsive" alt="">
                        <p>Bizning kutubxonami juda katta va kitiblarga boy . U yerda barcha turdagi kitoblarni topishingiz mumkin..</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">         
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="modal-body">
                        <h3>Jamoatchi o'quvchilar</h3>
                        <img src="img/g7.jpg" class="img-responsive" alt="">
                            <p> Maktabimizda o'tkizilayotgan tadbirlar o'quvchilar uchun juda foydali. Ham sport, bilim, san'at va quvnoqik bilan o'tadi. </p>
                    </div>
                </div>
         
        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->

<!-- team -->
<div class="team" id="team">
    <div class="container">
        <h3 class="title">Bizning <span>Raxbariyat</span></h3>
        <div class="team_gds">
            <div class="row">
                <?php foreach($rahbariyat as $h):?>
            <div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team_pos">
                    <div class="team_back"></div>
                    <img class="img-responsive" src="img/<?=$h->rasm?>"  alt=" ">
                    <div class="team_info">
                        <a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
                        <a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
                        <a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
                    </div>
                </div>
                <h4><?=$h->fish?></h4>
                <p><?=$h->lavozimi?></p>
            </div>
                <?php endforeach?>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>
</div>
<!-- //team -->


<!--Contact us -->
<div class="contact-agile" id="contact">
        <h3>Biz bilan<span> bog'lanish</span></h3>
            <div class="container">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <?php $forma=ActiveForm::begin([
                    'method'=>'post',
                    'action'=>Yii::$app->urlManager->createUrl('site/index'),
                    'class'=>'wow fadeInLeft animated'
                    ]);?>
                    <div class="contact-grids1 agileinfo" style="font-size: 15px;">
                        <div class="contact-me ">
                            <h4></h4>
                            <?=$forma->field($model,'matn')->textarea()?>
                        </div>
                        <div class="row"> 
                        <div class="col-lg-5 col-md-5 contact-form1">
                            <h4></h4>
                            <?=$forma->field($model,'ism')->textInput();?>
                        </div>
                        <div class="col-lg-5 col-md-5 contact-form1">
                            <h4></h4>
                            <?=$forma->field($model,'email')->textInput()?>
                        </div>
                        <div class="col-lg-2 col-md-2 contact-form">
                            <?=Html::SubmitButton('junatish', ['class' => 'btn btn-success']);?>
                        </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                <?php ActiveForm::end();?>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            </div>
    </div>
<!-- contact us -->