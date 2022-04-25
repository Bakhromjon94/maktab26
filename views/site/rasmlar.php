<div class="container">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<p>
				<?php foreach($rasmlar as $rasm):?>
				<a href="img/<?=$rasm->rasm?>">
				<img style="width:30%;" src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$rasm->rasm?>">
				</a>
				<?php endforeach;?>
			</p>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>