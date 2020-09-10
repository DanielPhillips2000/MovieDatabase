<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\AgeRatings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="age-ratings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AgeRange')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RatingIcon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
