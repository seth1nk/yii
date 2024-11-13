<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avto".
 *
 * @property int $Код_авто
 * @property int $Регистрационный_номер_авто
 * @property string $Название_авто
 * @property int $Год_выпуска_авто
 * @property string $Пробег
 * @property string $Категория
 */
class Avto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Регистрационный_номер_авто', 'Название_авто', 'Год_выпуска_авто', 'Пробег', 'Категория'], 'required'],
            [['Регистрационный_номер_авто', 'Год_выпуска_авто'], 'integer'],
            [['Название_авто'], 'string', 'max' => 30],
            [['Пробег', 'Категория'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Регистрационный_номер_авто' => 'Регистрационный Номер Авто',
            'Название_авто' => 'Название Авто',
            'Год_выпуска_авто' => 'Год Выпуска Авто',
            'Пробег' => 'Пробег',
            'Категория' => 'Категория',
        ];
    }
}
