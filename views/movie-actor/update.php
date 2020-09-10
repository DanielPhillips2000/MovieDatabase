<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieActor */

$this->title = 'Update Movie Actor: ' . $model->MovieActorID;
$this->params['breadcrumbs'][] = ['label' => 'Movie Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MovieActorID, 'url' => ['view', 'id' => $model->MovieActorID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movie-actor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
