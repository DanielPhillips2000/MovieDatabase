<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persons-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'PersonID') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'SecondName') ?>

    <?= $form->field($model, 'Birthday') ?>

    <?= $form->field($model, 'AHeight') ?>

    <?php // echo $form->field($model, 'AWeight') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
