<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property string $kode_mobil
 * @property string $nama_mobil
 * @property string $no_plat
 *
 * @property Reservasi[] $reservasis
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mobil', 'nama_mobil', 'no_plat'], 'required'],
            [['kode_mobil', 'nama_mobil', 'no_plat'], 'string', 'max' => 30],
            [['kode_mobil'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_mobil' => 'Kode Mobil',
            'nama_mobil' => 'Nama Mobil',
            'no_plat' => 'No Plat',
        ];
    }

    /**
     * Gets query for [[Reservasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservasis()
    {
        return $this->hasMany(Reservasi::className(), ['kode_mobil' => 'kode_mobil']);
    }
}
