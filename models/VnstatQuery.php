<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Vnstat]].
 *
 * @see Vnstat
 */
class VnstatQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Vnstat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Vnstat|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}