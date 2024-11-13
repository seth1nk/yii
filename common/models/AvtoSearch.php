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
            [['Код_авто', 'Регистрационный_номер_авто', 'Год_выпуска_авто'], 'integer'],
            [['Название_авто', 'Пробег', 'Категория'], 'safe'],
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
            'Код_авто' => $this->Код_авто,
            'Регистрационный_номер_авто' => $this->Регистрационный_номер_авто,
            'Год_выпуска_авто' => $this->Год_выпуска_авто,
        ]);

        $query->andFilterWhere(['like', 'Название_авто', $this->Название_авто])
            ->andFilterWhere(['like', 'Пробег', $this->Пробег])
            ->andFilterWhere(['like', 'Категория', $this->Категория]);

        return $dataProvider;
    }
}
