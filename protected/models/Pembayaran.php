<?php

class Pembayaran extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pembayaran';
    }

    public function rules()
    {
        return array(
            array('id_kunjungan, tanggal_pembayaran, total_tagihan, total_dibayar, metode_pembayaran, status_pembayaran, id_user', 'required'),
            array('id_kunjungan, id_user', 'numerical', 'integerOnly'=>true),
            array('total_tagihan, total_dibayar', 'numerical'),
            array('metode_pembayaran, status_pembayaran', 'length', 'max'=>20),
            array('keterangan, created_at, updated_at', 'safe'),
            array('tanggal_pembayaran', 'date', 'format'=>'yyyy-MM-dd'),
            // Untuk pencarian
            array('id_pembayaran, id_kunjungan, tanggal_pembayaran, total_tagihan, total_dibayar, metode_pembayaran, status_pembayaran, keterangan, id_user, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'kunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'id_kunjungan'),
            'user' => array(self::BELONGS_TO, 'User', 'id_user'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_pembayaran' => 'ID Pembayaran',
            'id_kunjungan' => 'Kunjungan',
            'tanggal_pembayaran' => 'Tanggal Pembayaran',
            'total_tagihan' => 'Total Tagihan',
            'total_dibayar' => 'Total Dibayar',
            'metode_pembayaran' => 'Metode Pembayaran',
            'status_pembayaran' => 'Status Pembayaran',
            'keterangan' => 'Keterangan',
            'id_user' => 'User',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }


    public function search()
{
    $criteria = new CDbCriteria;

    $criteria->compare('id_pembayaran', $this->id_pembayaran, true);
    $criteria->compare('id_kunjungan', $this->id_kunjungan, true);
    $criteria->compare('tanggal_pembayaran', $this->tanggal_pembayaran, true);
    $criteria->compare('total_tagihan', $this->total_tagihan);
    $criteria->compare('total_dibayar', $this->total_dibayar);
    $criteria->compare('metode_pembayaran', $this->metode_pembayaran, true);
    $criteria->compare('status_pembayaran', $this->status_pembayaran, true);
    $criteria->compare('keterangan', $this->keterangan, true);
    $criteria->compare('id_user', $this->id_user, true);
    $criteria->compare('created_at', $this->created_at, true);
    $criteria->compare('updated_at', $this->updated_at, true);

    return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
    ));
}

    protected function beforeSave()
    {
        if($this->isNewRecord)
            $this->created_at = new CDbExpression('NOW()');
        $this->updated_at = new CDbExpression('NOW()');
        return parent::beforeSave();
    }

    // Contoh fungsi hitung total tagihan (jika ingin otomatis)
    public function hitungTotal()
    {
        $total = 0;
        if($this->kunjungan) {
            if(isset($this->kunjungan->tindakan)) {
                foreach($this->kunjungan->tindakan as $tindakan) {
                    $total += $tindakan->harga;
                }
            }
            if(isset($this->kunjungan->resep)) {
                foreach($this->kunjungan->resep as $resep) {
                    $total += $resep->obat->harga * $resep->jumlah;
                }
            }
        }
        return $total;
    }
}