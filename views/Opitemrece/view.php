<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Opitemrece */

$this->title = $model->hos_guid;
$this->params['breadcrumbs'][] = ['label' => 'Opitemreces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opitemrece-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hos_guid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hos_guid], [
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
            'hos_guid',
            'vn',
            'hn',
            'an',
            'icode',
            'qty',
            'drugusage',
            'idr',
            'iperday',
            'iperdose',
            'recetime',
            'unitprice',
            'vstdate',
            'vsttime',
            'doctor',
            'rxdate',
            'rxtime',
            'sp_use',
            'hcode',
            'print',
            'dep_code',
            'finance_number',
            'discount',
            'use_right',
            'node_id',
            'order_no',
            'sub_type',
            'pttype',
            'income',
            'remain',
            'item_type',
            'staff',
            'doctor_lock',
            'paidst',
            'item_no',
            'last_modified',
            'sum_price',
            'cost',
            'stock_department_id',
            'command_doctor',
        ],
    ]) ?>

</div>
