<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "harga".
 *
 * @property int $id_harga
 * @property string $kode_mobil
 * @property float $harga_sewa
 *
 * @property Pembayaran[] $pembayarans
 */
class Harga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'harga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mobil', 'harga_sewa'], 'required'],
            [['harga_sewa'], 'number'],
            [['kode_mobil'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_harga' => 'Id Harga',
            'kode_mobil' => 'Kode Mobil',
            'harga_sewa' => 'Harga Sewa',
        ];
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['id_harga' => 'id_harga']);
    }
}
