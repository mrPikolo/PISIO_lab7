<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OsobaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-osoba-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'prezime')->textInput(['maxlength' => true, 'placeholder' => 'Prezime']) ?>

    <?= $form->field($model, 'ime_roditelja')->textInput(['maxlength' => true, 'placeholder' => 'Ime Roditelja']) ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true, 'placeholder' => 'Ime']) ?>

    <?= $form->field($model, 'telefon_mobilni')->textInput(['placeholder' => 'Telefon Mobilni']) ?>

    <?php /* echo $form->field($model, 'telefon_posao')->textInput(['placeholder' => 'Telefon Posao']) */ ?>

    <?php /* echo $form->field($model, 'telefon_kuca')->textInput(['placeholder' => 'Telefon Kuca']) */ ?>

    <?php /* echo $form->field($model, 'adresa')->textInput(['maxlength' => true, 'placeholder' => 'Adresa']) */ ?>

    <?php /* echo $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email']) */ ?>

    <?php /* echo $form->field($model, 'napomena')->textarea(['rows' => 6]) */ ?>

    <?php /* echo $form->field($model, 'prostorija')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Prostorija::find()->orderBy('id')->asArray()->all(), 'id', 'naziv'),
        'options' => ['placeholder' => 'Choose Lab7 prostorija'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) */ ?>

    <?php /* echo $form->field($model, 'trenutni_status')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\TrenutniStatus::find()->orderBy('id')->asArray()->all(), 'id', 'naziv'),
        'options' => ['placeholder' => 'Choose Lab7 trenutni status'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) */ ?>

    <?php /* echo $form->field($model, 'user_id')->textInput(['placeholder' => 'User']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
