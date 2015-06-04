<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_items".
 *
 * @property integer $lab_items_code
 * @property string $lab_items_name
 * @property integer $lab_type_code
 * @property string $lab_items_unit
 * @property string $lab_items_normal_value
 * @property string $lab_items_hint
 * @property string $lab_items_default_value
 * @property integer $lab_items_group
 * @property double $service_price
 * @property string $possible_value
 * @property string $lab_routine
 * @property string $icode
 * @property integer $lab_items_sub_group_code
 * @property string $require_specimen
 * @property integer $specimen_code
 * @property integer $wait_hour
 * @property string $critical_value
 * @property integer $display_order
 * @property string $ecode
 * @property double $service_price2
 * @property double $service_price3
 * @property double $service_price_ipd
 * @property double $service_price_ipd2
 * @property double $service_price_ipd3
 * @property string $check_user
 * @property string $sub_group_list
 * @property string $range_check
 * @property double $range_check_min
 * @property double $range_check_max
 * @property integer $result_type
 * @property double $range_check_min_female
 * @property double $range_check_max_female
 * @property string $lab_items_code_guid
 * @property double $service_cost
 * @property string $oldcode
 * @property string $items_is_outlab
 * @property string $hos_guid
 * @property string $report_edit_style
 * @property integer $memo_line_count
 * @property string $alert_critical_value
 * @property double $critical_range_min_male
 * @property double $critical_range_min_female
 * @property double $critical_range_max_male
 * @property double $critical_range_max_female
 * @property string $confirm_order_text
 * @property string $loinc_code
 * @property string $check_result_by_age
 * @property string $check_history
 * @property integer $check_history_day
 * @property string $lab_items_display_name
 */
class Labitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_items_code'], 'required'],
            [['lab_items_code', 'lab_type_code', 'lab_items_group', 'lab_items_sub_group_code', 'specimen_code', 'wait_hour', 'display_order', 'result_type', 'memo_line_count', 'check_history_day'], 'integer'],
            [['service_price', 'service_price2', 'service_price3', 'service_price_ipd', 'service_price_ipd2', 'service_price_ipd3', 'range_check_min', 'range_check_max', 'range_check_min_female', 'range_check_max_female', 'service_cost', 'critical_range_min_male', 'critical_range_min_female', 'critical_range_max_male', 'critical_range_max_female'], 'number'],
            [['possible_value'], 'string'],
            [['lab_items_name', 'lab_items_hint', 'lab_items_default_value', 'sub_group_list', 'confirm_order_text'], 'string', 'max' => 250],
            [['lab_items_unit', 'lab_items_normal_value', 'oldcode'], 'string', 'max' => 150],
            [['lab_routine', 'require_specimen', 'check_user', 'range_check', 'items_is_outlab', 'alert_critical_value', 'check_result_by_age', 'check_history'], 'string', 'max' => 1],
            [['icode'], 'string', 'max' => 7],
            [['critical_value'], 'string', 'max' => 100],
            [['ecode'], 'string', 'max' => 10],
            [['lab_items_code_guid', 'hos_guid'], 'string', 'max' => 38],
            [['report_edit_style'], 'string', 'max' => 25],
            [['loinc_code'], 'string', 'max' => 15],
            [['lab_items_display_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lab_items_code' => 'Lab Items Code',
            'lab_items_name' => 'Lab Items Name',
            'lab_type_code' => 'Lab Type Code',
            'lab_items_unit' => 'Lab Items Unit',
            'lab_items_normal_value' => 'Lab Items Normal Value',
            'lab_items_hint' => 'Lab Items Hint',
            'lab_items_default_value' => 'Lab Items Default Value',
            'lab_items_group' => 'Lab Items Group',
            'service_price' => 'Service Price',
            'possible_value' => 'Possible Value',
            'lab_routine' => 'Lab Routine',
            'icode' => 'Icode',
            'lab_items_sub_group_code' => 'Lab Items Sub Group Code',
            'require_specimen' => 'Require Specimen',
            'specimen_code' => 'Specimen Code',
            'wait_hour' => 'Wait Hour',
            'critical_value' => 'Critical Value',
            'display_order' => 'Display Order',
            'ecode' => 'Ecode',
            'service_price2' => 'Service Price2',
            'service_price3' => 'Service Price3',
            'service_price_ipd' => 'Service Price Ipd',
            'service_price_ipd2' => 'Service Price Ipd2',
            'service_price_ipd3' => 'Service Price Ipd3',
            'check_user' => 'Check User',
            'sub_group_list' => 'Sub Group List',
            'range_check' => 'Range Check',
            'range_check_min' => 'Range Check Min',
            'range_check_max' => 'Range Check Max',
            'result_type' => 'Result Type',
            'range_check_min_female' => 'Range Check Min Female',
            'range_check_max_female' => 'Range Check Max Female',
            'lab_items_code_guid' => 'Lab Items Code Guid',
            'service_cost' => 'Service Cost',
            'oldcode' => 'Oldcode',
            'items_is_outlab' => 'Items Is Outlab',
            'hos_guid' => 'Hos Guid',
            'report_edit_style' => 'Report Edit Style',
            'memo_line_count' => 'Memo Line Count',
            'alert_critical_value' => 'Alert Critical Value',
            'critical_range_min_male' => 'Critical Range Min Male',
            'critical_range_min_female' => 'Critical Range Min Female',
            'critical_range_max_male' => 'Critical Range Max Male',
            'critical_range_max_female' => 'Critical Range Max Female',
            'confirm_order_text' => 'Confirm Order Text',
            'loinc_code' => 'Loinc Code',
            'check_result_by_age' => 'Check Result By Age',
            'check_history' => 'Check History',
            'check_history_day' => 'Check History Day',
            'lab_items_display_name' => 'Lab Items Display Name',
        ];
    }

    /**
     * @inheritdoc
     * @return LabitemsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LabitemsQuery(get_called_class());
    }
}
