<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "garage".
 *
 * @property int $Код_авто
 * @property string $Тип_поломки
 * @property string $Вид_запчасти
 * @property int $Цена_запчасти
 * @property string $Дата_начала_ремонта
 * @property string $Дата_конца_ремонта
 *
 * @property Avto $КодАвто
 */
class Garage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'garage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Тип_поломки', 'Вид_запчасти', 'Цена_запчасти', 'Дата_начала_ремонта', 'Дата_конца_ремонта'], 'required'],
            [['Цена_запчасти'], 'integer'],
            [['Дата_начала_ремонта', 'Дата_конца_ремонта'], 'safe'],
            [['Тип_поломки', 'Вид_запчасти'], 'string', 'max' => 15],
            [['Код_авто'], 'exist', 'skipOnError' => true, 'targetClass' => Avto::class, 'targetAttribute' => ['Код_авто' => 'Код_авто']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Тип_поломки' => 'Тип Поломки',
            'Вид_запчасти' => 'Вид Запчасти',
            'Цена_запчасти' => 'Цена Запчасти',
            'Дата_начала_ремонта' => 'Дата Начала Ремонта',
            'Дата_конца_ремонта' => 'Дата Конца Ремонта',
        ];
    }

    /**
     * Gets query for [[КодАвто]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getКодАвто()
    {
        return $this->hasOne(Avto::class, ['Код_авто' => 'Код_авто']);
    }
}
