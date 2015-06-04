<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Patientimage]].
 *
 * @see Patientimage
 */
class PatientImageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Patientimage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Patientimage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}