<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_drugitems".
 *
 * @property string $icode
 * @property string $name
 * @property string $strength
 * @property string $units
 * @property string $dosageform
 * @property string $drugnote
 * @property string $use_right
 * @property string $must_paid
 * @property string $istatus
 * @property integer $access_level
 * @property string $paidst
 * @property integer $displaycolor
 * @property string $price_lock
 * @property string $icode_guid
 * @property string $ename
 * @property double $cost
 * @property string $income
 * @property string $hos_guid
 * @property string $hos_guid_ext
 * @property string $is_medication
 * @property string $use_paidst
 */
class Sdrugitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_drugitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icode'], 'required'],
            [['access_level', 'displaycolor'], 'integer'],
            [['cost'], 'number'],
            [['icode'], 'string', 'max' => 7],
            [['name', 'dosageform'], 'string', 'max' => 100],
            [['strength', 'units'], 'string', 'max' => 50],
            [['drugnote', 'ename'], 'string', 'max' => 150],
            [['use_right', 'must_paid', 'istatus', 'price_lock', 'is_medication', 'use_paidst'], 'string', 'max' => 1],
            [['paidst', 'income'], 'string', 'max' => 2],
            [['icode_guid', 'hos_guid'], 'string', 'max' => 38],
            [['hos_guid_ext'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'icode' => 'Icode',
            'name' => 'Name',
            'strength' => 'Strength',
            'units' => 'Units',
            'dosageform' => 'Dosageform',
            'drugnote' => 'Drugnote',
            'use_right' => 'Use Right',
            'must_paid' => 'Must Paid',
            'istatus' => 'Istatus',
            'access_level' => 'Access Level',
            'paidst' => 'Paidst',
            'displaycolor' => 'Displaycolor',
            'price_lock' => 'Price Lock',
            'icode_guid' => 'Icode Guid',
            'ename' => 'Ename',
            'cost' => 'Cost',
            'income' => 'Income',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
            'is_medication' => 'Is Medication',
            'use_paidst' => 'Use Paidst',
        ];
    }

    /**
     * @inheritdoc
     * @return SdrugitemsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SdrugitemsQuery(get_called_class());
    }
     public function getfullname()
        {
                return $this->name .' '. $this->strength .' ' . $this->units;
        }
}
