<div class="container">
	<div class="row">
		<div class="col-lg-2 col-lg-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="900ms">
                        <div class="popular-course-content">
                            <h5><?=$kurs->nomi?></h5>
                            <span><?=$kurs->fish?>   |  <?=$kurs->sana?></span>
                            <p><?=$kurs->tel?></p>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p><?=$kurs->matn?></p>
                        </div>
                        <div class="popular-course-thumb bg-img" style='background-image: url("<?=Yii::$app->urlManager->baseUrl?>/img/<?=$kurs->rasm?>");'></div>
                    </div>
		</div>
		<div class="col-lg-2 col-lg-md-2 col-sm-2 col-xs-2"></div>
	</div>
</div>