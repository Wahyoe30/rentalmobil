<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservasi */

$this->title = 'Create Reservasi';
$this->params['breadcrumbs'][] = ['label' => 'Reservasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
