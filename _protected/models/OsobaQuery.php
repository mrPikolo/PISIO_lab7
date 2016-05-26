<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Osoba]].
 *
 * @see Osoba
 */
class OsobaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Osoba[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Osoba|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}