<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%trenutni_status}}".
 *
 * @property integer $id
 * @property string $naziv
 * @property string $napomena
 *
 * @property Osoba[] $osobas
 */
class TrenutniStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trenutni_status}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['naziv', 'napomena'], 'required'],
            [['napomena'], 'string'],
            [['naziv'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naziv' => 'Naziv',
            'napomena' => 'Napomena',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOsobas()
    {
        return $this->hasMany(Osoba::className(), ['trenutni_status' => 'id'])->inverseOf('trenutniStatus');
    }
}
