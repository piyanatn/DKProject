<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Laborder]].
 *
 * @see Laborder
 */
class LaborderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Laborder[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Laborder|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}