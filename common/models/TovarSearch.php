<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tovar;

/**
 * TovarSearch represents the model behind the search form of `common\models\Tovar`.
 */
class TovarSearch extends Tovar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tovar', 'kolvo_tovar'], 'integer'],
            [['name_tovar'], 'safe'],
            [['cena_tovar'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tovar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_tovar' => $this->id_tovar,
            'kolvo_tovar' => $this->kolvo_tovar,
            'cena_tovar' => $this->cena_tovar,
        ]);

        $query->andFilterWhere(['like', 'name_tovar', $this->name_tovar]);

        return $dataProvider;
    }
}
