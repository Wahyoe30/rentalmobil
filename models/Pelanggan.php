<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id_pelanggan
 * @property string $nama
 * @property string $alamat
 * @property int $no_telp
 *
 * @property Reservasi[] $reservasis
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'no_telp'], 'required'],
            [['no_telp'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[Reservasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservasis()
    {
        return $this->hasMany(Reservasi::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
