<?php

namespace app\models;

use Yii;
use \app\models\base\Osoba as BaseOsoba;

/**
 * This is the model class for table "lab7_osoba".
 */
class Osoba extends BaseOsoba
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['prezime', 'ime_roditelja', 'ime', 'adresa', 'email', 'prostorija', 'trenutni_status', 'user_id'], 'required'],
            [['telefon_mobilni', 'telefon_posao', 'telefon_kuca', 'prostorija', 'trenutni_status', 'user_id'], 'integer'],
            [['napomena'], 'string'],
            [['prezime', 'ime_roditelja', 'ime', 'adresa', 'email'], 'string', 'max' => 255]
        ]);
    }
	
}
