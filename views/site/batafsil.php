<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\second\models\maqolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'slider';
$this->params['breadcrumbs'][] = $this->title;
?>
  <section class="container">
        <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
              <h3 class="text-center"><b><?=$s->content?></b></h3>
              <p class="text-justify"><?=$s->text?></p>
              </div>
        <div class="col-lg-1"></div>
</div>
</section>