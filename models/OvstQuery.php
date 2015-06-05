<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ovst]].
 *
 * @see Ovst
 */
class OvstQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Ovst[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ovst|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}