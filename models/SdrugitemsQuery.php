<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sdrugitems]].
 *
 * @see Sdrugitems
 */
class SdrugitemsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Sdrugitems[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Sdrugitems|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}