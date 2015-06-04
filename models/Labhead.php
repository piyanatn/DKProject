<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_head".
 *
 * @property integer $lab_order_number
 * @property string $doctor_code
 * @property integer $lab_items_group_code
 * @property string $vn
 * @property string $lab_head_remark
 * @property string $hn
 * @property string $order_date
 * @property string $report_date
 * @property string $reporter_name
 * @property string $report_time
 * @property string $confirm_specimen
 * @property string $confirm_report
 * @property string $department
 * @property string $form_name
 * @property string $sub_group_list
 * @property string $order_time
 * @property string $receive_date
 * @property string $receive_time
 * @property string $ward
 * @property string $result_note
 * @property string $lock_result
 * @property string $result_rtf
 * @property string $order_note
 * @property integer $lab_receive_number
 * @property string $approve_staff
 * @property string $anonymous
 * @property string $appointment
 * @property string $appointment_date
 * @property string $appointment_time
 * @property string $lis_order_no
 * @property string $confirm_charge_money
 * @property string $finance_lab_confirm
 * @property string $lab_order_number_guid
 * @property string $anonymous_request
 * @property string $clinic
 * @property string $send_to_cashier
 * @property string $receive_computer
 * @property string $hos_guid
 * @property string $order_department
 * @property integer $lab_perform_status_id
 * @property integer $lab_room_id
 * @property string $notify_depcode
 * @property integer $lab_priority_id
 * @property string $spclty
 * @property string $finance_lock
 * @property string $report_lock
 * @property string $report_lock_datetime
 * @property string $report_lock_computer
 * @property integer $batch_number
 * @property string $abnormal_result
 * @property string $lis_tube_machine
 * @property string $order_computer_name
 * @property string $lis_calc_finance
 * @property integer $hospital_department_id
 * @property string $send_mobile_msg
 * @property string $order_staff
 */
class Labhead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_head';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_order_number'], 'required'],
            [['lab_order_number', 'lab_items_group_code', 'lab_receive_number', 'lab_perform_status_id', 'lab_room_id', 'lab_priority_id', 'batch_number', 'hospital_department_id'], 'integer'],
            [['order_date', 'report_date', 'report_time', 'order_time', 'receive_date', 'receive_time', 'appointment_date', 'appointment_time', 'report_lock_datetime'], 'safe'],
            [['result_note', 'result_rtf', 'order_note'], 'string'],
            [['doctor_code'], 'string', 'max' => 7],
            [['vn'], 'string', 'max' => 13],
            [['lab_head_remark'], 'string', 'max' => 250],
            [['hn'], 'string', 'max' => 9],
            [['reporter_name'], 'string', 'max' => 100],
            [['confirm_specimen', 'confirm_report', 'lock_result', 'anonymous', 'appointment', 'confirm_charge_money', 'finance_lab_confirm', 'anonymous_request', 'send_to_cashier', 'finance_lock', 'report_lock', 'abnormal_result', 'lis_tube_machine', 'lis_calc_finance', 'send_mobile_msg'], 'string', 'max' => 1],
            [['department'], 'string', 'max' => 5],
            [['form_name', 'sub_group_list'], 'string', 'max' => 200],
            [['ward', 'spclty'], 'string', 'max' => 2],
            [['approve_staff', 'lis_order_no', 'receive_computer', 'order_staff'], 'string', 'max' => 25],
            [['lab_order_number_guid', 'hos_guid'], 'string', 'max' => 38],
            [['clinic', 'order_department', 'notify_depcode'], 'string', 'max' => 3],
            [['report_lock_computer', 'order_computer_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lab_order_number' => 'Lab Order Number',
            'doctor_code' => 'Doctor Code',
            'lab_items_group_code' => 'Lab Items Group Code',
            'vn' => 'Vn',
            'lab_head_remark' => 'Lab Head Remark',
            'hn' => 'Hn',
            'order_date' => 'Order Date',
            'report_date' => 'Report Date',
            'reporter_name' => 'Reporter Name',
            'report_time' => 'Report Time',
            'confirm_specimen' => 'Confirm Specimen',
            'confirm_report' => 'Confirm Report',
            'department' => 'Department',
            'form_name' => 'Form Name',
            'sub_group_list' => 'Sub Group List',
            'order_time' => 'Order Time',
            'receive_date' => 'Receive Date',
            'receive_time' => 'Receive Time',
            'ward' => 'Ward',
            'result_note' => 'Result Note',
            'lock_result' => 'Lock Result',
            'result_rtf' => 'Result Rtf',
            'order_note' => 'Order Note',
            'lab_receive_number' => 'Lab Receive Number',
            'approve_staff' => 'Approve Staff',
            'anonymous' => 'Anonymous',
            'appointment' => 'Appointment',
            'appointment_date' => 'Appointment Date',
            'appointment_time' => 'Appointment Time',
            'lis_order_no' => 'Lis Order No',
            'confirm_charge_money' => 'Confirm Charge Money',
            'finance_lab_confirm' => 'Finance Lab Confirm',
            'lab_order_number_guid' => 'Lab Order Number Guid',
            'anonymous_request' => 'Anonymous Request',
            'clinic' => 'Clinic',
            'send_to_cashier' => 'Send To Cashier',
            'receive_computer' => 'Receive Computer',
            'hos_guid' => 'Hos Guid',
            'order_department' => 'Order Department',
            'lab_perform_status_id' => 'Lab Perform Status ID',
            'lab_room_id' => 'Lab Room ID',
            'notify_depcode' => 'Notify Depcode',
            'lab_priority_id' => 'Lab Priority ID',
            'spclty' => 'Spclty',
            'finance_lock' => 'Finance Lock',
            'report_lock' => 'Report Lock',
            'report_lock_datetime' => 'Report Lock Datetime',
            'report_lock_computer' => 'Report Lock Computer',
            'batch_number' => 'Batch Number',
            'abnormal_result' => 'Abnormal Result',
            'lis_tube_machine' => 'Lis Tube Machine',
            'order_computer_name' => 'Order Computer Name',
            'lis_calc_finance' => 'Lis Calc Finance',
            'hospital_department_id' => 'Hospital Department ID',
            'send_mobile_msg' => 'Send Mobile Msg',
            'order_staff' => 'Order Staff',
        ];
    }
 /** Relations
     *  
     */
    public function getLaborder()
    {
        return $this->hasOne(Laborder::className(), ['lab_order_number' => 'lab_order_number']);
    }
    /**
     * @inheritdoc
     * @return LabheadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LabheadQuery(get_called_class());
    }
}
