<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Dispet;

/**
 * DispetSearch represents the model behind the search form of `common\models\Dispet`.
 */
class DispetSearch extends Dispet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_авто', 'Код_водителя', 'Путевка', 'Товар'], 'integer'],
            [['Время_прибытия', 'Время_отбытия'], 'safe'],
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
        $query = Dispet::find();

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
            'Код_авто' => $this->Код_авто,
            'Код_водителя' => $this->Код_водителя,
            'Путевка' => $this->Путевка,
            'Товар' => $this->Товар,
        ]);

        $query->andFilterWhere(['like', 'Время_прибытия', $this->Время_прибытия])
            ->andFilterWhere(['like', 'Время_отбытия', $this->Время_отбытия]);

        return $dataProvider;
    }
}
