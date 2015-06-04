<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "icd101".
 *
 * @property string $code
 * @property string $name
 * @property string $spclty
 * @property string $tname
 * @property string $code3
 * @property string $code4
 * @property string $code5
 * @property integer $sex
 * @property string $ipd_valid
 * @property string $icd10compat
 * @property string $icd10tmcompat
 * @property string $active_status
 * @property string $hos_guid
 * @property string $hos_guid_ext
 */
class Icd101 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'icd101';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['sex'], 'integer'],
            [['code'], 'string', 'max' => 7],
            [['name'], 'string', 'max' => 200],
            [['spclty'], 'string', 'max' => 2],
            [['tname'], 'string', 'max' => 150],
            [['code3'], 'string', 'max' => 3],
            [['code4', 'code5', 'ipd_valid', 'icd10compat', 'icd10tmcompat', 'active_status'], 'string', 'max' => 1],
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
            'code' => 'Code',
            'name' => 'Name',
            'spclty' => 'Spclty',
            'tname' => 'Tname',
            'code3' => 'Code3',
            'code4' => 'Code4',
            'code5' => 'Code5',
            'sex' => 'Sex',
            'ipd_valid' => 'Ipd Valid',
            'icd10compat' => 'Icd10compat',
            'icd10tmcompat' => 'Icd10tmcompat',
            'active_status' => 'Active Status',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
        ];
    }

    /**
     * @inheritdoc
     * @return Icd101Query the active query used by this AR class.
     */
    public function getIcd10name()
    {
        if (isset($this->name))
        {
            return $this->name;
        }else{
            return '';
        }
        
    }
    public static function find()
    {
        return new Icd101Query(get_called_class());
    }
}
