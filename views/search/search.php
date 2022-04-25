<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\second\models\maqolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="container">
	<div class="row">
		<div class="col-lg-1 col-md-1 col-xs-1 col-sm-1"></div>
		<div class="col-lg-10 col-md-9 col-xs-9 col-sm-9"><?php $sum=count($yangiliklar)+count($qoshimchadarslar)+count($about);?>
<div class="maqola-index">
<h3><b>Qidiruvingiz bo'yicha ['<span class="badge"><?=$sum;?></span>'] element topildi</b></h3>
<?php if($yangiliklar!=null):?>
<h2>Yangiliklardan :<span class="badge"><?=count($yangiliklar)?></span> ta</h2>
<div class="row">
<?php foreach($yangiliklar as $u): ?>
<div class="col-lg-4 col-md-4 col-sm-4 content">
            <div class="more">
              <h3 class="text-center"><?=$u->title?></h3>
              <center><img src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$u->rasm?>" width="40%"></center>
              <p class="text-justify">
              <!-- <?=$u->content?> -->
              <?php if(strlen($u->content)>100):?>
                  <?=substr($u->content,0,100)."...";?>
                <?php else:?>
                  <?=$u->content;?>
                <?php endif;?>
                
                <a class="more" href="<?=Yii::$app->urlManager->createUrl(['site/batafsil','id'=>$u->id])?>">Batafsil</ a>
              </p>
            </div>
</div>
<?php endforeach;?>
</div>
<?php else:?>
<h2>Not found your request</h2>
<?php endif;?>
<hr>
<div>
<?php if($qoshimchadarslar!=null):?>
<p><h2>Qo'shimcha darslar :<span class="badge"><?=count($qoshimchadarslar)?></span></h2>ta element topildi</p>
<div class="row">
<?php foreach($qoshimchadarslar as $u):?>
<div class="col-lg-12 col-md-12 col-sm-12 content">
            <div class="more">
              <h3 class="text-center"><?=$u->nomi?></h3>
              <p class="text-justify"><?=$u->matn?></p>
            </div>
</div>
<?php endforeach;?>
</div>
<?php else:?>
<h2>Saxifadan : So'rovingiz bo'yicha hech qanday natija topilmadi.</h2>
<?php endif;?>
</div>
</div>
</div>
		<div class="col-lg-1 col-md-1 col-xs-1 col-sm-1"></div>
	</div>
</div>
