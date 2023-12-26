<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Harga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="harga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_sewa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
