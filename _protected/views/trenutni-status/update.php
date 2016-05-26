<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrenutniStatus */

$this->title = 'Update Trenutni Status: ' . ' ' . $model->naziv;
$this->params['breadcrumbs'][] = ['label' => 'Trenutni Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->naziv, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trenutni-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
