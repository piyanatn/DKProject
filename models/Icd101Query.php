<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Icd101]].
 *
 * @see Icd101
 */
class Icd101Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Icd101[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Icd101|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}