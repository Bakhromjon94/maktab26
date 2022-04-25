<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */

$this->title = '26-maktab';
?>

<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-9">
		<?php foreach($biznesmaktab as $b):?>
			<center><img class="border" src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$b->rasm?>"></center>
			<p>
				<?=$b->matn?>
			</p>
		<?php endforeach;?>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>