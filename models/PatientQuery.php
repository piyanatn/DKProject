<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Patient]].
 *
 * @see Patient
 */
class PatientQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Patient[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Patient|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}