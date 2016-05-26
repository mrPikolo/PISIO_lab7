<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

Pjax::begin();
$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Osoba',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'prezime' => ['type' => TabularForm::INPUT_TEXT],
        'ime_roditelja' => ['type' => TabularForm::INPUT_TEXT],
        'ime' => ['type' => TabularForm::INPUT_TEXT],
        'telefon_mobilni' => ['type' => TabularForm::INPUT_TEXT],
        'telefon_posao' => ['type' => TabularForm::INPUT_TEXT],
        'telefon_kuca' => ['type' => TabularForm::INPUT_TEXT],
        'adresa' => ['type' => TabularForm::INPUT_TEXT],
        'email' => ['type' => TabularForm::INPUT_TEXT],
        'napomena' => ['type' => TabularForm::INPUT_TEXTAREA],
        'trenutni_status' => [
            'label' => 'Lab7 trenutni status',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\TrenutniStatus::find()->orderBy('naziv')->asArray()->all(), 'id', 'naziv'),
                'options' => ['placeholder' => 'Choose Lab7 trenutni status'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'user_id' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowOsoba(' . $key . '); return false;', 'id' => 'osoba-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . 'Osoba',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Row', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowOsoba()']),
        ]
    ]
]);
Pjax::end();
?>
