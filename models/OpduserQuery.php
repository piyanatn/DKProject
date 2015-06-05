<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Opduser]].
 *
 * @see Opduser
 */
class OpduserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Opduser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Opduser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}