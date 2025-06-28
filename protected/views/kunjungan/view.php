<?php
$this->breadcrumbs=array(
	'Kunjungan'=>array('index'),
	$model->id_kunjungan,
);

$this->menu=array(
	array('label'=>'List Kunjungan', 'url'=>array('index')),
	array('label'=>'Create Kunjungan', 'url'=>array('create')),
	array('label'=>'Update Kunjungan', 'url'=>array('update', 'id'=>$model->id_kunjungan)),
	array('label'=>'Delete Kunjungan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kunjungan),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>View Kunjungan #<?php echo $model->id_kunjungan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id_kunjungan',
        'id_pasien',
        'tanggal_kunjungan',
        'jenis_kunjungan',
        'keluhan_utama',
        'id_dokter',
        'status_pembayaran',
        'created_at',
        'updated_at',
    ),
)); ?>


<h3>Tindakan Medis</h3>
<?php
echo CHtml::beginForm(array('tambahTindakan', 'id'=>$model->id_kunjungan));
echo CHtml::dropDownList('id_tindakan', '', CHtml::listData(Tindakan::model()->findAll(), 'id_tindakan', 'nama'), array('prompt'=>'Pilih Tindakan'));
echo CHtml::textField('keterangan', '', array('placeholder'=>'Keterangan'));
echo CHtml::submitButton('Tambah', array('class'=>'btn btn-primary'));
echo CHtml::endForm();

echo '<ul>';
foreach($model->tindakanKunjungan as $tk){
    echo '<li>'.$tk->tindakan->nama.' ('.$tk->keterangan.') '.CHtml::link('Hapus',array('hapusTindakan','id'=>$tk->id)).'</li>';
}
echo '</ul>';
?>

<h3>Obat Diberikan</h3>
<?php
echo CHtml::beginForm(array('tambahObat', 'id'=>$model->id_kunjungan));
echo CHtml::dropDownList('id_obat', '', CHtml::listData(Obat::model()->findAll(), 'id_obat', 'nama'), array('prompt'=>'Pilih Obat'));
echo CHtml::textField('jumlah', '', array('placeholder'=>'Jumlah'));
echo CHtml::textField('keterangan', '', array('placeholder'=>'Keterangan'));
echo CHtml::submitButton('Tambah', array('class'=>'btn btn-primary'));
echo CHtml::endForm();

echo '<ul>';
foreach($model->obatKunjungan as $ok){
    echo '<li>'.$ok->obat->nama.' ('.$ok->jumlah.') '.$ok->keterangan.' '.CHtml::link('Hapus',array('hapusObat','id'=>$ok->id)).'</li>';
}
echo '</ul>';
?>
