<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patientimage */

$this->title = $model->hn;
$this->params['breadcrumbs'][] = ['label' => 'Patientimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientimage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'hn' => $model->hn, 'image_name' => $model->image_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'hn' => $model->hn, 'image_name' => $model->image_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'hn',
            'image_name',
            'image',
            'width',
            'height',
            'capture_date',
            'hos_guid',
            'hos_guid_ext',
        ],
    ]) ?>

</div>
