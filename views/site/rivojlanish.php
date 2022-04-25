<div class="container">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-9">
			<div class="row">
				<?php foreach($rivojlanish as $r):?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$r->rasm?>">
					<div class="caption">
						<h3><b><?=$r->text?></b></h3>
					</div>
				</div>
			<?php endforeach;?>
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>