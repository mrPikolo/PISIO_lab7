<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "{{%trenutni_status}}".
 *
 * @property integer $id
 * @property string $naziv
 * @property string $napomena
 *
 * @property \app\models\Osoba[] $osobas
 */
class TrenutniStatus extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['naziv', 'napomena'], 'required'],
            [['napomena'], 'string'],
            [['naziv'], 'string', 'max' => 255]
        ];
    }
    
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
        return $this->hasMany(\app\models\Osoba::className(), ['trenutni_status' => 'id']);
    }

/**
     * @inheritdoc
     * @return type mixed
     */ 
    public function behaviors()
    {
        return [
            [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\TrenutniStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TrenutniStatusQuery(get_called_class());
    }
}
