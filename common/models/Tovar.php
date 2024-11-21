<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $id_tovar
 * @property string $name_tovar
 * @property int $kolvo_tovar
 * @property float $cena_tovar
 *
 * @property Dispet[] $dispets
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
            [['name_tovar', 'kolvo_tovar', 'cena_tovar'], 'required'],
            [['kolvo_tovar'], 'integer'],
            [['cena_tovar'], 'number'],
            [['name_tovar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tovar' => 'Id Tovar',
            'name_tovar' => 'Name Tovar',
            'kolvo_tovar' => 'Kolvo Tovar',
            'cena_tovar' => 'Cena Tovar',
        ];
    }

    /**
     * Gets query for [[Dispets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispets()
    {
        return $this->hasMany(Dispet::class, ['tovar' => 'id_tovar']);
    }
}
