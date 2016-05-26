<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "{{%osoba}}".
 *
 * @property integer $id
 * @property string $prezime
 * @property string $ime_roditelja
 * @property string $ime
 * @property integer $telefon_mobilni
 * @property integer $telefon_posao
 * @property integer $telefon_kuca
 * @property string $adresa
 * @property string $email
 * @property string $napomena
 * @property integer $prostorija
 * @property integer $trenutni_status
 * @property integer $user_id
 *
 * @property \app\models\User $user
 * @property \app\models\TrenutniStatus $trenutniStatus
 * @property \app\models\Prostorija $prostorija0
 */
class Osoba extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prezime', 'ime_roditelja', 'ime', 'adresa', 'email', 'prostorija', 'trenutni_status', 'user_id'], 'required'],
            [['telefon_mobilni', 'telefon_posao', 'telefon_kuca', 'prostorija', 'trenutni_status', 'user_id'], 'integer'],
            [['napomena'], 'string'],
            [['prezime', 'ime_roditelja', 'ime', 'adresa', 'email'], 'string', 'max' => 255]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%osoba}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prezime' => 'Prezime',
            'ime_roditelja' => 'Ime Roditelja',
            'ime' => 'Ime',
            'telefon_mobilni' => 'Telefon Mobilni',
            'telefon_posao' => 'Telefon Posao',
            'telefon_kuca' => 'Telefon Kuca',
            'adresa' => 'Adresa',
            'email' => 'Email',
            'napomena' => 'Napomena',
            'prostorija' => 'Prostorija',
            'trenutni_status' => 'Trenutni Status',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\app\models\User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrenutniStatus()
    {
        return $this->hasOne(\app\models\TrenutniStatus::className(), ['id' => 'trenutni_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProstorija0()
    {
        return $this->hasOne(\app\models\Prostorija::className(), ['id' => 'prostorija']);
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
     * @return \app\models\OsobaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\OsobaQuery(get_called_class());
    }
}
