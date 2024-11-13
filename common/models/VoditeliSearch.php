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
            [['Код_водителя', 'Стаж', 'Номер_паспорта'], 'integer'],
            [['ФИО_водителя', 'Место_прописки', 'Телефон'], 'safe'],
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
            'Код_водителя' => $this->Код_водителя,
            'Стаж' => $this->Стаж,
            'Номер_паспорта' => $this->Номер_паспорта,
        ]);

        $query->andFilterWhere(['like', 'ФИО_водителя', $this->ФИО_водителя])
            ->andFilterWhere(['like', 'Место_прописки', $this->Место_прописки])
            ->andFilterWhere(['like', 'Телефон', $this->Телефон]);

        return $dataProvider;
    }
}
