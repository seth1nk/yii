<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "marh".
 *
 * @property int $Код_маршрута
 * @property string $Пункт_назначения
 * @property int $Расстояние_до_пункта_назначения
 *
 * @property Dispet[] $dispets
 * @property Tovar[] $Товарs
 */
class Marh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Пункт_назначения', 'Расстояние_до_пункта_назначения'], 'required'],
            [['Расстояние_до_пункта_назначения'], 'integer'],
            [['Пункт_назначения'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_маршрута' => 'Код Маршрута',
            'Пункт_назначения' => 'Пункт Назначения',
            'Расстояние_до_пункта_назначения' => 'Расстояние До Пункта Назначения',
        ];
    }

    /**
     * Gets query for [[Dispets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispets()
    {
        return $this->hasMany(Dispet::class, ['Путевка' => 'Код_маршрута']);
    }

    /**
     * Gets query for [[Товарs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getТоварs()
    {
        return $this->hasMany(Tovar::class, ['Код_товара' => 'Товар'])->viaTable('dispet', ['Путевка' => 'Код_маршрута']);
    }
}
