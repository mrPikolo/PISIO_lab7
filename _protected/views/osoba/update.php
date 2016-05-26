<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Osoba */

$this->title = 'Update Osoba: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Osoba', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="osoba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
