<?php
$this->breadcrumbs=array(
	'Petugas Pendaftarans'=>array('index'),
	$model->id_petugas,
);

$this->menu=array(
	array('label'=>'List PetugasPendaftaran', 'url'=>array('index')),
	array('label'=>'Create PetugasPendaftaran', 'url'=>array('create')),
	array('label'=>'Update PetugasPendaftaran', 'url'=>array('update', 'id'=>$model->id_petugas)),
	array('label'=>'Delete PetugasPendaftaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_petugas),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage PetugasPendaftaran', 'url'=>array('admin')),
);
?>

<h1>View PetugasPendaftaran #<?php echo $model->id_petugas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_petugas',
		'nama',
		'nip',
		'jenis_kelamin',
		'alamat',
		'no_telepon',
		'email',
		'id_user',
		'created_at',
		'updated_at',
	),
)); ?>
