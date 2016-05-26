<?php
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

    $dataProvider = new ArrayDataProvider([
        'allModels' => $model->osobas,
        'key' => function($model){
            return ['id' => $model->id, 'user_id' => $model->user_id];
        }
    ]);
    $gridColumns = [
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
                'attribute' => 'trenutniStatus.naziv',
                'label' => 'Trenutni Status'
        ],
        'user_id',
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'osoba'
        ],
    ];
    
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'containerOptions' => ['style' => 'overflow: auto'],
        'pjax' => true,
        'beforeHeader' => [
            [
                'options' => ['class' => 'skip-export']
            ]
        ],
        'export' => [
            'fontAwesome' => true
        ],
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'persistResize' => false,
    ]);
