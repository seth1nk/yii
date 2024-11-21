<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avto".
 *
 * @property int $id_avto
 * @property string $registration_number
 * @property string $name_avto
 * @property int $god
 * @property int $probeg
 * @property string $category
 *
 * @property Dispet $dispet
 * @property Garage $garage
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
            [['registration_number', 'name_avto', 'god', 'probeg', 'category'], 'required'],
            [['god', 'probeg'], 'integer'],
            [['registration_number', 'name_avto', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_avto' => 'Id Avto',
            'registration_number' => 'Registration Number',
            'name_avto' => 'Name Avto',
            'god' => 'God',
            'probeg' => 'Probeg',
            'category' => 'Category',
        ];
    }

    /**
     * Gets query for [[Dispet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispet()
    {
        return $this->hasOne(Dispet::class, ['id_avto' => 'id_avto']);
    }

    /**
     * Gets query for [[Garage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGarage()
    {
        return $this->hasOne(Garage::class, ['id_avto' => 'id_avto']);
    }
}
