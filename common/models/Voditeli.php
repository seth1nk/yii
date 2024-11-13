<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "voditeli".
 *
 * @property int $Код_водителя
 * @property string $ФИО_водителя
 * @property int $Стаж
 * @property int $Номер_паспорта
 * @property string $Место_прописки
 * @property string $Телефон
 *
 * @property Dispet $dispet
 */
class Voditeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'voditeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ФИО_водителя', 'Стаж', 'Номер_паспорта', 'Место_прописки', 'Телефон'], 'required'],
            [['Стаж', 'Номер_паспорта'], 'integer'],
            [['ФИО_водителя'], 'string', 'max' => 50],
            [['Место_прописки'], 'string', 'max' => 30],
            [['Телефон'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_водителя' => 'Код Водителя',
            'ФИО_водителя' => 'Фио Водителя',
            'Стаж' => 'Стаж',
            'Номер_паспорта' => 'Номер Паспорта',
            'Место_прописки' => 'Место Прописки',
            'Телефон' => 'Телефон',
        ];
    }

    /**
     * Gets query for [[Dispet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispet()
    {
        return $this->hasOne(Dispet::class, ['Код_водителя' => 'Код_водителя']);
    }
}
