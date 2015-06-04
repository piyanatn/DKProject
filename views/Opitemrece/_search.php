<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OpitemreceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opitemrece-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hos_guid') ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'icode') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'drugusage') ?>

    <?php // echo $form->field($model, 'idr') ?>

    <?php // echo $form->field($model, 'iperday') ?>

    <?php // echo $form->field($model, 'iperdose') ?>

    <?php // echo $form->field($model, 'recetime') ?>

    <?php // echo $form->field($model, 'unitprice') ?>

    <?php // echo $form->field($model, 'vstdate') ?>

    <?php // echo $form->field($model, 'vsttime') ?>

    <?php // echo $form->field($model, 'doctor') ?>

    <?php // echo $form->field($model, 'rxdate') ?>

    <?php // echo $form->field($model, 'rxtime') ?>

    <?php // echo $form->field($model, 'sp_use') ?>

    <?php // echo $form->field($model, 'hcode') ?>

    <?php // echo $form->field($model, 'print') ?>

    <?php // echo $form->field($model, 'dep_code') ?>

    <?php // echo $form->field($model, 'finance_number') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'use_right') ?>

    <?php // echo $form->field($model, 'node_id') ?>

    <?php // echo $form->field($model, 'order_no') ?>

    <?php // echo $form->field($model, 'sub_type') ?>

    <?php // echo $form->field($model, 'pttype') ?>

    <?php // echo $form->field($model, 'income') ?>

    <?php // echo $form->field($model, 'remain') ?>

    <?php // echo $form->field($model, 'item_type') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'doctor_lock') ?>

    <?php // echo $form->field($model, 'paidst') ?>

    <?php // echo $form->field($model, 'item_no') ?>

    <?php // echo $form->field($model, 'last_modified') ?>

    <?php // echo $form->field($model, 'sum_price') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'stock_department_id') ?>

    <?php // echo $form->field($model, 'command_doctor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
