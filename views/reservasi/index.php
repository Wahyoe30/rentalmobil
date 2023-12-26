<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reservasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_reservasi',
            'id_pelanggan',
            'kode_mobil',
            'tgl_pesan',
            'tgl_kembali',
            //'lama_sewa',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
