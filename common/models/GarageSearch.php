<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Garage;

/**
 * GarageSearch represents the model behind the search form of `common\models\Garage`.
 */
class GarageSearch extends Garage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_avto'], 'integer'],
            [['polomka', 'zapchast', 'data_nachalo', 'data_konec'], 'safe'],
            [['cena_zapchast'], 'number'],
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
        $query = Garage::find();

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
            'id_avto' => $this->id_avto,
            'cena_zapchast' => $this->cena_zapchast,
            'data_nachalo' => $this->data_nachalo,
            'data_konec' => $this->data_konec,
        ]);

        $query->andFilterWhere(['like', 'polomka', $this->polomka])
            ->andFilterWhere(['like', 'zapchast', $this->zapchast]);

        return $dataProvider;
    }
}
