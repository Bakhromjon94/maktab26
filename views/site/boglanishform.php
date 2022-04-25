<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Boglanishform */
/* @var $form ActiveForm */
?>
<div class="site-boglanishform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ism') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'matn') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-boglanishform -->
