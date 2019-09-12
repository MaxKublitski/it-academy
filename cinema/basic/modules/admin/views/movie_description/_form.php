<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_movie')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
