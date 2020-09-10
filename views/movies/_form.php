<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Persons;
use app\models\AgeRatings;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReleaseDate')->textInput() ?>

    <?= $form->field($model, 'DirectorID')
            ->dropDownList(
                    ArrayHelper::map(Persons::find()->asArray()->all(), 'PersonID', 'SecondName')) ?>

    <?= $form->field($model, 'RatingID')
            -> dropDownList(
                    ArrayHelper::map(AgeRatings::find()->asArray()->all(), 'RatingID', 'Rating'))?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
