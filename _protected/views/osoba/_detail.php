<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Osoba */

?>
<div class="osoba-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'prezime',
        'ime_roditelja',
        'ime',
        'telefon_mobilni',
        'telefon_posao',
        'telefon_kuca',
        'adresa',
        'email:email',
        'napomena:ntext',
        [
            'attribute' => 'prostorija.naziv',
            'label' => 'Prostorija',
        ],
        [
            'attribute' => 'trenutniStatus.naziv',
            'label' => 'Trenutni Status',
        ],
        'user_id',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>