<?php
class Pegawai extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pegawai';
    }

    public function rules()
    {
        return array(
            array('nip, nama, jabatan, jenis_kelamin, tanggal_mulai_kerja', 'required'),
            array('nip', 'length', 'max'=>20),
            array('nama', 'length', 'max'=>100),
            array('jenis_kelamin', 'in', 'range'=>array('L','P')),
            array('jabatan', 'in', 'range'=>array('Dokter','Perawat','Apoteker','Admin','Kasir')),
            array('status_aktif', 'boolean'),
            array('email', 'email'),
            array('alamat, no_telepon, created_at, updated_at', 'safe'),
            array('tanggal_mulai_kerja', 'date', 'format'=>'yyyy-MM-dd'),
            // Untuk pencarian
            array('id_pegawai, nip, nama, jenis_kelamin, alamat, no_telepon, email, jabatan, tanggal_mulai_kerja, status_aktif, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_pegawai' => 'ID Pegawai',
            'nip' => 'NIP',
            'nama' => 'Nama Lengkap',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_telepon' => 'No. Telepon',
            'email' => 'Email',
            'jabatan' => 'Jabatan',
            'tanggal_mulai_kerja' => 'Tanggal Mulai Kerja',
            'status_aktif' => 'Status Aktif',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

    public function search()
{
    $criteria = new CDbCriteria;

    $criteria->compare('id_pegawai', $this->id_pegawai, true);
    $criteria->compare('nip', $this->nip, true);
    $criteria->compare('nama', $this->nama, true);
    $criteria->compare('jenis_kelamin', $this->jenis_kelamin, true);
    $criteria->compare('alamat', $this->alamat, true);
    $criteria->compare('no_telepon', $this->no_telepon, true);
    $criteria->compare('email', $this->email, true);
    $criteria->compare('jabatan', $this->jabatan, true);
    $criteria->compare('tanggal_mulai_kerja', $this->tanggal_mulai_kerja, true);
    $criteria->compare('status_aktif', $this->status_aktif);
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
}