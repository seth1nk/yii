<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Marh;

/**
 * MarhSearch represents the model behind the search form of `common\models\Marh`.
 */
class MarhSearch extends Marh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_маршрута', 'Расстояние_до_пункта_назначения'], 'integer'],
            [['Пункт_назначения'], 'safe'],
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
        $query = Marh::find();

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
            'Код_маршрута' => $this->Код_маршрута,
            'Расстояние_до_пункта_назначения' => $this->Расстояние_до_пункта_назначения,
        ]);

        $query->andFilterWhere(['like', 'Пункт_назначения', $this->Пункт_назначения]);

        return $dataProvider;
    }
}
