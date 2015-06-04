<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Opitemrece */

$this->title = 'Update Opitemrece: ' . ' ' . $model->hos_guid;
$this->params['breadcrumbs'][] = ['label' => 'Opitemreces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hos_guid, 'url' => ['view', 'id' => $model->hos_guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="opitemrece-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
