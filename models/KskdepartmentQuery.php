<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Kskdepartment]].
 *
 * @see Kskdepartment
 */
class KskdepartmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Kskdepartment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kskdepartment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}