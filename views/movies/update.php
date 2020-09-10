<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */

$this->title = 'Update Movies: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->MovieID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
