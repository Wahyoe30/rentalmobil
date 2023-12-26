<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservasi */

$this->title = 'Update Reservasi: ' . $model->id_reservasi;
$this->params['breadcrumbs'][] = ['label' => 'Reservasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reservasi, 'url' => ['view', 'id' => $model->id_reservasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
