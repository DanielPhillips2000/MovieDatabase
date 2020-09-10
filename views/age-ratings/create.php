<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgeRatings */

$this->title = 'Create Age Ratings';
$this->params['breadcrumbs'][] = ['label' => 'Age Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="age-ratings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
