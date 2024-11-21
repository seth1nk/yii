<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dispet".
 *
 * @property int $id_avto
 * @property string $time_prib
 * @property string|null $time_otb
 * @property int $id_vod
 * @property int $pytevka
 * @property int $tovar
 *
 * @property Avto $avto
 * @property Marh $pytevka0
 * @property Tovar $tovar0
 * @property Voditeli $vod
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
            [['id_avto', 'time_prib', 'id_vod', 'pytevka', 'tovar'], 'required'],
            [['id_avto', 'id_vod', 'pytevka', 'tovar'], 'integer'],
            [['time_prib', 'time_otb'], 'safe'],
            [['id_avto'], 'unique'],
            [['pytevka'], 'exist', 'skipOnError' => true, 'targetClass' => Marh::class, 'targetAttribute' => ['pytevka' => 'id_marh']],
            [['id_avto'], 'exist', 'skipOnError' => true, 'targetClass' => Avto::class, 'targetAttribute' => ['id_avto' => 'id_avto']],
            [['id_vod'], 'exist', 'skipOnError' => true, 'targetClass' => Voditeli::class, 'targetAttribute' => ['id_vod' => 'id_vod']],
            [['tovar'], 'exist', 'skipOnError' => true, 'targetClass' => Tovar::class, 'targetAttribute' => ['tovar' => 'id_tovar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_avto' => 'Id Avto',
            'time_prib' => 'Time Prib',
            'time_otb' => 'Time Otb',
            'id_vod' => 'Id Vod',
            'pytevka' => 'Pytevka',
            'tovar' => 'Tovar',
        ];
    }

    /**
     * Gets query for [[Avto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAvto()
    {
        return $this->hasOne(Avto::class, ['id_avto' => 'id_avto']);
    }

    /**
     * Gets query for [[Pytevka0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPytevka0()
    {
        return $this->hasOne(Marh::class, ['id_marh' => 'pytevka']);
    }

    /**
     * Gets query for [[Tovar0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTovar0()
    {
        return $this->hasOne(Tovar::class, ['id_tovar' => 'tovar']);
    }

    /**
     * Gets query for [[Vod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVod()
    {
        return $this->hasOne(Voditeli::class, ['id_vod' => 'id_vod']);
    }
}
