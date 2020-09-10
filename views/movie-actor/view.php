<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use app\models\Persons;

/* @var $this yii\web\View */
/* @var $model app\models\MovieActor */

$this->title = $model->MovieActorID;
$this->params['breadcrumbs'][] = ['label' => 'Movie Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="movie-actor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MovieActorID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MovieActorID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'PersonID',
            'MovieID',
        ],
    ]) ?>

</div>
