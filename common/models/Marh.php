<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "marh".
 *
 * @property int $id_marh
 * @property string $mesto
 * @property int $rasstoyanie
 *
 * @property Dispet[] $dispets
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
            [['mesto', 'rasstoyanie'], 'required'],
            [['rasstoyanie'], 'integer'],
            [['mesto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_marh' => 'Id Marh',
            'mesto' => 'Mesto',
            'rasstoyanie' => 'Rasstoyanie',
        ];
    }

    /**
     * Gets query for [[Dispets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispets()
    {
        return $this->hasMany(Dispet::class, ['pytevka' => 'id_marh']);
    }
}
