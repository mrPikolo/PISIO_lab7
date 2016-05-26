<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Osoba */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="osoba-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'prezime')->textInput(['maxlength' => true, 'placeholder' => 'Prezime']) ?>

    <?= $form->field($model, 'ime_roditelja')->textInput(['maxlength' => true, 'placeholder' => 'Ime Roditelja']) ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true, 'placeholder' => 'Ime']) ?>

    <?= $form->field($model, 'telefon_mobilni')->textInput(['placeholder' => 'Telefon Mobilni']) ?>

    <?= $form->field($model, 'telefon_posao')->textInput(['placeholder' => 'Telefon Posao']) ?>

    <?= $form->field($model, 'telefon_kuca')->textInput(['placeholder' => 'Telefon Kuca']) ?>

    <?= $form->field($model, 'adresa')->textInput(['maxlength' => true, 'placeholder' => 'Adresa']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email']) ?>

    <?= $form->field($model, 'napomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prostorija')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Prostorija::find()->orderBy('id')->asArray()->all(), 'id', 'naziv'),
        'options' => ['placeholder' => 'Choose Lab7 prostorija'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'trenutni_status')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\TrenutniStatus::find()->orderBy('id')->asArray()->all(), 'id', 'naziv'),
        'options' => ['placeholder' => 'Choose Lab7 trenutni status'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'user_id')->textInput(['placeholder' => 'User']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'),['index'],['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
