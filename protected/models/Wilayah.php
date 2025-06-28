<?php
/**
 * This is the model class for table "wilayah".
 *
 * The followings are the available columns in table 'wilayah':
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property integer $tingkat
 * @property integer $id_induk
 */

class Wilayah extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Wilayah the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'wilayah';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('kode, nama, tingkat', 'required'),
            array('kode', 'length', 'max'=>20),
            array('kode', 'unique'), // kode harus unik
            array('nama', 'length', 'max'=>100),
            array('tingkat, id_induk', 'numerical', 'integerOnly'=>true),
            array('id_induk', 'default', 'setOnEmpty'=>true, 'value'=>null),
            // Untuk pencarian
            array('id, kode, nama, tingkat, id_induk', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'tingkat' => 'Tingkat',
            'id_induk' => 'Induk Wilayah',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('kode', $this->kode, true);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('tingkat', $this->tingkat);
        $criteria->compare('id_induk', $this->id_induk);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    // Tambahkan method relasi atau custom function lain jika diperlukan
}