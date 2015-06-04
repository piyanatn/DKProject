<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lab_order".
 *
 * @property integer $lab_order_number
 * @property integer $lab_items_code
 * @property string $lab_order_result
 * @property string $lab_order_remark
 * @property string $staff
 * @property string $confirm
 * @property string $lab_items_name_ref
 * @property string $lab_items_normal_value_ref
 * @property integer $specimen_code
 * @property integer $lab_items_sub_group_code
 * @property string $order_type
 * @property double $item_cost
 * @property string $hos_guid
 * @property string $staff_lock_result
 * @property string $laborder_date
 * @property string $abnormal_result
 * @property string $hos_guid_ext
 * @property string $check_key
 * @property integer $lab_result_status
 */
class Laborder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_order_number', 'lab_items_code'], 'required'],
            [['lab_order_number', 'lab_items_code', 'specimen_code', 'lab_items_sub_group_code', 'lab_result_status'], 'integer'],
            [['item_cost'], 'number'],
            [['laborder_date'], 'safe'],
            [['lab_order_result', 'lab_order_remark', 'lab_items_name_ref'], 'string', 'max' => 250],
            [['staff', 'check_key'], 'string', 'max' => 50],
            [['confirm', 'order_type', 'staff_lock_result', 'abnormal_result'], 'string', 'max' => 1],
            [['lab_items_normal_value_ref'], 'string', 'max' => 150],
            [['hos_guid'], 'string', 'max' => 38],
            [['hos_guid_ext'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lab_order_number' => 'Lab Order Number',
            'lab_items_code' => 'Lab Items Code',
            'lab_order_result' => 'Lab Order Result',
            'lab_order_remark' => 'Lab Order Remark',
            'staff' => 'Staff',
            'confirm' => 'Confirm',
            'lab_items_name_ref' => 'Lab Items Name Ref',
            'lab_items_normal_value_ref' => 'Lab Items Normal Value Ref',
            'specimen_code' => 'Specimen Code',
            'lab_items_sub_group_code' => 'Lab Items Sub Group Code',
            'order_type' => 'Order Type',
            'item_cost' => 'Item Cost',
            'hos_guid' => 'Hos Guid',
            'staff_lock_result' => 'Staff Lock Result',
            'laborder_date' => 'Laborder Date',
            'abnormal_result' => 'Abnormal Result',
            'hos_guid_ext' => 'Hos Guid Ext',
            'check_key' => 'Check Key',
            'lab_result_status' => 'Lab Result Status',
        ];
    }
 /** Relations
     *  
     */
    public function getLabitem()
    {
        return $this->hasOne(Labitems::className(), ['lab_items_code' => 'lab_items_code']);
    }
    /**
     * @inheritdoc
     * @return LaborderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LaborderQuery(get_called_class());
    }
}
