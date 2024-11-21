<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Voditeli;

/**
 * VoditeliSearch represents the model behind the search form of `common\models\Voditeli`.
 */
class VoditeliSearch extends Voditeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_vod', 'stazh'], 'integer'],
            [['name_vod', 'number_pass', 'adress', 'phone'], 'safe'],
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
        $query = Voditeli::find();

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
            'id_vod' => $this->id_vod,
            'stazh' => $this->stazh,
        ]);

        $query->andFilterWhere(['like', 'name_vod', $this->name_vod])
            ->andFilterWhere(['like', 'number_pass', $this->number_pass])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
