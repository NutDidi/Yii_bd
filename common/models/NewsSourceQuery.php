<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[NewsSource]].
 *
 * @see NewsSource
 */
class NewsSourceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NewsSource[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NewsSource|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}