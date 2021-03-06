<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "{{%prostorija}}".
 *
 * @property integer $id
 * @property integer $broj
 * @property integer $sprat
 * @property integer $zgrada
 * @property string $naziv
 * @property string $opis
 *
 * @property \app\models\Osoba[] $osobas
 * @property \app\models\Racunar[] $racunars
 */
class Prostorija extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['broj', 'sprat', 'zgrada'], 'required'],
            [['broj', 'sprat', 'zgrada'], 'integer'],
            [['opis'], 'string'],
            [['naziv'], 'string', 'max' => 255],
            [['broj'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prostorija}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'broj' => 'Broj',
            'sprat' => 'Sprat',
            'zgrada' => 'Zgrada',
            'naziv' => 'Naziv',
            'opis' => 'Opis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOsobas()
    {
        return $this->hasMany(\app\models\Osoba::className(), ['prostorija' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRacunars()
    {
        return $this->hasMany(\app\models\Racunar::className(), ['prostorija_id' => 'id']);
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
     * @return \app\models\ProstorijaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ProstorijaQuery(get_called_class());
    }
}
