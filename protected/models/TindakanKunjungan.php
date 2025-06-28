<?php
class TindakanKunjungan extends CActiveRecord
{
    public static function model($className=__CLASS__){ return parent::model($className); }
    public function tableName(){ return 'tindakan_kunjungan'; }
    public function rules(){
        return array(
            array('id_kunjungan, id_tindakan', 'required'),
            array('id_kunjungan, id_tindakan', 'numerical', 'integerOnly'=>true),
            array('keterangan', 'safe'),
        );
    }
    public function relations(){
        return array(
            'kunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'id_kunjungan'),
            'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
        );
    }
}