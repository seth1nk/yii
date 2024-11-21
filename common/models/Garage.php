<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "garage".
 *
 * @property int $id_avto
 * @property string $polomka
 * @property string $zapchast
 * @property float $cena_zapchast
 * @property string $data_nachalo
 * @property string|null $data_konec
 *
 * @property Avto $avto
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
            [['id_avto', 'polomka', 'zapchast', 'cena_zapchast', 'data_nachalo'], 'required'],
            [['id_avto'], 'integer'],
            [['cena_zapchast'], 'number'],
            [['data_nachalo', 'data_konec'], 'safe'],
            [['polomka', 'zapchast'], 'string', 'max' => 255],
            [['id_avto'], 'unique'],
            [['id_avto'], 'exist', 'skipOnError' => true, 'targetClass' => Avto::class, 'targetAttribute' => ['id_avto' => 'id_avto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_avto' => 'Id Avto',
            'polomka' => 'Polomka',
            'zapchast' => 'Zapchast',
            'cena_zapchast' => 'Cena Zapchast',
            'data_nachalo' => 'Data Nachalo',
            'data_konec' => 'Data Konec',
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
}
