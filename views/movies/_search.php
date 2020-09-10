<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'MovieID') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'ReleaseDate') ?>

    <?= $form->field($model, 'DirectorID') ?>

    <?= $form->field($model, 'RatingID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
