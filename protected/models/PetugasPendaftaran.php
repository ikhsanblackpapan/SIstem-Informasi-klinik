<?php
class PetugasPendaftaran extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'petugas_pendaftaran';
    }

    public function rules()
    {
        return array(
            array('nama, jenis_kelamin, id_user', 'required'),
            array('nama, email', 'length', 'max'=>100),
            array('nip', 'length', 'max'=>30),
            array('jenis_kelamin', 'length', 'max'=>1),
            array('no_telepon', 'length', 'max'=>20),
            array('alamat, created_at, updated_at', 'safe'),
            array('id_user', 'numerical', 'integerOnly'=>true),
            // Untuk pencarian
            array('id_petugas, nama, nip, jenis_kelamin, alamat, no_telepon, email, id_user, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'id_user'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_petugas' => 'ID Petugas',
            'nama' => 'Nama',
            'nip' => 'NIP',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_telepon' => 'No. Telepon',
            'email' => 'Email',
            'id_user' => 'User Login',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

    public function beforeSave()
    {
        if($this->isNewRecord)
            $this->created_at = new CDbExpression('NOW()');
        $this->updated_at = new CDbExpression('NOW()');
        return parent::beforeSave();
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id_petugas', $this->id_petugas, true);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('nip', $this->nip, true);
        $criteria->compare('jenis_kelamin', $this->jenis_kelamin, true);
        $criteria->compare('alamat', $this->alamat, true);
        $criteria->compare('no_telepon', $this->no_telepon, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('id_user', $this->id_user);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}