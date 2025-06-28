<?php
class Kunjungan extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'kunjungan';
    }

    public function rules()
    {
        return array(
            array('id_pasien, jenis_kunjungan, tanggal_kunjungan, id_dokter', 'required'),
            array('id_pasien, id_dokter', 'numerical', 'integerOnly'=>true),
            array('jenis_kunjungan, status_pembayaran', 'length', 'max'=>20),
            array('keluhan_utama', 'safe'),
            array('created_at, updated_at', 'safe'),
            // Untuk pencarian
            array('id_kunjungan, id_pasien, tanggal_kunjungan, jenis_kunjungan, keluhan_utama, id_dokter, status_pembayaran, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'pasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
            'dokter' => array(self::BELONGS_TO, 'Pegawai', 'id_dokter'),
            'tindakanKunjungan' => array(self::HAS_MANY, 'TindakanKunjungan', 'id_kunjungan'),
            'obatKunjungan' => array(self::HAS_MANY, 'ObatKunjungan', 'id_kunjungan'),
    );
    }

    public function attributeLabels()
    {
        return array(
            'id_kunjungan' => 'ID Kunjungan',
            'id_pasien' => 'Pasien',
            'tanggal_kunjungan' => 'Tanggal Kunjungan',
            'jenis_kunjungan' => 'Jenis Kunjungan',
            'keluhan_utama' => 'Keluhan Utama',
            'id_dokter' => 'Dokter',
            'status_pembayaran' => 'Status Pembayaran',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

    public function search()
{
    $criteria = new CDbCriteria;

    $criteria->compare('id_kunjungan', $this->id_kunjungan, true);
    $criteria->compare('id_pasien', $this->id_pasien, true);
    $criteria->compare('tanggal_kunjungan', $this->tanggal_kunjungan, true);
    $criteria->compare('jenis_kunjungan', $this->jenis_kunjungan, true);
    $criteria->compare('keluhan_utama', $this->keluhan_utama, true);
    $criteria->compare('id_dokter', $this->id_dokter, true);
    $criteria->compare('status_pembayaran', $this->status_pembayaran, true);
    $criteria->compare('created_at', $this->created_at, true);
    $criteria->compare('updated_at', $this->updated_at, true);

    return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
    ));
}

    // Optional: otomatis mengisi created_at dan updated_at
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
                $this->created_at = new CDbExpression('NOW()');
            $this->updated_at = new CDbExpression('NOW()');
            return true;
        }
        else
            return false;
    }
}