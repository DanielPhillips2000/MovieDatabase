<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgeRatings */

$this->title = 'Update Age Ratings: ' . $model->RatingID;
$this->params['breadcrumbs'][] = ['label' => 'Age Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RatingID, 'url' => ['view', 'id' => $model->RatingID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="age-ratings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
