<div class="container">
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
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

                                    <p><?=$y->content?></p>
                                    <!-- Read More btn -->
                                </div>
                            </div>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
</div>