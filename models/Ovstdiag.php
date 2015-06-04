<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ovstdiag".
 *
 * @property integer $ovst_diag_id
 * @property string $vn
 * @property string $icd10
 * @property string $hn
 * @property string $vstdate
 * @property string $vsttime
 * @property string $diagtype
 * @property string $icd103
 * @property string $hcode
 * @property string $doctor
 * @property integer $episode
 * @property string $ext_code
 * @property string $hos_guid
 * @property string $dep_flag
 * @property integer $ovst_oper_type
 * @property string $staff
 * @property string $dx_guid
 * @property string $lock_dx
 */
class Ovstdiag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ovstdiag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ovst_diag_id'], 'required'],
            [['ovst_diag_id', 'episode', 'ovst_oper_type'], 'integer'],
            [['vstdate', 'vsttime'], 'safe'],
            [['vn'], 'string', 'max' => 13],
            [['icd10', 'hn'], 'string', 'max' => 9],
            [['diagtype', 'ext_code', 'dep_flag'], 'string', 'max' => 2],
            [['icd103'], 'string', 'max' => 3],
            [['hcode'], 'string', 'max' => 5],
            [['doctor'], 'string', 'max' => 6],
            [['hos_guid', 'dx_guid'], 'string', 'max' => 38],
            [['staff'], 'string', 'max' => 15],
            [['lock_dx'], 'string', 'max' => 1],
            [['vn', 'icd10'], 'unique', 'targetAttribute' => ['vn', 'icd10'], 'message' => 'The combination of Vn and Icd10 has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ovst_diag_id' => 'Ovst Diag ID',
            'vn' => 'Vn',
            'icd10' => 'Icd10',
            'hn' => 'Hn',
            'vstdate' => 'Vstdate',
            'vsttime' => 'Vsttime',
            'diagtype' => 'Diagtype',
            'icd103' => 'Icd103',
            'hcode' => 'Hcode',
            'doctor' => 'Doctor',
            'episode' => 'Episode',
            'ext_code' => 'Ext Code',
            'hos_guid' => 'Hos Guid',
            'dep_flag' => 'Dep Flag',
            'ovst_oper_type' => 'Ovst Oper Type',
            'staff' => 'Staff',
            'dx_guid' => 'Dx Guid',
            'lock_dx' => 'Lock Dx',
        ];
    }
    /**
     * Relation
     */
    public function getIcd101()
    {
        return $this->hasOne(Icd101::className(), ['code' => 'icd10']);
    }
    public function getDiagtypename()
    {
        return $this->hasOne(Diagtype::className(), ['diagtype' => 'diagtype']);
    }
    /**
     * Custom Function
     */
   
    /**
     * @inheritdoc
     * @return OvstdiagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OvstdiagQuery(get_called_class());
    }
}
