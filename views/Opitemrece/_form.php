<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Opitemrece */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opitemrece-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'drugusage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iperday')->textInput() ?>

    <?= $form->field($model, 'iperdose')->textInput() ?>

    <?= $form->field($model, 'recetime')->textInput() ?>

    <?= $form->field($model, 'unitprice')->textInput() ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'vsttime')->textInput() ?>

    <?= $form->field($model, 'doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rxdate')->textInput() ?>

    <?= $form->field($model, 'rxtime')->textInput() ?>

    <?= $form->field($model, 'sp_use')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'use_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'node_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_no')->textInput() ?>

    <?= $form->field($model, 'sub_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor_lock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paidst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_no')->textInput() ?>

    <?= $form->field($model, 'last_modified')->textInput() ?>

    <?= $form->field($model, 'sum_price')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'stock_department_id')->textInput() ?>

    <?= $form->field($model, 'command_doctor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
