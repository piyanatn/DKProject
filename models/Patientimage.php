<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_image".
 *
 * @property string $hn
 * @property string $image_name
 * @property resource $image
 * @property integer $width
 * @property integer $height
 * @property string $capture_date
 * @property string $hos_guid
 * @property string $hos_guid_ext
 */
class Patientimage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hn', 'image_name'], 'required'],
            [['image'], 'string'],
            [['width', 'height'], 'integer'],
            [['capture_date'], 'safe'],
            [['hn'], 'string', 'max' => 9],
            [['image_name'], 'string', 'max' => 150],
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
            'hn' => 'Hn',
            'image_name' => 'Image Name',
            'image' => 'Image',
            'width' => 'Width',
            'height' => 'Height',
            'capture_date' => 'Capture Date',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
        ];
    }

    /**
     * @inheritdoc
     * @return PatientImageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PatientImageQuery(get_called_class());
    }
}
