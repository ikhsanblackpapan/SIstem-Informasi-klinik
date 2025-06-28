<?php
class ObatKunjungan extends CActiveRecord
{
    public static function model($className=__CLASS__){ return parent::model($className); }
    public function tableName(){ return 'obat_kunjungan'; }
    public function rules(){
        return array(
            array('id_kunjungan, id_obat, jumlah', 'required'),
            array('id_kunjungan, id_obat, jumlah', 'numerical', 'integerOnly'=>true),
            array('keterangan', 'safe'),
        );
    }
    public function relations(){
        return array(
            'kunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'id_kunjungan'),
            'obat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
        );
    }
}