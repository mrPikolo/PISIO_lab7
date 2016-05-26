<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NovaProstorijaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prostorija-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'broj') ?>

    <?= $form->field($model, 'sprat') ?>

    <?= $form->field($model, 'zgrada') ?>

    <?= $form->field($model, 'naziv') ?>

    <?php // echo $form->field($model, 'opis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
