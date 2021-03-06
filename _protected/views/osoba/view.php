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
        <div class="col-sm-3" style="margin-top: 15px">
            <?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . 'PDF', 
                ['pdf', 'id' => $model['id']],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => 'Will open the generated PDF file in a new window'
                ]
            )?>                        
            <?= Html::a('Update', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id, 'user_id' => $model->user_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
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