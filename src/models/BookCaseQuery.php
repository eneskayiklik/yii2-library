<?php

namespace eneskayiklik\library\models;

/**
 * This is the ActiveQuery class for [[BookCase]].
 *
 * @see BookCase
 */
class BookCaseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return BookCase[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return BookCase|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
