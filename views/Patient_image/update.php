<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Patientimage */

$this->title = 'Update Patientimage: ' . ' ' . $model->hn;
$this->params['breadcrumbs'][] = ['label' => 'Patientimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hn, 'url' => ['view', 'hn' => $model->hn, 'image_name' => $model->image_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patientimage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
