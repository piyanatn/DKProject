<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Drugusage]].
 *
 * @see Drugusage
 */
class DrugusageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Drugusage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Drugusage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}