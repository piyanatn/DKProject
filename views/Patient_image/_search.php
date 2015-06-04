<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientimageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patientimage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'image_name') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'capture_date') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'hos_guid_ext') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
