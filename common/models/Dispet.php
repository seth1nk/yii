<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dispet".
 *
 * @property int $Код_авто
 * @property string $Время_прибытия
 * @property string $Время_отбытия
 * @property int $Код_водителя
 * @property int $Путевка
 * @property int $Товар
 *
 * @property Avto $КодАвто
 * @property Voditeli $КодВодителя
 * @property Marh $Путевка0
 * @property Tovar $Товар0
 */
class Dispet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dispet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_авто', 'Время_прибытия', 'Время_отбытия', 'Код_водителя', 'Путевка', 'Товар'], 'required'],
            [['Код_авто', 'Код_водителя', 'Путевка', 'Товар'], 'integer'],
            [['Время_прибытия', 'Время_отбытия'], 'string', 'max' => 15],
            [['Код_водителя'], 'unique'],
            [['Путевка', 'Товар'], 'unique', 'targetAttribute' => ['Путевка', 'Товар']],
            [['Код_авто'], 'unique'],
            [['Код_авто'], 'exist', 'skipOnError' => true, 'targetClass' => Avto::class, 'targetAttribute' => ['Код_авто' => 'Код_авто']],
            [['Код_водителя'], 'exist', 'skipOnError' => true, 'targetClass' => Voditeli::class, 'targetAttribute' => ['Код_водителя' => 'Код_водителя']],
            [['Путевка'], 'exist', 'skipOnError' => true, 'targetClass' => Marh::class, 'targetAttribute' => ['Путевка' => 'Код_маршрута']],
            [['Товар'], 'exist', 'skipOnError' => true, 'targetClass' => Tovar::class, 'targetAttribute' => ['Товар' => 'Код_товара']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Код_авто' => 'Код Авто',
            'Время_прибытия' => 'Время Прибытия',
            'Время_отбытия' => 'Время Отбытия',
            'Код_водителя' => 'Код Водителя',
            'Путевка' => 'Путевка',
            'Товар' => 'Товар',
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

    /**
     * Gets query for [[КодВодителя]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getКодВодителя()
    {
        return $this->hasOne(Voditeli::class, ['Код_водителя' => 'Код_водителя']);
    }

    /**
     * Gets query for [[Путевка0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getПутевка0()
    {
        return $this->hasOne(Marh::class, ['Код_маршрута' => 'Путевка']);
    }

    /**
     * Gets query for [[Товар0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getТовар0()
    {
        return $this->hasOne(Tovar::class, ['Код_товара' => 'Товар']);
    }
}
