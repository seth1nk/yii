<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Avto;

/**
 * AvtoSearch represents the model behind the search form of `common\models\Avto`.
 */
class AvtoSearch extends Avto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_avto', 'god', 'probeg'], 'integer'],
            [['registration_number', 'name_avto', 'category'], 'safe'],
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
        $query = Avto::find();

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
            'god' => $this->god,
            'probeg' => $this->probeg,
        ]);

        $query->andFilterWhere(['like', 'registration_number', $this->registration_number])
            ->andFilterWhere(['like', 'name_avto', $this->name_avto])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
