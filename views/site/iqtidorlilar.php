<div class="container"> 
<div class="row"> 
<div class="col-lg-2"> </div>
<div class="col-lg-9"> 
<div class="row">
<?php foreach($iqtidorlilar as $i):?>
  <div class="col-lg-6 col-xs-6 col-md-3">
    <div class="">
      <center><img class="thumbnail" width="50%;" src="<?=Yii::$app->urlManager->baseUrl?>/img/<?=$i->rasm?>" alt="..."></center>
  </div>
  <div class="caption">
  	<h3><b><?=$i->fish?></b></h3>
 <h4 style="text-align: justify;"> <?=$i->matn?></h4>
  </div>
  </div>
<?php endforeach;?>
</div>

</div>
<div class="col-lg-2"> </div>
</div>
</div>