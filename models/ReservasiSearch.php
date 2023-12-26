<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservasi;

/**
 * ReservasiSearch represents the model behind the search form of `app\models\Reservasi`.
 */
class ReservasiSearch extends Reservasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reservasi', 'id_pelanggan'], 'integer'],
            [['kode_mobil', 'tgl_pesan', 'tgl_kembali', 'status'], 'safe'],
            [['lama_sewa'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reservasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_reservasi' => $this->id_reservasi,
            'id_pelanggan' => $this->id_pelanggan,
            'tgl_pesan' => $this->tgl_pesan,
            'tgl_kembali' => $this->tgl_kembali,
            'lama_sewa' => $this->lama_sewa,
        ]);

        $query->andFilterWhere(['like', 'kode_mobil', $this->kode_mobil])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
