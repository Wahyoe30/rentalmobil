<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_reservasi')->textInput() ?>

    <?= $form->field($model, 'id_harga')->textInput() ?>

    <?= $form->field($model, 'harga_sewa')->textInput() ?>

    <?= $form->field($model, 'lama_sewa')->textInput() ?>

    <?= $form->field($model, 'total_pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
