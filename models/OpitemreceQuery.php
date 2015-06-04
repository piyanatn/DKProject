<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Opitemrece]].
 *
 * @see Opitemrece
 */
class OpitemreceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Opitemrece[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Opitemrece|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}