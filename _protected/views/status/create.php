<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TrenutniStatus */

$this->title = 'Create Trenutni Status';
$this->params['breadcrumbs'][] = ['label' => 'Trenutni Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trenutni-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
