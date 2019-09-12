<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDescription */

$this->title = 'Create Movie Description';
$this->params['breadcrumbs'][] = ['label' => 'Movie Descriptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-description-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
