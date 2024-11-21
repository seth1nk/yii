<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "voditeli".
 *
 * @property int $id_vod
 * @property string $name_vod
 * @property int $stazh
 * @property string $number_pass
 * @property string $adress
 * @property string $phone
 *
 * @property Dispet[] $dispets
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
            [['name_vod', 'stazh', 'number_pass', 'adress', 'phone'], 'required'],
            [['stazh'], 'integer'],
            [['name_vod', 'number_pass', 'adress', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_vod' => 'Id Vod',
            'name_vod' => 'Name Vod',
            'stazh' => 'Stazh',
            'number_pass' => 'Number Pass',
            'adress' => 'Adress',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Dispets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDispets()
    {
        return $this->hasMany(Dispet::class, ['id_vod' => 'id_vod']);
    }
}
