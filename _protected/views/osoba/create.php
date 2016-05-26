<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Osoba */

$this->title = 'Create Osoba';
$this->params['breadcrumbs'][] = ['label' => 'Osoba', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="osoba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
