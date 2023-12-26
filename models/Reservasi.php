<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservasi".
 *
 * @property int $id_reservasi
 * @property int $id_pelanggan
 * @property string $kode_mobil
 * @property string $tgl_pesan
 * @property string $tgl_kembali
 * @property float $lama_sewa
 * @property string $status
 *
 * @property Pembayaran[] $pembayarans
 * @property Pelanggan $pelanggan
 * @property Kendaraan $kodeMobil
 */
class Reservasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelanggan', 'kode_mobil', 'tgl_pesan', 'tgl_kembali', 'lama_sewa', 'status'], 'required'],
            [['id_pelanggan'], 'integer'],
            [['tgl_pesan', 'tgl_kembali'], 'safe'],
            [['lama_sewa'], 'number'],
            [['kode_mobil', 'status'], 'string', 'max' => 30],
            [['id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['id_pelanggan' => 'id_pelanggan']],
            [['kode_mobil'], 'exist', 'skipOnError' => true, 'targetClass' => Kendaraan::className(), 'targetAttribute' => ['kode_mobil' => 'kode_mobil']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reservasi' => 'Id Reservasi',
            'id_pelanggan' => 'Id Pelanggan',
            'kode_mobil' => 'Kode Mobil',
            'tgl_pesan' => 'Tgl Pesan',
            'tgl_kembali' => 'Tgl Kembali',
            'lama_sewa' => 'Lama Sewa',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['id_reservasi' => 'id_reservasi']);
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['id_pelanggan' => 'id_pelanggan']);
    }

    /**
     * Gets query for [[KodeMobil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMobil()
    {
        return $this->hasOne(Kendaraan::className(), ['kode_mobil' => 'kode_mobil']);
    }
}
