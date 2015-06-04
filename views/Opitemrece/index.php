<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OpitemreceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Opitemreces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opitemrece-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Opitemrece', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hos_guid',
            'vn',
            'hn',
            'an',
            'icode',
            // 'qty',
            // 'drugusage',
            // 'idr',
            // 'iperday',
            // 'iperdose',
            // 'recetime',
            // 'unitprice',
            // 'vstdate',
            // 'vsttime',
            // 'doctor',
            // 'rxdate',
            // 'rxtime',
            // 'sp_use',
            // 'hcode',
            // 'print',
            // 'dep_code',
            // 'finance_number',
            // 'discount',
            // 'use_right',
            // 'node_id',
            // 'order_no',
            // 'sub_type',
            // 'pttype',
            // 'income',
            // 'remain',
            // 'item_type',
            // 'staff',
            // 'doctor_lock',
            // 'paidst',
            // 'item_no',
            // 'last_modified',
            // 'sum_price',
            // 'cost',
            // 'stock_department_id',
            // 'command_doctor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
