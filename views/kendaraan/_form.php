<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_plat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
