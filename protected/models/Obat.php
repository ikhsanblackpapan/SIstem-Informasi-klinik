<?php
class Obat extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'obat';
    }

    public function rules()
    {
        return array(
            array('kode_obat, nama_obat, jenis_obat, satuan, harga_beli, harga_jual, id_supplier', 'required'),
            array('stok, id_supplier', 'numerical', 'integerOnly'=>true),
            array('kode_obat', 'length', 'max'=>20),
            array('nama_obat', 'length', 'max'=>100),
            array('jenis_obat', 'in', 'range'=>array('Generik','Paten','Keras','Bebas','Terbatas')),
            array('harga_beli, harga_jual', 'numerical'),
            array('expired_date, created_at, updated_at', 'safe'),
            array('expired_date', 'date', 'format'=>'yyyy-MM-dd'),
            array('kode_obat', 'unique'),
            // Untuk pencarian
            array('id_obat, kode_obat, nama_obat, jenis_obat, satuan, stok, harga_beli, harga_jual, expired_date, id_supplier, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'supplier' => array(self::BELONGS_TO, 'Supplier', 'id_supplier'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_obat' => 'ID Obat',
            'kode_obat' => 'Kode Obat',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'satuan' => 'Satuan',
            'stok' => 'Stok',
            'harga_beli' => 'Harga Beli',
            'harga_jual' => 'Harga Jual',
            'expired_date' => 'Tanggal Kadaluarsa',
            'id_supplier' => 'Supplier',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

    public function search()
{
    $criteria = new CDbCriteria;

    $criteria->compare('id_obat', $this->id_obat, true);
    $criteria->compare('kode_obat', $this->kode_obat, true);
    $criteria->compare('nama_obat', $this->nama_obat, true);
    $criteria->compare('jenis_obat', $this->jenis_obat, true);
    $criteria->compare('satuan', $this->satuan, true);
    $criteria->compare('stok', $this->stok);
    $criteria->compare('harga_beli', $this->harga_beli);
    $criteria->compare('harga_jual', $this->harga_jual);
    $criteria->compare('expired_date', $this->expired_date, true);
    $criteria->compare('id_supplier', $this->id_supplier);
    $criteria->compare('created_at', $this->created_at, true);
    $criteria->compare('updated_at', $this->updated_at, true);

    return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
    ));
}

    protected function beforeSave()
    {
        if(!parent::beforeSave())
            return false;

        if($this->isNewRecord) {
            $this->created_at = new CDbExpression('NOW()');
        }
        $this->updated_at = new CDbExpression('NOW()');

        // Pastikan harga jual >= harga beli
        if($this->harga_jual < $this->harga_beli) {
            $this->addError('harga_jual', 'Harga jual tidak boleh lebih kecil dari harga beli');
            return false;
        }

        return true;
    }

    public function updateStok($jumlah)
    {
        $this->stok += $jumlah;
        return $this->save();
    }
}