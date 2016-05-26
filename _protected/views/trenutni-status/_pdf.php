<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\TrenutniStatus */

$this->title = $model->naziv;
$this->params['breadcrumbs'][] = ['label' => 'Trenutni Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trenutni-status-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Trenutni Status'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'naziv',
        'napomena:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnOsoba = [
        ['class' => 'yii\grid\SerialColumn'],
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
                'label' => 'Prostorija'
        ],
        [
                'attribute' => 'trenutniStatus.naziv',
                'label' => 'Trenutni Status'
        ],
        'user_id',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerOsoba,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-lab7-osoba']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Osoba'.' '. $this->title),
        ],
        'columns' => $gridColumnOsoba
    ]);
?>
    </div>
</div>
