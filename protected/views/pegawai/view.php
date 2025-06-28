<?php
$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->id_pegawai,
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Update Pegawai', 'url'=>array('update', 'id'=>$model->id_pegawai)),
	array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pegawai),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>View Pegawai #<?php echo $model->id_pegawai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pegawai',
		'nip',
		'nama',
		'jenis_kelamin',
		'alamat',
		'no_telepon',
		'email',
		'jabatan',
		'tanggal_mulai_kerja',
		'status_aktif',
		'created_at',
		'updated_at',
	),
)); ?>
