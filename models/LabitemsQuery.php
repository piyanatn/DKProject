<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Labitems]].
 *
 * @see Labitems
 */
class LabitemsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Labitems[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Labitems|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}