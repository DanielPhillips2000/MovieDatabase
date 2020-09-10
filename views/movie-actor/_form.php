<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Persons;
use app\models\Movies;

/* @var $this yii\web\View */
/* @var $model app\models\MovieActor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-actor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PersonID')
            ->dropDownList(
                    ArrayHelper::map(Persons::find()->all(), 'PersonID','SecondName')) ?>

    <?= $form->field($model, 'MovieID')
            ->dropDownList(
                    ArrayHelper::map(Movies::find()->all(),'MovieID', 'Title')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
