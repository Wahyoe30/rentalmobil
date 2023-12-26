<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property int $id_reservasi
 * @property int $id_harga
 * @property float $harga_sewa
 * @property float $lama_sewa
 * @property float $total_pembayaran
 *
 * @property Reservasi $reservasi
 * @property Harga $harga
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reservasi', 'id_harga', 'harga_sewa', 'lama_sewa', 'total_pembayaran'], 'required'],
            [['id_reservasi', 'id_harga'], 'integer'],
            [['harga_sewa', 'lama_sewa', 'total_pembayaran'], 'number'],
            [['id_reservasi'], 'exist', 'skipOnError' => true, 'targetClass' => Reservasi::className(), 'targetAttribute' => ['id_reservasi' => 'id_reservasi']],
            [['id_harga'], 'exist', 'skipOnError' => true, 'targetClass' => Harga::className(), 'targetAttribute' => ['id_harga' => 'id_harga']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_reservasi' => 'Id Reservasi',
            'id_harga' => 'Id Harga',
            'harga_sewa' => 'Harga Sewa',
            'lama_sewa' => 'Lama Sewa',
            'total_pembayaran' => 'Total Pembayaran',
        ];
    }

    /**
     * Gets query for [[Reservasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservasi()
    {
        return $this->hasOne(Reservasi::className(), ['id_reservasi' => 'id_reservasi']);
    }

    /**
     * Gets query for [[Harga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHarga()
    {
        return $this->hasOne(Harga::className(), ['id_harga' => 'id_harga']);
    }
}
