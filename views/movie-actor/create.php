<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieActor */

$this->title = 'Create Movie Actor';
$this->params['breadcrumbs'][] = ['label' => 'Movie Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-actor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'people' => $people,
        'movies' => $movies,
    ]) ?>

</div>
