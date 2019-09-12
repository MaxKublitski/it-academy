<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDescription */

$this->title = 'Update Movie Description: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Movie Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movie-description-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
