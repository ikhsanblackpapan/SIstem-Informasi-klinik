<?php
class Laporan extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'laporan';
    }

    public function rules()
    {
        return array(
            array('jenis_laporan, judul, tanggal_mulai, tanggal_selesai, id_user', 'required'),
            array('id_user', 'numerical', 'integerOnly'=>true),
            array('jenis_laporan', 'length', 'max'=>50),
            array('judul', 'length', 'max'=>100),
            array('parameter, created_at, updated_at', 'safe'),
            array('tanggal_selesai', 'compare', 'compareAttribute'=>'tanggal_mulai', 'operator'=>'>=', 'message'=>'Tanggal selesai harus lebih besar atau sama dengan tanggal mulai'),
            // Untuk pencarian
            array('id_laporan, jenis_laporan, judul, tanggal_mulai, tanggal_selesai, id_user, parameter, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    public function search()
{
    $criteria = new CDbCriteria;

    $criteria->compare('id_laporan', $this->id_laporan, true);
    $criteria->compare('jenis_laporan', $this->jenis_laporan, true);
    $criteria->compare('judul', $this->judul, true);
    $criteria->compare('tanggal_mulai', $this->tanggal_mulai, true);
    $criteria->compare('tanggal_selesai', $this->tanggal_selesai, true);
    $criteria->compare('id_user', $this->id_user, true);
    $criteria->compare('parameter', $this->parameter, true);
    $criteria->compare('created_at', $this->created_at, true);
    $criteria->compare('updated_at', $this->updated_at, true);

    return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
    ));
}

    public function relations()
    {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'id_user'),
            'details' => array(self::HAS_MANY, 'DetailLaporan', 'id_laporan'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id_laporan' => 'ID Laporan',
            'jenis_laporan' => 'Jenis Laporan',
            'judul' => 'Judul',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'id_user' => 'User',
            'parameter' => 'Parameter',
            'created_at' => 'Dibuat Pada',
            'updated_at' => 'Diubah Pada',
        );
    }

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

    public function generateLaporanKunjungan()
    {
        $connection = Yii::app()->db;
        $command = $connection->createCommand("
            SELECT * FROM generate_laporan_kunjungan(:start, :end)
        ");
        $command->bindParam(':start', $this->tanggal_mulai);
        $command->bindParam(':end', $this->tanggal_selesai);
        return $command->queryAll();
    }
}