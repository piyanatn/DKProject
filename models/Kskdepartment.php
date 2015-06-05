<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kskdepartment".
 *
 * @property string $depcode
 * @property string $department
 * @property string $roomno
 * @property string $doctor_code
 * @property string $online_time
 * @property string $on_desk
 * @property string $spclty
 * @property string $screen_visible
 * @property string $doctor_visible
 * @property string $registry_visible
 * @property string $rx_visible
 * @property string $status_open
 * @property string $cashier_visible
 * @property string $medication_check
 * @property string $can_print_sticker
 * @property string $depcode_active
 * @property integer $hospital_department_id
 * @property string $print_sticker_check
 * @property string $ot_service_pay
 * @property string $hos_guid
 * @property string $oldcode
 * @property string $dep_confirm_code
 * @property string $ipd_visible
 * @property string $department_active
 * @property string $opd_file_tracking
 * @property string $second_line_text
 * @property double $df_percent
 * @property string $df_dec_price
 * @property integer $current_waiting_time
 * @property string $auto_confirm_medpay
 * @property integer $stock_department_id
 * @property integer $default_stock_department_id
 */
class Kskdepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kskdepartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['depcode'], 'required'],
            [['online_time'], 'safe'],
            [['hospital_department_id', 'current_waiting_time', 'stock_department_id', 'default_stock_department_id'], 'integer'],
            [['df_percent'], 'number'],
            [['depcode', 'oldcode'], 'string', 'max' => 3],
            [['department'], 'string', 'max' => 150],
            [['roomno'], 'string', 'max' => 5],
            [['doctor_code'], 'string', 'max' => 7],
            [['on_desk', 'screen_visible', 'doctor_visible', 'registry_visible', 'rx_visible', 'status_open', 'cashier_visible', 'medication_check', 'can_print_sticker', 'depcode_active', 'print_sticker_check', 'ot_service_pay', 'ipd_visible', 'department_active', 'opd_file_tracking', 'df_dec_price', 'auto_confirm_medpay'], 'string', 'max' => 1],
            [['spclty'], 'string', 'max' => 2],
            [['hos_guid'], 'string', 'max' => 38],
            [['dep_confirm_code'], 'string', 'max' => 10],
            [['second_line_text'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'depcode' => 'Depcode',
            'department' => 'Department',
            'roomno' => 'Roomno',
            'doctor_code' => 'Doctor Code',
            'online_time' => 'Online Time',
            'on_desk' => 'On Desk',
            'spclty' => 'Spclty',
            'screen_visible' => 'Screen Visible',
            'doctor_visible' => 'Doctor Visible',
            'registry_visible' => 'Registry Visible',
            'rx_visible' => 'Rx Visible',
            'status_open' => 'Status Open',
            'cashier_visible' => 'Cashier Visible',
            'medication_check' => 'Medication Check',
            'can_print_sticker' => 'Can Print Sticker',
            'depcode_active' => 'Depcode Active',
            'hospital_department_id' => 'Hospital Department ID',
            'print_sticker_check' => 'Print Sticker Check',
            'ot_service_pay' => 'Ot Service Pay',
            'hos_guid' => 'Hos Guid',
            'oldcode' => 'Oldcode',
            'dep_confirm_code' => 'Dep Confirm Code',
            'ipd_visible' => 'Ipd Visible',
            'department_active' => 'Department Active',
            'opd_file_tracking' => 'Opd File Tracking',
            'second_line_text' => 'Second Line Text',
            'df_percent' => 'Df Percent',
            'df_dec_price' => 'Df Dec Price',
            'current_waiting_time' => 'Current Waiting Time',
            'auto_confirm_medpay' => 'Auto Confirm Medpay',
            'stock_department_id' => 'Stock Department ID',
            'default_stock_department_id' => 'Default Stock Department ID',
        ];
    }

    /**
     * @inheritdoc
     * @return KskdepartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KskdepartmentQuery(get_called_class());
    }
}
