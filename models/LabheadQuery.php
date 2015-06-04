<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Labhead]].
 *
 * @see Labhead
 */
class LabheadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Labhead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Labhead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}