<?php
class Tindakan extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'tindakan';
    }

    public function rules()
    {
        return array(
            array('kode_tindakan, nama_tindakan, kategori, harga', 'required'),
            array('harga', 'numerical'),
            array('kode_tindakan', 'length', 'max'=>20),
            array('nama_tindakan, kategori', 'length', 'max'=>100),
            array('deskripsi, created_at, updated_at', 'safe'),
            array('kode_tindakan', 'unique'),
            // Untuk pencarian
            array('id_tindakan, kode_tindakan, nama_tindakan, kategori, harga, deskripsi, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_tindakan' => 'ID Tindakan',
            'kode_tindakan' => 'Kode Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'kategori' => 'Kategori',
            'harga' => 'Harga',
            'deskripsi' => 'Deskripsi',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

    protected function beforeSave()
    {
        if($this->isNewRecord)
            $this->created_at = new CDbExpression('NOW()');
        $this->updated_at = new CDbExpression('NOW()');
        return parent::beforeSave();
    }
}