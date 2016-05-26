<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Osoba */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Osoba', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="osoba-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Osoba'.' '. Html::encode($this->title) ?></h2>
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
                'label' => 'Prostorija'
        ],
        [
                'attribute' => 'trenutniStatus.naziv',
                'label' => 'Trenutni Status'
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
