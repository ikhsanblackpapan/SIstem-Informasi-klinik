<?php

class Pasien extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pasien';
    }

    public function rules()
    {
        return array(
            array('no_rm, nama, jenis_kelamin, jenis_kunjungan', 'required'), // tambahkan jenis_kunjungan
            array('no_rm', 'length', 'max'=>20),
            array('nama', 'length', 'max'=>100),
            array('jenis_kelamin', 'length', 'max'=>1),
            array('golongan_darah', 'length', 'max'=>2),
            array('no_telepon', 'length', 'max'=>15),
            array('jenis_kelamin', 'in', 'range'=>array('L', 'P')),
            array('golongan_darah', 'in', 'range'=>array('A', 'B', 'AB', 'O', '-')),
            array('jenis_kunjungan', 'in', 'range'=>array('baru', 'lama')), // validasi jenis_kunjungan
            array('tanggal_lahir, tempat_lahir, alamat, alergi, created_at, updated_at', 'safe'),
            array('id_provinsi, id_kabupaten, id_user', 'numerical', 'integerOnly'=>true),
            // Untuk pencarian
            array('id_pasien, no_rm, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, id_provinsi, id_kabupaten, no_telepon, golongan_darah, alergi, created_at, updated_at, id_user, jenis_kunjungan', 'safe', 'on'=>'search'), // tambahkan jenis_kunjungan
        );
    }

    public function relations()
    {
        return array(
            'provinsi' => array(self::BELONGS_TO, 'Wilayah', 'id_provinsi'),
            'kabupaten' => array(self::BELONGS_TO, 'Wilayah', 'id_kabupaten'),
        );
    }

    public function attributeLabels()
    {
       return array(
            'id_pasien' => 'ID Pasien',
            'no_rm' => 'No. Rekam Medis',
            'nama' => 'Nama Lengkap',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'id_provinsi' => 'Provinsi',
            'id_kabupaten' => 'Kabupaten/Kota',
            'no_telepon' => 'No. Telepon',
            'golongan_darah' => 'Gol. Darah',
            'alergi' => 'Alergi',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
            'id_user' => 'User Login',
            'jenis_kunjungan' => 'Jenis Kunjungan', // tambahkan label ini
        );
    }

    public function beforeSave()
    {
        if($this->isNewRecord)
            $this->created_at = new CDbExpression('NOW()');
        $this->updated_at = new CDbExpression('NOW()');
        return parent::beforeSave();
    }
}