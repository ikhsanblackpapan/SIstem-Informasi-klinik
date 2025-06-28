<?php
class Resep extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'resep';
    }

    public function rules()
    {
        return array(
            array('id_kunjungan, id_obat, jumlah, id_dokter, id_apoteker, status', 'required'),
            array('id_kunjungan, id_obat, jumlah, id_dokter, id_apoteker', 'numerical', 'integerOnly'=>true),
            array('dosis', 'length', 'max'=>50),
            array('status', 'in', 'range'=>array('Pending','Ditebus','Batal')),
            array('cara_pakai, created_at, updated_at', 'safe'),
            // Validasi stok obat
            array('jumlah', 'validateStokObat'),
            // Untuk pencarian
            array('id_resep, id_kunjungan, id_obat, jumlah, dosis, cara_pakai, id_dokter, id_apoteker, status, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function validateStokObat($attribute, $params)
    {
        if($this->obat && $this->jumlah > $this->obat->stok && $this->status != 'Batal') {
            $this->addError($attribute, 'Stok obat tidak mencukupi');
        }
    }

    public function relations()
    {
        return array(
            'kunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'id_kunjungan'),
            'obat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
            'dokter' => array(self::BELONGS_TO, 'User', 'id_dokter'),
            'apoteker' => array(self::BELONGS_TO, 'User', 'id_apoteker'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_resep' => 'ID Resep',
            'id_kunjungan' => 'Kunjungan',
            'id_obat' => 'Obat',
            'jumlah' => 'Jumlah',
            'dosis' => 'Dosis',
            'cara_pakai' => 'Cara Pakai',
            'id_dokter' => 'Dokter',
            'id_apoteker' => 'Apoteker',
            'status' => 'Status Resep',
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