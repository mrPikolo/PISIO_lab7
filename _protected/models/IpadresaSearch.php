<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ipadresa;

/**
 * app\models\IpadresaSearch represents the model behind the search form about `app\models\Ipadresa`.
 */
 class IpadresaSearch extends Ipadresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'racunar_id'], 'integer'],
            [['dd', 'fqdn', 'kartica'], 'safe'],
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
        $query = Ipadresa::find();

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
            'racunar_id' => $this->racunar_id,
        ]);

        $query->andFilterWhere(['like', 'dd', $this->dd])
            ->andFilterWhere(['like', 'fqdn', $this->fqdn])
            ->andFilterWhere(['like', 'kartica', $this->kartica]);

        return $dataProvider;
    }
}
