<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Osoba;

/**
 * app\models\OsobaSearch represents the model behind the search form about `app\models\Osoba`.
 */
 class OsobaSearch extends Osoba
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'telefon_mobilni', 'telefon_posao', 'telefon_kuca', 'prostorija', 'trenutni_status', 'user_id'], 'integer'],
            [['prezime', 'ime_roditelja', 'ime', 'adresa', 'email', 'napomena'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Osoba::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'telefon_mobilni' => $this->telefon_mobilni,
            'telefon_posao' => $this->telefon_posao,
            'telefon_kuca' => $this->telefon_kuca,
            'prostorija' => $this->prostorija,
            'trenutni_status' => $this->trenutni_status,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'prezime', $this->prezime])
            ->andFilterWhere(['like', 'ime_roditelja', $this->ime_roditelja])
            ->andFilterWhere(['like', 'ime', $this->ime])
            ->andFilterWhere(['like', 'adresa', $this->adresa])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'napomena', $this->napomena]);

        return $dataProvider;
    }
}
