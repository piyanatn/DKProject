<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Labitems */

$this->title = 'Update Labitems: ' . ' ' . $model->lab_items_code;
$this->params['breadcrumbs'][] = ['label' => 'Labitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lab_items_code, 'url' => ['view', 'id' => $model->lab_items_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="labitems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
