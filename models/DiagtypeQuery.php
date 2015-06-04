<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Diagtype]].
 *
 * @see Diagtype
 */
class DiagtypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Diagtype[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Diagtype|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}