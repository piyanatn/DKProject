<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Labitems */

$this->title = $model->lab_items_code;
$this->params['breadcrumbs'][] = ['label' => 'Labitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labitems-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->lab_items_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->lab_items_code], [
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
            'lab_items_code',
            'lab_items_name',
            'lab_type_code',
            'lab_items_unit',
            'lab_items_normal_value',
            'lab_items_hint',
            'lab_items_default_value',
            'lab_items_group',
            'service_price',
            'possible_value:ntext',
            'lab_routine',
            'icode',
            'lab_items_sub_group_code',
            'require_specimen',
            'specimen_code',
            'wait_hour',
            'critical_value',
            'display_order',
            'ecode',
            'service_price2',
            'service_price3',
            'service_price_ipd',
            'service_price_ipd2',
            'service_price_ipd3',
            'check_user',
            'sub_group_list',
            'range_check',
            'range_check_min',
            'range_check_max',
            'result_type',
            'range_check_min_female',
            'range_check_max_female',
            'lab_items_code_guid',
            'service_cost',
            'oldcode',
            'items_is_outlab',
            'hos_guid',
            'report_edit_style',
            'memo_line_count',
            'alert_critical_value',
            'critical_range_min_male',
            'critical_range_min_female',
            'critical_range_max_male',
            'critical_range_max_female',
            'confirm_order_text',
            'loinc_code',
            'check_result_by_age',
            'check_history',
            'check_history_day',
            'lab_items_display_name',
        ],
    ]) ?>

</div>
