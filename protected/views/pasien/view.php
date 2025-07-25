<?php
$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	$model->id_pasien,
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label'=>'Update Pasien', 'url'=>array('update', 'id'=>$model->id_pasien)),
	array('label'=>'Delete Pasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pasien),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>View Pasien #<?php echo $model->id_pasien; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pasien',
		'no_rm',
		'nama',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'alamat',
		'id_provinsi',
		'id_kabupaten',
		'no_telepon',
		'golongan_darah',
		'alergi',
		'created_at',
		'updated_at',
	),
)); ?>
