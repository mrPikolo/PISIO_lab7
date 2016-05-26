<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prostorija */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prostorija-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'broj')->textInput() ?>

    <?= $form->field($model, 'sprat')->textInput() ?>

    <?= $form->field($model, 'zgrada')->textInput() ?>

    <?= $form->field($model, 'naziv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opis')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
