<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $Код_товара
 * @property string $Наименование_товара
 * @property int $Количество_товара
 * @property int $Цена_товара
 *
 * @property Dispet[] $dispets
 * @property Marh[] $Путевкаs
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Наименование_товара', 'Количество_товара', 'Цена_товара'], 'required'],
            [['Количество_товара', 'Цена_товара'], 'integer'],
            [['Наименование_товара'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_товара' => 'Код Товара',
            'Наименование_товара' => 'Наименование Товара',
            'Количество_товара' => 'Количество Товара',
            'Цена_товара' => 'Цена Товара',
        ];
    }

    /**
     * Gets query for [[Dispets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispets()
    {
        return $this->hasMany(Dispet::class, ['Товар' => 'Код_товара']);
    }

    /**
     * Gets query for [[Путевкаs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getПутевкаs()
    {
        return $this->hasMany(Marh::class, ['Код_маршрута' => 'Путевка'])->viaTable('dispet', ['Товар' => 'Код_товара']);
    }
}
