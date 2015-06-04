<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagtype".
 *
 * @property string $diagtype
 * @property string $name
 * @property string $nhso_code
 * @property string $hos_guid
 * @property string $hos_guid_ext
 */
class Diagtype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagtype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diagtype'], 'required'],
            [['diagtype'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 100],
            [['nhso_code'], 'string', 'max' => 1],
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
            'diagtype' => 'Diagtype',
            'name' => 'Name',
            'nhso_code' => 'Nhso Code',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
        ];
    }

    /**
     * @inheritdoc
     * @return DiagtypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiagtypeQuery(get_called_class());
    }
}
