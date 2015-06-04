<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Icd101 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="icd101-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spclty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'ipd_valid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd10compat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd10tmcompat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid_ext')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
