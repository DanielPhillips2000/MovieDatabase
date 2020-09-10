<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models;


/* @var $this yii\web\View */
/* @var $model app\models\Movies */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="movies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MovieID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MovieID], [
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
            'Title',
            'ReleaseDate',
            'DirectorID',
            'RatingID',   
        ],
        
        
            
    ]) ?>

</div>
