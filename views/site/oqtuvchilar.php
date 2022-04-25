<div class="container">
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
			<?php foreach($oqtuvchilar as $o):?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="row">
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			    <a href="#">
			      <img src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$o->rasm?>" alt="...">
			    </a>
			  </div>
			  <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
			    <h4 class="media-heading"><b><?=$o->fish?></b></h4>
			    <p><?=$o->lavozimi?></p>
			  </div>
			</div>
			<br>
			<hr>
			</div>
			<br>
			<?php endforeach;?>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>